import "../assets/css/Banner.css";
import logo from "../assets/img/logo.png";
import Recommmandation from "./Recommandation";

function Bannner() {
  const title = "La maison jungle!";

  return (
    <div>
      <div className="lmj-banner">
        <img src={logo} alt="La maison jungle" className="lmj-logo" />
        <h1 className="lmj-title">{title}</h1>
      </div>
      <Recommmandation></Recommmandation>
    </div>
  );
}

export default Bannner;
