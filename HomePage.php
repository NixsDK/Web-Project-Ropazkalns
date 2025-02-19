<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Inquiries - Ropazkalns</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fdfdfd url('images/Forest.JPG') no-repeat center top;
            background-size: cover;
            position: relative;
        }

        main {
            width: 100%;
            height: 20vw;
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
            margin: 0;
            display: flex;
            margin-left: auto;
        }

        header {
            background: white;
            color: black;
            padding: 10px 20px;
            text-align: center;
            display: flex;
            align-items: center; /* Aligns logo and menu */
            justify-content: flex-start; /* Ensures logo is on the left */



        }
        .menu li {
            position: relative;
        }

        .menu li a {
            display: block;
            padding: 12px 20px;
            text-decoration: none;
            font-weight: bold;
            color: #ffffff; /* Change this color to the desired color for main menu items */
        }


        .menu li:hover > a {
            background-color: #f2f2f2;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;,
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
            background-color: #fff;
            font-weight: bold;
            color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
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
            background: #240046;
        }

        button::after {
            right: -10px;
            background: #5a189a;
        }

        button:hover::before,
        button:hover::after {
            width: 58%;
        }

        button:hover span {
            color: #e0aaff;
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

        .logo h1 {
            margin: 0; /* Remove default margins */
            font-size: 24px; /* Adjust font size as needed */
            color: #70c654; /* Text color */
            font-weight: bold;
            position: absolute; /* Allows precise placement */
            top: 10px; /* Adjust to move higher */
            left: 20px; /* Adjust to align left */
            z-index: 10; /* Ensures it stays above buttons */

        }
        footer {
            background: rgb(255, 255, 255);
            color: black;
            text-align: center;
            padding: 8px;
            font-size: 12px;
            position: relative;
            bottom: -120px; /* Adjust this value to move it lower */
            margin-top: 330px; /* Increases spacing from main content */
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
            <h1>Ropažkalns</h1>
        </div>
        <ul class="menu">
            <a href="HomePage.php"><button class="button-64" role="button"><span class="text">Home</span></button></a>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">About</span></button>
                <ul class="dropdown-menu">
                    <li><a href="OurStory.php">Our Story</a></li> <!-- Updated Our Story link -->
                    <li><a href="OurTeam.php">Our Team</a></li> <!-- Updated Our Team link -->
                    <li><a href="OurVision.php">Our Vision</a></li> <!-- Updated Our Vision link -->
                </ul>
            </li>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">Rentals</span></button>
                <ul class="dropdown-menu">
                    <li><a href="RentForDayActivities.php">Rent for day activities</a></li> <!-- Updated Rent for day activities link -->
                    <li><a href="RentForPrivateEvents.php">Rent for private events</a></li> <!-- Updated Rent for private events link -->
                    <li><a href="RentForCorporateEvents.php">Rent for corporate events</a></li> <!-- Updated Rent for corporate events link -->
                </ul>
            </li>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">Contact</span></button>
                <ul class="dropdown-menu">
                    <li><a href="GeneralInquieries.php">General Inquiries</a></li> <!-- Updated General Inquiries link -->
                    <li><a href="BookingInformation.php">Booking Information</a></li> <!-- Updated Booking Information link -->
                </ul>
            </li>
        </ul>
    </nav>
</header>


<main>
    <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>Ropazkalns is located in the beautiful countryside of Latvia, surrounded by lush forests and rolling hills.
        Our passion for the outdoors and our love for nature inspired us to create a place where people can escape from the hustle and bustle of the city and enjoy the tranquility of the countryside.</p>

</main>
<footer style="background: white; color: black; text-align: center; padding: 8px; font-size: 12px; position: relative; bottom: -10px;">
    <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">
        <div>
            <h4 style="font-size: 14px;">This Site</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li><a href="#" style="color: black; text-decoration: none;">Tracking</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Shipping</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Support</a></li>
            </ul>
        </div>
        <div>
            <h4 style="font-size: 14px;">Our Services</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li><a href="#" style="color: black; text-decoration: none;">Private Events</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Corporate Events</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Day Activities</a></li>
            </ul>
        </div>
        <div>
            <h4 style="font-size: 14px;">Connect with Us</h4>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li><a href="#" style="color: black; text-decoration: none;">Facebook</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Instagram</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">LinkedIn</a></li>
            </ul>
        </div>
    </div>
    <div style="margin-top: 5px; font-size: 10px;">
        &copy; 2025 YourWebsite. All rights reserved.
    </div>
</footer>
</body>
</html>
