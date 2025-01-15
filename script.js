// Main Slider Logic
const mainSlides = document.querySelectorAll('.slide');
const mainDots = document.querySelectorAll('.dot');
let mainCurrentIndex = 0;
let mainSlideInterval;

// Show the active slide for the main slider
function showMainSlide(index) {
    const totalSlides = mainSlides.length;

    // Wrap around when index is out of bounds
    if (index >= totalSlides) {
        mainCurrentIndex = 0;
    } else if (index < 0) {
        mainCurrentIndex = totalSlides - 1;
    } else {
        mainCurrentIndex = index;
    }

    // Move slides
    const offset = -mainCurrentIndex * 100;
    document.querySelector('.slides').style.transform = `translateX(${offset}%)`;

    // Update dots
    mainDots.forEach((dot, idx) => {
        dot.classList.toggle('active', idx === mainCurrentIndex);
    });
}

// Auto-slide for main slider
function startMainAutoSlide() {
    mainSlideInterval = setInterval(() => {
        showMainSlide(mainCurrentIndex + 1);
    }, 3000);
}

// Stop auto-slide for main slider
function stopMainAutoSlide() {
    clearInterval(mainSlideInterval);
}

// Event listeners for main dots
mainDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        stopMainAutoSlide();
        showMainSlide(index);
        startMainAutoSlide();
    });
});

// Initialize main slider
showMainSlide(mainCurrentIndex);
startMainAutoSlide();

// -------------------------------------------------------------------

const track = document.querySelector('.carousel-track');
const items = document.querySelectorAll('.carousel-item');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let currentSlide = 0;
const itemsPerSlide = 3; // Number of visible items
const totalSlides = Math.ceil(items.length / itemsPerSlide);

function updateCarousel() {
    const offset = -currentSlide * (100 / itemsPerSlide);
    track.style.transform = `translateX(${offset}%)`;
}

leftArrow.addEventListener('click', () => {
    if (currentSlide > 0) {
        currentSlide--;
        updateCarousel();
    }
});

rightArrow.addEventListener('click', () => {
    if (currentSlide < totalSlides - 1) {
        currentSlide++;
        updateCarousel();
    }
});

// Initialize the carousel
updateCarousel();


// -------------------------------------------------------------------
