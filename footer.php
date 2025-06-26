<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>
<body>
    
    
    <div class="container">
    <div class="top-text">
      <p>
        Ik streef ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is.
        Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende
        offerte kunt u contact met ons opnemen wanneer het u uitkomt.
      </p>
      <h3>Wij zijn u graag van dienst!</h3>
    </div>

    <div class="divider"></div>

    <div class="content">
      <div class="left">
        <p class="phone"><strong>+31 6 21436587</strong></p>
        <div class="contact-info">
          <h4>Contact gegevens<br>Omgeving-Adres:</h4>
          <p>Telefonisch beschikbaar van<br>7:00 - 19:00</p>
          <p>Hendrik Hogendijk Hovenier<br>Utrecht, Zeist en De Bilt</p>
          <p>Hoefstraat 42, 7143HH Huis ter Heide</p>
          <p><a href="mailto:hendrikhogendijkhovenier@gmail.com">hendrikhogendijkhovenier@gmail.com</a></p>
        </div>
      </div>

      <div class="right">
        <div class="openingsuren">
          <h4>Openingstijden</h4>
          <p>Maandag - vrijdag: 07.00 - 17.00 uur<br>
             Zaterdag: Op afspraak<br>
             Zondag: Gesloten</p>
        </div>
        <div class="map">
          <img src="map-placeholder.png" alt="Kaart locatie" />
        </div>
      </div>
    </div>
  </div>



    <script>
        const loadMoreButton = document.querySelector('.load-more');

        loadMoreButton.addEventListener('click', function() {
            loadMoreButton.classList.add('extra-gap');
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

.content {
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

.content p {
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