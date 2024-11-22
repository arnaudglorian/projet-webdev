let currentSlide = 0;

// Fonction pour ouvrir le carrousel
function openCarousel() {
    document.getElementById('carouselModal').style.display = 'flex';
    showSlide(currentSlide);
}

// Fonction pour fermer le carrousel
function closeCarousel() {
    document.getElementById('carouselModal').style.display = 'none';
}

// Fonction pour changer de diapositive
function changeSlide(direction) {
    const slides = document.querySelectorAll('.carousel-item');
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

// Fonction pour afficher une diapositive spécifique
function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    slides.forEach(slide => slide.classList.remove('active'));
    slides[index].classList.add('active');
}

// Clique à coté et ferme la page
window.onclick = function(event) {
    var modal = document.getElementById("carouselModal");
    if (event.target === modal) {
        closeCarousel();
    }
}