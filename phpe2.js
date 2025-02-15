const slider = document.querySelector('.slider');
const dots = document.querySelectorAll('.dot');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

let currentIndex = 0;

function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % dots.length;
    updateSlider();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + dots.length) % dots.length;
    updateSlider();
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        currentIndex = index;
        updateSlider();
    });
});

rightArrow.addEventListener('click', nextSlide);
leftArrow.addEventListener('click', prevSlide);