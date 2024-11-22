// Référence aux éléments du DOM
const reviewForm = document.getElementById('reviewForm');
const reviewsList = document.getElementById('reviews-list');

// Fonction pour ajouter un nouvel avis
reviewForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Empêche la soumission par défaut

    // Récupère les données du formulaire
    const name = document.getElementById('name').value.trim();
    const reviewText = document.getElementById('reviewText').value.trim();

    if (name && reviewText) {
        // Crée une nouvelle carte d'avis
        const reviewCard = document.createElement('div');
        reviewCard.classList.add('review-card');

        reviewCard.innerHTML = `
            <p class="review-text">"${reviewText}"</p>
            <div class="review-author">
                <div>
                    <h4>${name}</h4>
                </div>
            </div>
        `;

        // Ajoute la nouvelle carte à la liste des avis
        reviewsList.appendChild(reviewCard);

        // Réinitialise le formulaire
        reviewForm.reset();
        alert('Merci pour votre avis !');
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});
