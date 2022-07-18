import React from "react";
import "./detailsProduit.css";
export const DetailsProduit = (props) => {
  return (
    <div className="detailsProduit">
      <div className="produitDate">{props.dateProduit}</div>
      <div className="produitTitre">
        <h2>{props.titreProduit}</h2>
      </div>
      <div className="produitDescription">{props.descriptionProduit}</div>
      <div className="produitPrix">{props.prixProduit}</div>
    </div>
  );
};
