<?php
function renderHeader($pageTitle = "Hendrik Hogendijk Hoveniers", $activePage = "home")
{
?>
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Fixed navbar styling */
            .navbar {
                position: fixed !important;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                z-index: 9999;
                background: white;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            /* Adjust body to compensate for fixed navbar */
            body {
                padding-top: 70px;
            }

            /* Smooth scrolling with navbar offset */
            html {
                scroll-padding-top: 80px;
                scroll-behavior: smooth;
            }

            /* Hamburger menu */
            .hamburger {
                display: none;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                width: 100%;
                height: 60px;
                background: white;
            }

            .hamburger span {
                width: 30px;
                height: 3px;
                background-color: #333;
                margin: 3px 0;
                transition: 0.3s;
            }

            /* Mobile responsive */
            @media screen and (max-width: 768px) {
                .hamburger {
                    display: flex;
                }

                .nav-menu {
                    display: none !important;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 100%;
                    background: linear-gradient(135deg, rgb(73, 142, 67), rgb(150, 255, 108));
                    flex-direction: column;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease, visibility 0.3s ease;
                    border-radius: 0 0 10px 10px;
                }

                .nav-menu.show {
                    display: flex !important;
                    opacity: 1;
                    visibility: visible;
                }

                .nav-item {
                    width: 100%;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                }

                .nav-item:last-child {
                    border-bottom: none;
                }

                .nav-link {
                    display: block;
                    padding: 18px 20px;
                    text-align: center;
                    text-decoration: none;
                    color: white;
                    font-weight: 500;
                    transition: all 0.3s ease;
                }

                .nav-link:hover {
                    background-color: rgba(255, 255, 255, 0.1);
                    color: #fff;
                    transform: translateX(5px);
                }

                .nav-link.active {
                    background-color: rgba(255, 255, 255, 0.2);
                    color: #fff;
                    font-weight: bold;
                }
            }

            /* Hide normal nav on desktop */
            @media screen and (min-width: 769px) {
                .hamburger {
                    display: none;
                }

                .nav-menu {
                    display: flex !important;
                    opacity: 1;
                    visibility: visible;
                }
            }
        </style>
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
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="nav-menu" id="navMenu">

                
                <li class="nav-item">
                    <a href="index.php#over-ons" class="nav-link <?php echo ($activePage == 'over-ons') ? 'active' : ''; ?>">Over Ons</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#diensten" class="nav-link <?php echo ($activePage == 'diensten') ? 'active' : ''; ?>">Diensten</a>
                </li>
                <li class="nav-item">
                    <a href="#slideshow-section" class="nav-link <?php echo ($activePage == 'projecten') ? 'active' : ''; ?>">Projecten</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#reviews" class="nav-link <?php echo ($activePage == 'reviews') ? 'active' : ''; ?>">Reviews</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact" class="nav-link <?php echo ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a>
                </li>
            </ul>
        </nav>

        <script>
            function toggleMenu() {
                const navMenu = document.getElementById('navMenu');
                navMenu.classList.toggle('show');
            }

            // Smooth scrolling for navigation links
            document.addEventListener('DOMContentLoaded', function() {
                const navLinks = document.querySelectorAll('.nav-link');

                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        // Close mobile menu when link is clicked
                        if (window.innerWidth <= 768) {
                            document.getElementById('navMenu').classList.remove('show');
                        }

                        const href = this.getAttribute('href');

                        if (href.startsWith('#')) {
                            e.preventDefault();
                            const targetId = href.substring(1);
                            const targetElement = document.getElementById(targetId);

                            if (targetElement) {
                                targetElement.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        } else if (href.includes('index.php#')) {
                            const currentPage = window.location.pathname;
                            if (currentPage.includes('index.php') || currentPage.endsWith('/')) {
                                e.preventDefault();
                                const targetId = href.split('#')[1];
                                const targetElement = document.getElementById(targetId);

                                if (targetElement) {
                                    targetElement.scrollIntoView({
                                        behavior: 'smooth',
                                        block: 'start'
                                    });
                                }
                            }
                        }
                    });
                });
            });
        </script>
    <?php
}

function renderFooter()
{
    ?>
        <div class="footer-container">


            <div class="footer-divider"></div>

            <div class="footer-content">
                <div class="footer-left" style="display: flex; flex-direction: column; gap: 18px;">
                    <p class="footer-phone" style="font-size: 1.5em; margin-bottom: 10px;">
                        <strong>
                            <a href="tel:+31621436587" style="font-size: 1.2em;">+31 6 21436587</a>
                        </strong>
                    </p>
                    <div class="footer-contact-info" style="display: flex; flex-direction: column; gap: 10px;">
                        <h4 style="margin-bottom: 6px;">Contact gegevens<br>Omgeving-Adres:</h4>
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
                        <img src="images/maps map.png" alt="Kaart locatie" />
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p style="height: 20px;">&copy; <?php echo date("Y"); ?> Hendrik Hogendijk Hoveniers. Alle rechten voorbehouden.</p>
        </footer>
    </body>

    </html>
<?php
}
?>