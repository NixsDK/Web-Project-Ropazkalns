<?php
// head.php (polished)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropažkalns Countryside</title>
    <?php
    // Dynamically set base path depending on current directory
    $dir = basename(dirname($_SERVER['SCRIPT_NAME']));
    $base = ($dir === 'About' || $dir === 'Rentals' || $dir === 'Contact') ? '../' : '';
    ?>
    <link rel="stylesheet" href="<?php echo $base; ?>css/styles.css">
    <style>
        body {
            background: #fdfdfd url('/images/abstract4.jpg') no-repeat center top;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            position: relative;
        }



        section {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        /* Mountain layers */
        section:first-child,
        section:nth-child(2),
        section:last-child {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%; /* Adjust height as needed */
        }

        section:first-child > div:first-child,
        section:first-child > div:nth-child(2),
        section:first-child > div:nth-child(3),
        section:first-child > div:last-child,
        section:nth-child(2) > div:first-child,
        section:nth-child(2) > div:last-child,
        section:last-child > div:first-child,
        section:last-child > div:nth-child(2),
        section:last-child > div:last-child {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        /* Your existing styles */
        * {
            box-sizing: border-box;
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0 auto; /* Centers the menu horizontally */
            display: flex;
            justify-content: center; /* Centers buttons */
            align-items: center; /* Aligns vertically */
            position: relative;
            z-index: 2000;
            top: -10px; /* Moves the menu slightly upwards */
        }

        header {
            height: 88px;
            padding: 20px 0;
            background: rgba(173, 216, 230, 0.4);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            z-index: 1000; /* Lower than dropdown */
            position: relative;
        }


        .menu li {
            position: relative;
        }

        .menu li a {
            display: block;
        }


        .menu li:hover > a {
            background-color: #f2f2f2;
            text-decoration: none;
            font-weight: bold;
        }

        .dropdown {
            position: relative;
            z-index: 2000;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
            background-color: #fff;
            font-weight: bold;
            color: #000;
            box-shadow:none;
            z-index: 3000; /* Ensure it's above other elements */
        }

        .dropdown-menu li a {
            padding: 8px 16px;
            color: #000000; /* Change this color to the desired color for dropdown menu items */
        }

        .dropdown-menu li:hover > a {
            background-color: #f2f2f2;
        }

        /* New button styling */
        button {
            display: inline-block;
            width: 150px;
            height: 50px;
            border-radius: 10px;
            border: 1px solid #03045e;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in;
            z-index: 1;
        }

        button::before,
        button::after {
            content: '';
            position: absolute;
            top: 0;
            width: 0;
            height: 100%;
            transform: skew(15deg);
            transition: all 0.5s;
            overflow: hidden;
            z-index: -1;
        }

        button::before {
            left: -10px;
            background: #447df2;
        }

        button::after {
            right: -10px;
            background: #447df2;
        }

        button:hover::before,
        button:hover::after {
            width: 58%;
        }

        button:hover span {
            color: #ffffff;
            transition: 0.3s;
        }

        button span {
            color: #03045e;
            font-size: 18px;
            transition: all 0.3s ease-in;
        }

        .logo {
            display: inline-block; /* Make the logo and menu items inline */
            vertical-align: middle; /* Align vertically in the middle */
            margin-right: 20px; /* Adjust margin as needed */
        }

        .logo h {
            margin: 0; /* Remove default margins */
            font-size: 32px; /* Adjust font size as needed */
            color: #508c39; /* Text color */
            font-weight: bold;
            position: absolute; /* Allows precise placement */
            top: 35px; /* Adjust to move higher */
            left:50px; /* Adjust to align left */
            z-index: 10; /* Ensures it stays above buttons */

        }
        footer {
            background: rgba(173, 216, 230, 0.4); /* Light blue with transparency */
            backdrop-filter: blur(10px); /* Frosted glass effect */
            -webkit-backdrop-filter: blur(10px); /* Safari support */
            border-top: 1px solid rgba(255, 255, 255, 0.3); /* Optional subtle border */
            color: black;
            text-align: center;
            padding: 8px;
            font-size: 12px;
            position: relative;
            bottom: -120px; /* Keeps footer in the same position */
            margin-top: 330px; /* Maintains spacing from main content */
            border-radius: 10px; /* Optional: Gives smooth rounded edges */
        }

    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('mouseenter', function() {
                    this.querySelector('.dropdown-menu').style.display = 'block';
                });

                dropdown.addEventListener('mouseleave', function() {
                    this.querySelector('.dropdown-menu').style.display = 'none';
                });
            });
        });
    </script>
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <h>Ropažkalns</h>
        </div>
        <ul class="menu">
            <li><a href="<?php echo $base; ?>HomePage.php"><button><span>Home</span></button></a></li>
            <li class="dropdown">
                <button><span>About</span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base; ?>About/OurStory.php">Our Story</a></li>
                    <li><a href="<?php echo $base; ?>About/OurTeam.php">Our Team</a></li>
                    <li><a href="<?php echo $base; ?>About/OurVision.php">Our Vision</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button><span>Rentals</span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base; ?>Rentals/RentForDayActivities.php">Rent for day activities</a></li>
                    <li><a href="<?php echo $base; ?>Rentals/RentForPrivateEvents.php">Rent for private events</a></li>
                    <li><a href="<?php echo $base; ?>Rentals/RentForCorporateEvents.php">Rent for corporate events</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button><span>Contact</span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $base; ?>Contact/GeneralInquieries.php">General Inquiries</a></li>
                    <li><a href="<?php echo $base; ?>Contact/BookingInformation.php">Booking Information</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>