import React from "react";
import "./listProduits.css";
import { DetailsProduit } from "./DetailsProduit";
export const ListProduits = (props) => {
  return (
    <div className="listProduit">
      <DetailsProduit
        titreProduit={props.listProduit[0].titre}
        descriptionProduit={props.listProduit[0].description}
        dateProduit={props.listProduit[0].date}
        prixProduit={props.listProduit[0].prix}
      />
      <DetailsProduit
        titreProduit={props.listProduit[1].titre}
        descriptionProduit={props.listProduit[1].description}
        dateProduit={props.listProduit[1].date}
        prixProduit={props.listProduit[1].prix}
      />
      <DetailsProduit
        titreProduit={props.listProduit[2].titre}
        descriptionProduit={props.listProduit[2].description}
        dateProduit={props.listProduit[2].date}
        prixProduit={props.listProduit[2].prix}
      />
    </div>
  );
};
