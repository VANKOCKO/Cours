<?php 

Namespace src\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Item")
 */
class Item {

    /**
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue
    */
    private $Id;
      /**
     * @ORM\ManyToOne(targetEntity="Order")
     * @ORM\JoinColumn(name="order_id", nullable=false)
     */
    private $order;
     /**
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumn(name="product_id", nullable=false)
     */
    private $product;
     /**
     * @ORM\Column(type="integer")
     */
    private $price;
     /**
     * @ORM\Column(type="datetime", name="created_at")
     * @var \DateTimeInterface
    */
    private $createAt;
    public  function __construct(){
        $this->createdAt = new DateTimeImmutable();
    }

    /**
     * Get *@ORM\Id
     */ 
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Get oRM\ManyToOne(targetEntity="Order")
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set oRM\ManyToOne(targetEntity="Order")
     *
     * @return  self
     */ 
    public function setOrder(Order $order)
    {
        $this->order = $order;
        $order->addItem($this);
        return $this;
    }

    /**
     * Get oRM\ManyToOne(targetEntity="Product")
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set oRM\ManyToOne(targetEntity="Product")
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get *@ORM\Column(type="integer")
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set *@ORM\Column(type="integer")
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get *@ORM\Column(type="datetime", name="created_at")
     */ 
    public function getCreateAt()
    {
        return $this->createAt;
    }
}



?>