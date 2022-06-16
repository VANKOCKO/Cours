let textSurvoler = document.getElementById("textSurvoler");
// Ce gestionnaire sera exécuté à chaque fois que le curseur
// se déplacera sur un autre élément de la liste
textSurvoler.addEventListener("mouseover", function( event ) {
  // on met l'accent sur la cible de mouseover
    console.log(this.textContent)
});
