<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slideshow - Hoveniers Clannie</title>
    <style>
      /* slideshow CSS */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        color: #333;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      .blue-header {
        background-color: #4a90e2;
        height: 20px;
        width: 100%;
      }

      .slideshow-container {
        position: relative;
        flex: 1;
        background: white;
        overflow: hidden;
      }

      .slide {
        display: none;
        position: relative;
      }

      .slide.active {
        display: block;
      }

      .slide img {
        width: 100%;
        height: calc(100vh - 40px);
        object-fit: cover;
        display: block;
      }

      .slide-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        color: white;
        padding: 40px 20px 20px;
      }

      .slide-title {
        font-size: 2em;
        margin-bottom: 10px;
        font-weight: bold;
      }

      .slide-description {
        font-size: 1.1em;
        line-height: 1.4;
      }

      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        background: rgba(74, 144, 226, 0.8);
        border: none;
        user-select: none;
        transition: background 0.3s;
        z-index: 10;
      }

      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      .prev {
        left: 0;
        border-radius: 0 3px 3px 0;
      }

      .prev:hover,
      .next:hover {
        background: rgba(74, 144, 226, 1);
      }

      .dots-container {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        z-index: 10;
      }

      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 5px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.3s;
        border: 2px solid rgba(255, 255, 255, 0.8);
      }

      .dot.active,
      .dot:hover {
        background-color: white;
      }

      .orange-footer {
        background-color: #ff9800;
        height: 20px;
        width: 100%;
      }

      @media screen and (max-width: 768px) {
        .slide img {
          height: calc(100vh - 40px);
        }

        .slide-title {
          font-size: 1.5em;
        }

        .slide-description {
          font-size: 1em;
        }

        .prev,
        .next {
          padding: 12px;
          font-size: 16px;
        }
      }
    </style>
  </head>
  <body>
    <div class="blue-header"></div>

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

      <div class="dots-container">
        <span class="dot active" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
    </div>

    <div class="orange-footer"></div>

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
  </body>
</html>
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
  </body>
</html>
