<?php
include 'headfoot.php';
renderHeader("Reviews - Hendrik Hogendijk Hoveniers", "reviews");
?>

<div class="testimonials">
    <h1>Ervaringen van anderen</h1>
    <div id="testimonial-container">
        <div class="testimonial">
            <h2>Hella Hoes</h2>
            <div class="content">
                <div class="avatar"></div>
                <p>"Heel erg bedankt voor de efficiënte service, je was heel snel klaar en ik zal je nummer zeker behouden om je weer te gebruiken."</p>
            </div>
            <div class="stars">★★★★★</div>
        </div>

        <div class="testimonial">
            <h2>Henk Hoes</h2>
            <div class="content">
                <div class="avatar"></div>
                <p>"Ga alsjeblieft door met het bezoeken aan het huis van mijn vader, want je doet geweldig werk!"</p>
            </div>
            <div class="stars">★★★★★</div>
        </div>

        <div class="testimonial">
            <h2>Hans Hogedijk</h2>
            <div class="content">
                <div class="avatar"></div>
                <p>"Zoals u weet ben ik altijd tevreden geweest met de service die u de afgelopen jaren heeft verleend. Vertel me alstublieft wanneer u klaar bent om volgend jaar weer te beginnen met het maaien van mijn gazons, aangezien ik graag uw diensten wil blijven ontvangen."</p>
            </div>
            <div class="stars">★★★★★</div>
        </div>
    </div>
    <div class="load-more">↓</div>
</div>

<div class="background">
    <div class="overlay">
        <form class="contact-form">
            <h2>Contact formulier</h2>
            <div class="form-row">
                <div class="form-group">
                    <label>Voornaam</label>
                    <input type="text" name="voornaam">
                </div>
                <div class="form-group">
                    <label>Postcode</label>
                    <input type="text" name="postcode">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Achternaam</label>
                    <input type="text" name="achternaam">
                </div>
                <div class="form-group">
                    <label>Adres</label>
                    <input type="text" name="adres">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-group">
                    <label>Telefoon nummer</label>
                    <input type="tel" name="telefoon">
                </div>
            </div>
            <div class="form-group full-width">
                <label>Vragen / Opmerking</label>
                <textarea rows="5" name="vragen"></textarea>
            </div>
            <button type="submit">Verzenden</button>
        </form>
    </div>
</div>

<script>
    const loadMoreButton = document.querySelector('.load-more');

    loadMoreButton.addEventListener('click', function() {
        loadMoreButton.classList.add('extra-gap');
    });
</script>

<?php
renderFooter();
?>
