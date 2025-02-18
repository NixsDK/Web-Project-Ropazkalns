<?php
// PHP code
$greeting = "<h1 style='color: #FFFFFF;'>Rent for Private events</h1>";
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
            <li><a href="HomePage.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">About</a>
                <ul class="dropdown-menu">
                    <li><a href="OurStory.php">Our Story</a></li>
                    <li><a href="OurTeam.php">Our Team</a></li>
                    <li><a href="OurVision.php">Our Vision</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Rentals</a>
                <ul class="dropdown-menu">
                    <li><a href="RentForDayActivities.php">Rent for day activities</a></li>
                    <li><a href="RentForCorporateEvents.php">Rent for corporate events</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Contact</a>
                <ul class="dropdown-menu">
                    <li><a href="GeneralInquieries.php">General Inquiries</a></li>
                    <li><a href="BookingInformation.php">Booking Information</a></li>

                </ul>
            </li>

        </ul>
    </nav>

</header>


<main>
    <?php echo $greeting; ?>
    <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>For private events to rent out all pl;ace call our CEO or COO to scedule time and for how long you will be there.
    For 24h/600$</p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
        <div class="team-member">
            <img src="images/employee1.jpg" alt="Employee 1">
            <h3>John Doe</h3>
            <p>CEO</p>
            <p>Phone number: +371 26581569</p>
        </div>

        <div class="team-member">
            <img src="images/employee2.jpg" alt="Employee 2">
            <h3>Jane Smith</h3>
            <p>COO</p>
            <p>Phone number: +371 26581569</p>
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

