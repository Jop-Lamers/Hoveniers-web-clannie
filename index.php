<?php
include 'headfoot.php';
renderHeader("Hendrik Hogendijk Hoveniers", "home");
?>

<main class="content" id="over-ons">
    <h2 class="intro-title">Welkom bij de website van Hendrik Hogendijk, hovenier in de regio Utrecht, Zeist en de Bilt.</h2>

    <div class="main-section">
        <div class="text-block">
            <p>De tuin is een belangrijke plek van de woning, waar je het liefst zoveel mogelijk tijd in doorbrengt. Bij Hendrik Hogendijk Hoveniers vind ik het daarom belangrijk dat iedereen zich thuis voelt in zijn of haar tuin. Ik maak de tuin onderdeel van jouw 'thuis', door hem volledig op jouw wensen af te stemmen.</p>
            <p>Met behulp van mooie, natuurlijke en duurzame producten en materialen creëer ik een tuin, die garant staat voor een jarenlang plezierig buitenleven. Van een knusse veranda en een mooie vijver, tot een gezellig terras en een kleurrijke bloemborder: ik stop al mijn energie erin.</p>
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

<div class="footer-top-text">
                <p>Ik streef ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is. Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende offerte kunt u contact met ons opnemen wanneer het u uitkomt.</p>
                <h3>Wij zijn u graag van dienst!</h3>
            </div>

<section id="contact" class="background">
    <div class="overlay">
        <form id="myForm" action="https://formsubmit.co/240561@student.glu.nl" method="POST">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="index.php?status=success&message=Bedankt voor uw bericht! We nemen zo spoedig mogelijk contact met u op.">
            <input type="hidden" name="_autoresponse" value="Bedankt!">



            <h2 style="color: #fff;">Contact</h2>
            <?php
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
                $message = isset($_GET['message']) ? urldecode($_GET['message']) : '';
                $class = $status == 'success' ? 'success' : 'error';
                echo '<div class="message ' . $class . '">' . htmlspecialchars($message) . '</div>';
            }
            ?>
             
            <div class="form-row">
                <div class="form-group">
                    <label for="naam" style="color: #fff;">Naam *</label>
                    <input type="text" id="naam" name="naam" required>
                </div>
                <div class="form-group">
                    <label for="email" style="color: #fff;">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="telefoon" style="color: #fff;">Telefoon</label>
                    <input type="tel" id="telefoon" name="telefoon">
                </div>
                <div class="form-group">
                    <label for="onderwerp" style="color: #fff;">Onderwerp</label>
                    <input type="text" id="onderwerp" name="onderwerp">
                </div>
            </div>
            <div class="form-group">
                <label for="bericht" style="color: #fff;">Bericht *</label>
                <textarea id="bericht" name="bericht" required placeholder="Vertel ons over uw tuinwensen..."></textarea>
            </div>
            <button type="submit" class="submit-btn">Verstuur</button>
        </form>
    </div>
</section>

<script>
    if (window.location.search) {
        setTimeout(() => window.history.replaceState({}, document.title, window.location.pathname), 5000);
    }
</script>

<?php renderFooter(); ?>