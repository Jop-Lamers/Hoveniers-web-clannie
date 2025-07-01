<?php
function renderHeader($pageTitle = "Hendrik Hogendijk Hoveniers", $activePage = "home") {
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <img src="hovenier-headerachtg.jpg" alt="Tuin achtergrond" class="header-image">
        <div class="logo-container">
            <img src="logo2.png" alt="Hendrik Hogendijk logo" class="logo">
            <h1 class="slogan">Uw droomtuin, onze passie!</h1>
        </div>
    </header>

    <nav class="navbar">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo ($activePage == 'home') ? 'active' : ''; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a href="index.php#diensten" class="nav-link <?php echo ($activePage == 'diensten') ? 'active' : ''; ?>">Diensten</a>
            </li>
            <li class="nav-item">
                <a href="index.php#over-ons" class="nav-link <?php echo ($activePage == 'over-ons') ? 'active' : ''; ?>">Over Ons</a>
            </li>
            <li class="nav-item">
                <a href="slideshow.php" class="nav-link <?php echo ($activePage == 'projecten') ? 'active' : ''; ?>">Projecten</a>
            </li>
            <li class="nav-item">
                <a href="reviews.php" class="nav-link <?php echo ($activePage == 'reviews') ? 'active' : ''; ?>">Reviews</a>
            </li>
            <li class="nav-item">
                <a href="index.php#contact" class="nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
            </li>
        </ul>
    </nav>
<?php
}

function renderFooter() {
?>
    <div class="footer-container">
        <div class="footer-top-text">
            <p>
                Ik streef ernaar om constant in contact te staan met onze klanten totdat de klus geklaard is.
                Als u vragen of speciale verzoeken heeft, stuur ons dan een bericht. Voor een vrijblijvende
                offerte kunt u contact met ons opnemen wanneer het u uitkomt.
            </p>
            <h3>Wij zijn u graag van dienst!</h3>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-content">
            <div class="footer-left">
                <p class="footer-phone"><strong>+31 6 21436587</strong></p>
                <div class="footer-contact-info">
                    <h4>Contact gegevens<br>Omgeving-Adres:</h4>
                    <p>Telefonisch beschikbaar van<br>7:00 - 19:00</p>
                    <p>Hendrik Hogendijk Hovenier<br>Utrecht, Zeist en De Bilt</p>
                    <p>Hoefstraat 42, 7143HH Huis ter Heide</p>
                    <p><a href="mailto:hendrikhogendijkhovenier@gmail.com">hendrikhogendijkhovenier@gmail.com</a></p>
                </div>
            </div>

            <div class="footer-right">
                <div class="footer-openingsuren">
                    <h4>Openingstijden</h4>
                    <p>Maandag - vrijdag: 07.00 - 17.00 uur<br>
                       Zaterdag: Op afspraak<br>
                       Zondag: Gesloten</p>
                </div>
                <div class="footer-map">
                    <img src="map-placeholder.png" alt="Kaart locatie" />
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
} // End of renderFooter function
?>
