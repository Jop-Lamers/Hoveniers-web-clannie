<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Ervaringen van anderen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="testimonials">
        <h1>Ervaringen van anderen</h1>
        <div id="testimonial-container">
            <div class="testimonial">
                <h2>Hella Hoes</h2>
                <div class="review-content">
                    <div class="avatar"></div>
                    <p>“Heel erg bedankt voor de efficiënte service, je was heel snel klaar en ik zal je nummer zeker behouden om je weer te gebruiken.”</p>
                </div>
                <div class="stars">★★★★★</div>
            </div>

            <div class="testimonial">
                <h2>Henk Hoes</h2>
                <div class="review-content">
                    <div class="avatar"></div>
                    <p>“Ga alsjeblieft door met het bezoeken aan het huis van mijn vader, want je doet geweldig werk!”</p>
                </div>
                <div class="stars">★★★★★</div>
            </div>

            <div class="testimonial">
                <h2>Hans Hogedijk</h2>
                <div class="review-content">
                    <div class="avatar"></div>
                    <p>“Zoals u weet ben ik altijd tevreden geweest met de service die u de afgelopen jaren heeft verleend. Vertel me alstublieft wanneer u klaar bent om volgend jaar weer te beginnen met het maaien van mijn gazons, aangezien ik graag uw diensten wil blijven ontvangen.”</p>
                </div>
                <div class="stars">★★★★★</div>
            </div>
        </div>
        <div class="load-more">↓</div>
    </div>




  <script>
    const loadMoreButton = document.querySelector('.load-more');

    loadMoreButton.addEventListener('click', function() {
        loadMoreButton.classList.toggle('extra-gap');

        // Optioneel: verander de pijl van ↓ naar ↑ en terug
        if (loadMoreButton.classList.contains('extra-gap')) {
            loadMoreButton.textContent = '↑';
        } else {
            loadMoreButton.textContent = '↓';
        }
    });
</script>



<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.testimonials {
    max-width: 1200px;
    margin: 40px auto;
}

.testimonials h1 {
    background-color: #ff9d00;
    color: #000;
    padding: 20px;
    text-align: center;
    font-size: 2rem;
}

.testimonial {
    border: 1px solid #ccc;
    padding: 20px;
    margin: 20px 0;
    position: relative;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.testimonial h2 {
    font-size: 1.25rem;
}

.review-content {
    display: flex;
    align-items: flex-start;
}

.avatar {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 20px;
}

.review-content p {
    font-size: 1rem;
    line-height: 1.5;
}

.stars {
    color: #ff9d00;
    font-size: 1.25rem;
    margin-top: 10px;
}

.load-more {
    text-align: center;
    font-size: 2rem;
    cursor: pointer;
    padding: 20px;
    color: #ff9d00;
    user-select: none;
    transition: margin 0.3s ease;
}

.load-more.extra-gap {
    margin-top: 300px; /* Hier komt de ruimte boven de pijl */
}

.load-more:hover {
    transform: translateY(3px);
}










body {
  font-family: Arial, sans-serif;
  margin: 0;
  background-color: #ffffff; /* Achtergrond */
  max-height: 100px;
  color: #000000; /* teksts kleur */
}

.container {
  max-width: 1400px; /* breedte van valk */
  margin: 0 auto;
  padding: 20px;
}

.top-text {
  text-align: center;
  background-color: #f0f0f0; 
  padding: 20px;
  border-bottom: 5px solid #fdb913;
  color: #000;
}

.top-text h3 {
  margin-top: 20px;
  font-weight: bold;
  color: #000;
}

.divider {
  height: 10px;
  background-color: #fdb913;
}

.content {
  display: flex;
  flex-wrap: wrap;
  background-color: #ffffff;
  padding: 20px;
  gap: 20px;
  color: #000;
}

.left {
  flex: 1;
  min-width: 250px;
}

.phone {
  font-size: 1.2em;
  color: #0077b6; /* Blauwe tint */
}

.contact-info h4 {
  font-style: italic;
  color: #333;
}

.contact-info a {
  color: #333;
  text-decoration: none;
}

.right {
  flex: 1;
  min-width: 250px;
}

.openingsuren {
  background-color: #e0e0e0;
  padding: 15px;
  margin-bottom: 10px;
  text-align: center;
  color: #000;
}

.map img {
  width: 100%;
  height: auto;
  border: 2px solid #ccc;
}
</style>
</body>
</html>



