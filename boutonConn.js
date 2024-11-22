// Fonction pour ouvrir la modale
function openModal() {
    document.getElementById("loginModal").style.display = "flex";
}
// Fonction pour fermer la modale
function closeModal() {
    document.getElementById("loginModal").style.display = "none";
}
// Ferme la modale si on clique en dehors du contenu
window.onclick = function(event) {
    var modal = document.getElementById("loginModal");
    if (event.target === modal) {
        closeModal();
    }
}

function openModal2() {
    document.getElementById("inscrModal").style.display = "flex";
}

function closeModal2() {
    document.getElementById("inscrModal").style.display = "none";
}

window.onclick = function(event) {
    var modal2 = document.getElementById("inscrModal");
    if (event.target === modal2) {
        closeModal2();
    }
}