// Récupération des éléments du DOM
const carousel = document.getElementById('carousel');
const carouselImage = document.getElementById('carousel-image');
const carouselDescription = document.getElementById('carousel-description');
const closeBtn = document.querySelector('.close');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');

let currentIndex = 0;
let currentImages = [];
let currentDescriptions = [];

// Fonction pour afficher le carrousel
function showCarousel(images, descriptions, index) {
    currentImages = images;
    currentDescriptions = descriptions;
    currentIndex = index;

    // Met à jour l'image et la description
    updateCarousel();
    carousel.style.display = 'flex';
}

// Met à jour l'image et la description dans le carrousel
function updateCarousel() {
    carouselImage.src = currentImages[currentIndex].src;
    carouselDescription.textContent = currentDescriptions[currentIndex];
}

// Fermer le carrousel
closeBtn.addEventListener('click', () => {
    carousel.style.display = 'none';
});

// Naviguer dans le carrousel
prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
    updateCarousel();
});

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % currentImages.length;
    updateCarousel();
});

// Ajouter les événements aux images des enclos
document.querySelectorAll('.enclos').forEach(enclosElement => {
    const enclosImages = enclosElement.querySelectorAll('.image-container img');
    const enclosDescriptions = Array.from(enclosElement.querySelectorAll('.image-container p'))
        .map(p => p.textContent.trim()); // Récupère le texte des balises <p>

    enclosImages.forEach((img, imageIndex) => {
        img.addEventListener('click', () => {
            const enclosSrcs = Array.from(enclosImages); // Liste des images de l'enclos
            showCarousel(enclosSrcs, enclosDescriptions, imageIndex);
        });
    });
});
