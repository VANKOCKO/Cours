import logo from "./logo.svg";
import "./App.css";
import { ListProduits } from "./components/ListProduits";
import Produits from "./Produits";

function App() {
  return (
    <div className="App">
      <h2>List des produits</h2>
      <div>
        <ListProduits listProduit={Produits} />
      </div>
    </div>
  );
}
export default App;
