<?php
// PHP code
$greeting = "<h1 style='color: #FFFFFF;'>Our Team</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Ropazkalns</title>
    <style>
        /* Your CSS styles here */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('images/Ropazkalns.JPG');
            background-size: cover;
            background-position: center;
        }

        .menu {
            list-style-type: none;
            padding: 0; /* Add this line */
            margin: 0; /* Add this line */
            display: flex;
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
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
            background-color: #fff;
            font-weight: bold;
            color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu li a {
            padding: 8px 16px;
            color: #000000; /* Change this color to the desired color for dropdown menu items */
        }

        .dropdown-menu li:hover > a {
            background-color: #f2f2f2;
        }

        /* Button styling */
        button {
            display: inline-block;
            padding: 12px 20px;
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
            background-color: transparent;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid #ffffff;
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
            color: #ffffff;
            font-size: 18px;
            transition: all 0.3s ease-in;
        }
    </style>
    <style>
        /* Your CSS styles here */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('images/Ropazkalns.JPG');
            background-size: cover;
            background-position: center;
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
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
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            min-width: 200px;
            background-color: #fff;
            font-weight: bold;
            color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu li a {
            padding: 8px 16px;
            color: #000000; /* Change this color to the desired color for dropdown menu items */
        }

        .dropdown-menu li:hover > a {
            background-color: #f2f2f2;
        }

        .team-member {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #FFFFFF;
            width: 250px;
            height: 350px;
            text-align: center;
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
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
        <ul class="menu">
            <a href="HomePage.php"><button class="button-64" role="button"><span class="text">Home</span></button></a>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">About</span></button>
                <ul class="dropdown-menu">
                    <li><a href="OurStory.php">Our Story</a></li>
                    <li><a href="OurVision.php">Our Vision</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">Rentals</span></button>
                <ul class="dropdown-menu">
                    <li><a href="RentForDayActivities.php">Rent for day activities</a></li>
                    <li><a href="RentForPrivateEvents.php">Rent for private events</a></li>
                    <li><a href="RentForCorporateEvents.php">Rent for corporate events</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <button class="button-64" role="button"><span class="text">Contact</span></button>
                <ul class="dropdown-menu">
                    <li><a href="GeneralInquieries.php">General Inquieries</a></li>
                    <li><a href="BookingInformation.php">Booking Information</a></li>

                </ul>
            </li>

        </ul>
    </nav>

</header>


<main>
    <?php echo $greeting; ?>

    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
        <div class="team-member">
            <img src="images/employee1.jpg" alt="Employee 1">
            <h3>John Doe</h3>
            <p>CEO</p>
        </div>

        <div class="team-member">
            <img src="images/employee2.jpg" alt="Employee 2">
            <h3>Jane Smith</h3>
            <p>COO</p>
        </div>

        <div class="team-member">
            <img src="images/employee3.jpg" alt="Employee 3">
            <h3>Bob Johnson</h3>
            <p>Chief Guide</p>
        </div>

        <div class="team-member">
            <img src="images/employee4.jpg" alt="Employee 4">
            <h3>Alice Lee</h3>
            <p>Head of Marketing</p>
        </div>
    </div>
</main>

<!-- JavaScript embedded in the file -->
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
</body>
</html>
