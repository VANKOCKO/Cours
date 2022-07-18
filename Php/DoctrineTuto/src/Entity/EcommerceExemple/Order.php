<?php 
namespace src\Entity\EcommerceExemple;
use Doctrine\ORM\Mapping as ORM;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Order")
 */
class Order {
    /**
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue
    */
    private $id;
    /**
     *@ORM\Column(type="string",name="delivery_name")
    */
    private $deliveryName;
    /**
     *@ORM\Column(type="text",name="delivery_address")
    */
    private $deliveryAddress;
    /**
     *@ORM\OneToMany(targetEntity="Item", mappedBy="order")
     */
    private $items;

    /**
     *@ORM\Column(type="datetime", name="created_at")
     *@var \DateTimeInterface
    */
    private $createdAt;



    /**
     * @ORM\Column(type="datetime", name="cancelled_at", nullable=true)
     * @var \DateTimeInterface
     */
    private ?\DateTimeImmutable $cancelledAt = null;
    

    public  function __construct(){
        $this->createdAt = new DateTimeImmutable();
        $this->items = new ArrayCollection();
    }

    /**
     * Get *@ORM\Id
     */ 
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get *@ORM\Column(type="string")
     */ 
    public function getDeliveryName()
    {
        return $this->deliveryName;
    }

    /**
     * Set *@ORM\Column(type="string")
     *
     * @return  self
     */ 
    public function setDeliveryName($deliveryName)
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    /**
     * Get *@ORM\Column(type="text")
     */ 
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * Set *@ORM\Column(type="text")
     *
     * @return  self
     */ 
    public function setDeliveryAddress($deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * Get *@ORM\Column(type="datetime", name="created_at")
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
        
    /**
     * addItems
     *
     * @param  mixed $item
     * @return void
     */
    public function addItem(Item $item){
        $items[] = $item;
    }
    
    /**
     * getItems
     *
     * @return void
     */
    public function getItems(){
        return $this->items;
    }

    /**
     * Get the value of cancelledAt
     *
     * @return  \DateTimeInterface
     */ 
    public function getCancelledAt()
    {
        return $this->cancelledAt;
    }

    /**
     * Set the value of cancelledAt
     *
     * @param  \DateTimeInterface  $cancelledAt
     *
     * @return  self
     */ 
    public function setCancelledAt(\DateTimeInterface $cancelledAt)
    {
        $this->cancelledAt = $cancelledAt;

        return $this;
    }
}



?>