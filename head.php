<?php
// head.php (restored structure + Bootstrap + blur fixes)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php
    $dir = basename(dirname($_SERVER['SCRIPT_NAME']));
    $base = ($dir === 'About' || $dir === 'Rentals' || $dir === 'Contact') ? '../' : '';
    ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="<?php echo $base; ?>css/styles.css" />

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #EDE8D0;
        }

        .navbar {
            background-color: rgba(255, 255, 255) !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        .navbar-brand img {
            height: 50px;
        }

        .nav-link {
            font-weight: bold;
        }

        .dropdown-menu {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            z-index: 9999 !important;
            position: absolute !important;
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        /* general dropdown alignment (others like About, Rentals) */
        .navbar-nav .dropdown-menu {
            left: 0 !important;
            right: auto !important;
            transform: none !important;
        }

        /* OVERRIDE for Contact dropdown */
        #contactDropdown + .dropdown-menu {
            left: auto !important;
            right: 0 !important;
            transform: none !important;
        }
        .dropdown-item {
            color: #333;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }

        footer {
            background: rgb(253, 246, 236);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            color: #2e2e2e;
            text-align: center;
            padding: 8px;
            font-size: 14px;
            position: relative;
            bottom: -380px;
            margin-top: 0;
        }
    </style>
</head>
<body>

<!-- Clean Bootstrap Navbar with blur -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container-fluid">
        <a href="<?php echo $base; ?>HomePage.php">
            <img src="<?php echo $base; ?>images/RopazkalnsLogo2resize.png" alt="Ropažkalns Logo" width="120" height="auto" style="margin-right: 10px;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>HomePage.php">Sākumlapa</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Par
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <li><a class="dropdown-item" href="<?php echo $base; ?>About/OurStory.php">Mūsu Stāsts</a></li>
                        <li><a class="dropdown-item" href="<?php echo $base; ?>About/OurVision.php">Mūsu vīzija</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="rentalsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Īre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="rentalsDropdown">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Activities</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/RentForDayActivities.php">Dienas aktivitātes</a></li>
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/CampingHauses.php">Kempinga namiņš</a></li>
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/TentPlace.php">Telšu vieta</a></li>
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/ActivitiesInNature.php">Dabas aktivitātes</a></li>
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/RentSauna.php">Pirts</a></li>
                                            <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/RentHotTub.php">Kubls</a></li>
                                        </ul>
                                    </li>
                                                    </li>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');
                                dropdownSubmenus.forEach(submenu => {
                                    submenu.addEventListener('click', function (e) {
                                        e.stopPropagation();
                                        const dropdownMenu = this.querySelector('.dropdown-menu');
                                        dropdownMenu.classList.toggle('show');
                                    });
                                });
                            });
                        </script>
                        <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/RentForPrivateEvents.php">Privātie pasākumi</a></li>
                        <li><a class="dropdown-item" href="<?php echo $base; ?>Rentals/RentalPrices.php">Īres cenas</a></li>
                        
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kontaktinformācija
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                        <li><a class="dropdown-item" href="<?php echo $base; ?>Contact/GeneralInquieries.php">Vispārīgi jautājumi</a></li>
                        <li><a class="dropdown-item" href="<?php echo $base; ?>Contact/BookingInformation.php">Rezervācijas informācija</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
