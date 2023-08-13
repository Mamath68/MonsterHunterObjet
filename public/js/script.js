/* *****************NAVBAR***************************/
// Ouvrir la navbar verticale(sidebar)
function openNav() {
  // Fixer la largeur de la sidebar une fois ouverte
  document.getElementById("mySidebar").style.width = "101vw";
  // Fixer la largeur de la sidebar une fois ouverte
  document.getElementById("mySidebar").style.height = "100vh";
  // Fixer la largeur de la sidebar une fois ouverte
  document.getElementById("mySidebar").style.position = "fixed";
  // Centrer le texte lorsque la navbar est ouverte
  document.getElementById("mySidebar").style.textAlign = "center";
  // Masquer le bouton ouvrir lorsque la sidebar est ouverte pour eviter de deregler l'affichage.
  document.getElementsByClassName("main2").style.display = "hidden";
}
//   Fermer la Sidebar
function closeNav() {
  // fixer la largeur de la sidebar fermé
  document.getElementById("mySidebar").style.width = "0";
  // fixer la position du bouton ouvrir une fois la sidebar est fermé.
  document.getElementsByClassName("main2").style.marginLeft = "0";
}

/**AUSSI NAVBAR, MAIS POUR LE PROFIL USER****/

const icons = document.querySelectorAll(".logbottom i");
const logBottomElement = document.querySelector(".logbottom");
const logMessageElement = document.getElementById("log-message");

const logMessageDefault = logMessageElement.innerText;
const logMessages = ["Mon profil", "Liste des utilisateurs", "Déconnexion"];


// pour chaque icône qui peut être survolée
icons.forEach((icon, iconIndex) =>
  // cette icône va écouter l'évènement mouseover (survol souris) et lors d'un survol au-dessus de cet élément, va exécuter la fonction
  icon.addEventListener("mouseover", function () {
    // mise à jour du texte écrit dans log-message
    updateMessage(logMessages[iconIndex]);
  })
);

function updateMessage(text) {
  logMessageElement.innerText = text;
}

// réinitialisation du message par défaut (d'origine)
logBottomElement.addEventListener("mouseout", function () {
  updateMessage(logMessageDefault);
})

