<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story - Ropazkalns</title>
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
                    <li><a href="OurTeam.php">Our Team</a></li>
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
                    <li><a href="GeneralInquieries.php">General Inquiries</a></li>
                    <li><a href="BookingInformation.php">Booking Information</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<main>

    <main>
        <h1 style='color: #FFFFFF;'>Our Story</h1>
        <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>Ropazkalns is located in the beautiful countryside of Latvia, surrounded by lush forests and rolling hills.
            Our passion for the outdoors and our love for nature inspired us to create a place where people can escape from the hustle and bustle of the city and enjoy the tranquility of the countryside.</p>

        <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>Our mission is to provide a unique and unforgettable experience for our guests, whether they are looking for a day of outdoor activities, a private event, or a corporate retreat. We believe that everyone should have the opportunity to connect with nature and experience the beauty of the Latvian countryside.</p>
        <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>At Ropazkalns, we offer a wide range of activities, including hiking, mountain biking, horseback riding, and much more. Our experienced guides are passionate about the outdoors and are committed to providing a safe and enjoyable experience for all of our guests.</p>
        <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>In addition to our outdoor activities, we also offer a variety of accommodation options, including cozy cabins, luxury tents, and a beautiful guesthouse. All of our accommodations are designed to blend seamlessly with the natural surroundings, providing a unique and immersive experience for our guests.</p>
        <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>Whether you are looking for a quiet escape or an action-packed adventure, Ropazkalns has something for everyone. Come visit us and experience the beauty of the Latvian countryside for yourself!</p>
    </main>

</body>
</html>
