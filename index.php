<?php
include 'headfoot.php';
renderHeader("Hendrik Hogendijk Hoveniers", "home");
?>

<style>
.services-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 60px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.services-section h2 {
    margin-bottom: 40px;
    font-size: 2.5em;
    color: #333;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    width: 100%;
    max-width: 1000px;
}

.service-item {
    background: white;
    padding: 30px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.service-item h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #333;
}

.service-item p {
    color: #666;
    line-height: 1.6;
}

@media screen and (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .services-section h2 {
        font-size: 2em;
    }
}
</style>

<main class="content" id="over-ons">
    <h2 class="intro-title">Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt.</h2>

    <div class="main-section">
        <div class="text-block">
            <p>
                De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt.
                Bij Hendrik Hogendijk Hoveniers vind ik het daarom belangrijk dat iedereen zich thuis voelt in zijn of haar tuin.
                Ik maak de tuin onderdeel van jouw 'thuis', door hem volledig op jouw wensen af te stemmen.
            </p>
            <p>
                Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant staat
                voor een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een gezellig terras
                en een kleurrijke bloemborder: ik stop al mijn energie erin.
            </p>
        </div>
        <div class="image-block">
            <img src="image.webphendrik.webp" alt="Hendrik Hogendijk portret" class="portrait">
        </div>
    </div>

    <section id="diensten" class="services-section">
        <h2>Onze Diensten</h2>
        <div class="services-grid">
            <div class="service-item">
                <h3>Tuinaanleg</h3>
                <p>Complete tuinaanleg van ontwerp tot realisatie. Van moderne tot klassieke tuinen.</p>
            </div>
            <div class="service-item">
                <h3>Tuinonderhoud</h3>
                <p>Regelmatig onderhoud om uw tuin het hele jaar door in perfecte staat te houden.</p>
            </div>
            <div class="service-item">
                <h3>Beplanting</h3>
                <p>Vakkundige keuze en plaatsing van planten, bomen en struiken die bij uw tuin passen.</p>
            </div>
            <div class="service-item">
                <h3>Verharding</h3>
                <p>Aanleg van terrassen, paden en opritten met natuurlijke materialen.</p>
            </div>
        </div>
    </section>
</main>

<section class="slideshow-section" id="slideshow-section">
    <?php include 'slideshow.php'; ?>
</section>

<section id="reviews" class="reviews-section">
    <?php include 'reviews.php'; ?>
</section>

<section id="contact" class="background">
    <div class="overlay">
        <form class="contact-form">
            <h2>Contact</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="naam">Naam *</label>
                    <input type="text" id="naam" name="naam" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="telefoon">Telefoon</label>
                    <input type="tel" id="telefoon" name="telefoon">
                </div>
                <div class="form-group">
                    <label for="onderwerp">Onderwerp</label>
                    <input type="text" id="onderwerp" name="onderwerp">
                </div>
            </div>
            <div class="form-group">
                <label for="bericht">Bericht *</label>
                <textarea id="bericht" name="bericht" required placeholder="Vertel ons over uw tuinwensen..."></textarea>
            </div>
            <button type="submit" class="submit-btn">Verstuur</button>
        </form>
    </div>
</section>

<?php
renderFooter();
?>