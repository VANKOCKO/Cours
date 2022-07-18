import "../assets/css/Cart.css";
function Cart() {
  const FruitPrice = 8;
  const JuicePrice = 10;
  const RicePrice = 30;
  return (
    <div className="lmj-cart">
      <h2>Panier</h2>
      <ul>
        <li>Jus de Fruit : {JuicePrice} € </li>
        <li>Fruit et Legume : {FruitPrice} €</li>
        <li>Riz : {RicePrice} €</li>
      </ul>
      <h4>Total : {JuicePrice + FruitPrice + RicePrice} €</h4>
    </div>
  );
}

export default Cart;
