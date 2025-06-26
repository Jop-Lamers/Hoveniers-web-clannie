<?php
include 'headfoot.php';
renderHeader("Projecten - Hendrik Hogendijk Hoveniers", "projecten");
?>

<div class="slideshow-body">
    <div class="main-container">
        <div class="orange-header"></div>

        <div class="slideshow-header">
            <h1>Onze Projecten</h1>
        </div>

        <div class="slideshow-container">
            <div class="slide active">
                <img src="images/tuin1.jpg" alt="Moderne tuin" />
                <div class="slide-content">
                    <div class="slide-title">Moderne Tuinaanleg</div>
                    <div class="slide-description">
                        Een prachtige moderne tuin met strakke lijnen en duurzame
                        materialen. Inclusief tuinverlichting en automatisch
                        irrigatiesysteem.
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="images/tuin2.jpg" alt="Klassieke tuin" />
                <div class="slide-content">
                    <div class="slide-title">Klassieke Tuinrenovatie</div>
                    <div class="slide-description">
                        Renovatie van een klassieke tuin met behoud van de originele
                        charme. Nieuwe beplanting en herstel van natuursteen elementen.
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="images/tuin3.jpg" alt="Kleine tuin" />
                <div class="slide-content">
                    <div class="slide-title">Kleine Stadstuin</div>
                    <div class="slide-description">
                        Optimaal gebruik van de ruimte in deze compacte stadstuin.
                        Verticaal groen en multifunctionele elementen.
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="images/tuin4.jpg" alt="Grote tuin" />
                <div class="slide-content">
                    <div class="slide-title">Landelijke Tuin</div>
                    <div class="slide-description">
                        Ruime landelijke tuin met natuurlijke materialen en inheemse
                        beplanting. Perfect voor families met kinderen.
                    </div>
                </div>
            </div>

            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>

        <div class="dots-container">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>

        <div class="blue-footer"></div>
    </div>
</div>

<script>
    // Array met slide informatie - HIER KUN JE NIEUWE PLAATJES TOEVOEGEN
    const slides = [
        {
            image: "images/tuin1.jpg",
            title: "Moderne Tuinaanleg",
            description:
                "Een prachtige moderne tuin met strakke lijnen en duurzame materialen. Inclusief tuinverlichting en automatisch irrigatiesysteem.",
        },
        {
            image: "images/tuin2.jpg",
            title: "Klassieke Tuinrenovatie",
            description:
                "Renovatie van een klassieke tuin met behoud van de originele charme. Nieuwe beplanting en herstel van natuursteen elementen.",
        },
        {
            image: "images/tuin3.jpg",
            title: "Kleine Stadstuin",
            description:
                "Optimaal gebruik van de ruimte in deze compacte stadstuin. Verticaal groen en multifunctionele elementen.",
        },
        {
            image: "images/tuin4.jpg",
            title: "Landelijke Tuin",
            description:
                "Ruime landelijke tuin met natuurlijke materialen en inheemse beplanting. Perfect voor families met kinderen.",
        },
    ];

    let currentSlideIndex = 0;
    let slideInterval;

    function showSlide(index) {
        const slideElements = document.querySelectorAll(".slide");
        const dotElements = document.querySelectorAll(".dot");

        // Hide all slides
        slideElements.forEach((slide) => slide.classList.remove("active"));
        dotElements.forEach((dot) => dot.classList.remove("active"));

        // Show current slide
        slideElements[index].classList.add("active");
        dotElements[index].classList.add("active");
    }

    function changeSlide(direction) {
        currentSlideIndex += direction;

        if (currentSlideIndex >= slides.length) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = slides.length - 1;
        }

        showSlide(currentSlideIndex);
        resetInterval();
    }

    function currentSlide(index) {
        currentSlideIndex = index - 1;
        showSlide(currentSlideIndex);
        resetInterval();
    }

    function nextSlide() {
        changeSlide(1);
    }

    function startSlideshow() {
        slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function resetInterval() {
        clearInterval(slideInterval);
        startSlideshow();
    }

    // Start automatic slideshow when page loads
    document.addEventListener("DOMContentLoaded", function () {
        showSlide(0);
        startSlideshow();
    });

    // Pause slideshow on hover
    const slideshowContainer = document.querySelector(".slideshow-container");
    slideshowContainer.addEventListener("mouseenter", () => {
        clearInterval(slideInterval);
    });

    slideshowContainer.addEventListener("mouseleave", () => {
        startSlideshow();
    });

    // Keyboard navigation
    document.addEventListener("keydown", function (e) {
        if (e.key === "ArrowLeft") {
            changeSlide(-1);
        } else if (e.key === "ArrowRight") {
            changeSlide(1);
        }
    });
</script>

<?php
renderFooter();
?>
