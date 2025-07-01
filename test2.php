<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatische Slideshow</title>
    <style>
        body {
            background: #222;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .slideshow-container {
            background: linear-gradient(#f5f5f5, #bbb);
            margin: 40px auto;
            padding: 30px 0 40px 0;
            border-top: 10px solid #ffb300;
            border-bottom: 10px solid #03a9f4;
            width: 80vw;
            max-width: 900px;
            min-height: 500px;
            box-shadow: 0 0 10px #0005;
            border-radius: 8px;
            text-align: center;
        }
        .slideshow-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .slide-img {
            max-width: 350px;
            max-height: 300px;
            margin: 0 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #0003;
            object-fit: cover;
            vertical-align: middle;
            background: #fff;
        }
        .slide {
            display: none;
        }
        .slide.active {
            display: inline-block;
        }
        .dots {
            margin-top: 30px;
        }
        .dot {
            display: inline-block;
            width: 14px;
            height: 14px;
            margin: 0 5px;
            background: #bbb;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }
        .dot.active {
            background: #03a9f4;
        }
    </style>
</head>

<body>
    <div class="slideshow-container">
        <div class="slideshow-title">Automatische slideshow</div>
        <div id="slides">
            <!-- Slides worden hier geplaatst door JS -->
        </div>
        <div class="dots" id="dots"></div>
    </div>
    <script>
        // Voeg hier je foto's toe
        const images = [
            'img/voorbeeld1.jpg',
            'img/voorbeeld2.jpg',
            // Voeg meer paden toe zoals hieronder:
            // 'img/voorbeeld3.jpg',
        ];

        const slidesDiv = document.getElementById('slides');
        const dotsDiv = document.getElementById('dots');

        let current = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        function createSlides() {
            slidesDiv.innerHTML = '';
            dotsDiv.innerHTML = '';
            images.forEach((src, i) => {
                const slide = document.createElement('img');
                slide.src = src;
                slide.className = 'slide slide-img' + (i === 0 ? ' active' : '');
                slidesDiv.appendChild(slide);

                const dot = document.createElement('span');
                dot.className = 'dot' + (i === 0 ? ' active' : '');
                dot.onclick = () => {
                    current = i;
                    showSlide(current);
                };
                dotsDiv.appendChild(dot);
            });
        }

        function nextSlide() {
            current = (current + 1) % images.length;
            showSlide(current);
        }

        createSlides();
        setInterval(nextSlide, 3500);
    </script>
</body>

</html>
