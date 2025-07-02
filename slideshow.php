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

  .slideshow-section {
    padding: 0;
    margin: 0;
  }

  .slideshow-container {
    position: relative;
    height: 60vh;
    background: white;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
    height: 60vh;
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
    max-width: 600px;
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
    background: rgba(128, 128, 128, 0.8);
    border: none;
    user-select: none;
    transition: background 0.3s;
    z-index: 10;
  }

  .next {
    right: 10px;
    border-radius: 3px 0 0 3px;
  }

  .prev {
    left: 10px;
    border-radius: 0 3px 3px 0;
  }

  .prev:hover,
  .next:hover {
    background: rgba(128, 128, 128, 1);
  }

  .dots-container {
    text-align: center;
    padding: 20px;
    background: #f8f8f8;
  }

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 5px;
    background-color: #ccc;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s;
    border: 2px solid #888;
  }

  .dot.active,
  .dot:hover {
    background-color: #888;
  }

  .slideshow-header {
    text-align: center;
    padding: 40px 20px 20px;
    background: #f8f8f8;
  }

  .slideshow-header h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
    color: #333;
    font-weight: bold;
  }

  .slideshow-header p {
    font-size: 1.2em;
    color: #666;
  }

  @media screen and (max-width: 768px) {
    .slideshow-container {
      height: 40vh;
    }

    .slide img {
      height: 40vh;
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

    .slideshow-header h1 {
      font-size: 2em;
    }
  }
</style>

<div class="blue-header"></div>

<div class="slideshow-header">
  <h1>Onze Projecten</h1>
  <p>Bekijk enkele voorbeelden van ons vakmanschap</p>
</div>

<div class="slideshow-container">
  <div class="slide active">
    <img src="images/tuin1.webp" alt="Moderne Tuinaanleg" />
    <div class="slide-content">
      <div class="slide-title">Onze vijvers</div>
      <div class="slide-description">
       een mooie vijver! ideaal voor rust en ontspanning aan het water. 
      </div>
        </div>
      </div>

      <div class="slide">
        <img src="images/tuin2.webp" alt="Groen Grasveld" />
        <div class="slide-content">
      <div class="slide-title">Groen Grasveld</div>
      <div class="slide-description">
        Een fris, strak gemaaid grasveldje biedt volop ruimte om te spelen en te genieten van het buitenleven. Perfect voor gezinnen en huisdieren.
      </div>
        </div>
      </div>

      <div class="slide">
        <img src="images/tuin3.webp" alt="Kleine Stadstuin" />
        <div class="slide-content">
      <div class="slide-title">onze tegelaanleg</div>
      <div class="slide-description">
      onze mooie tegels zorgen voor een goeie basis voor in uw tuin met een van de sterkste anti groenaanslag lagen
      </div>
        </div>
      </div>

      <div class="slide">
        <img src="images/tuin4.webp" alt="Landelijke Tuin" />
        <div class="slide-content">
      <div class="slide-title">een moderne tuin</div>
      <div class="slide-description">
       een moderne tuin gemaakt met de beste kwaliteit materialen en producten, die zorgen voor een lange levensduur en weinig onderhoud.
      </div>
        </div>
      </div>
      </div>
    </div>
  </div>

 
</div>

<div class="dots-container">
  <span class="dot active" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
  // Array met slide informatie - HIER KUN JE NIEUWE PLAATJES TOEVOEGEN
  const slides = [{
      image: "images/tuin1.jpg",
      title: "Moderne Tuinaanleg",
      description: "Een prachtige moderne tuin met strakke lijnen en duurzame materialen. Inclusief tuinverlichting en automatisch irrigatiesysteem.",
    },
    {
      image: "images/tuin2.jpg",
      title: "Klassieke Tuinrenovatie",
      description: "Renovatie van een klassieke tuin met behoud van de originele charme. Nieuwe beplanting en herstel van natuursteen elementen.",
    },
    {
      image: "images/tuin3.jpg",
      title: "Kleine Stadstuin",
      description: "Optimaal gebruik van de ruimte in deze compacte stadstuin. Verticaal groen en multifunctionele elementen.",
    },
    {
      image: "images/tuin4.jpg",
      title: "Landelijke Tuin",
      description: "Ruime landelijke tuin met natuurlijke materialen en inheemse beplanting. Perfect voor families met kinderen.",
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

  // Start automatic slideshow immediately
  document.addEventListener("DOMContentLoaded", function() {
    showSlide(0);
    startSlideshow();
  });

  // Also start slideshow if DOM is already loaded
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
      showSlide(0);
      startSlideshow();
    });
  } else {
    showSlide(0);
    startSlideshow();
  }

  // Pause slideshow on hover
  const slideshowContainer = document.querySelector(".slideshow-container");
  if (slideshowContainer) {
    slideshowContainer.addEventListener("mouseenter", () => {
      clearInterval(slideInterval);
    });

    slideshowContainer.addEventListener("mouseleave", () => {
      startSlideshow();
    });
  }

  // Keyboard navigation
  document.addEventListener("keydown", function(e) {
    if (e.key === "ArrowLeft") {
      changeSlide(-1);
    } else if (e.key === "ArrowRight") {
      changeSlide(1);
    }
  });
</script>