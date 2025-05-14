const track = document.getElementById("track");
const nextButton = document.getElementById("nxtbtn");
const prevButton = document.getElementById("prvbtn");

let currentIndex = 0;
const slides = document.querySelectorAll(".slide-group");
const totalSlides = slides.length;

nextButton.addEventListener("click", () => {
    if (currentIndex < totalSlides - 1) {
        currentIndex++;
        updateCarousel();
    }
});

prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
    }
});

function updateCarousel() {
    const slideWidth = slides[0].offsetWidth;
    track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
}
