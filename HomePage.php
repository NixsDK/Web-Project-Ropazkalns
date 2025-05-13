<?php include "head.php"; ?>

<main>
    <!-- Hero Section -->
    <section class="hero-container">
        <img src="images/Ropazkalns2.JPG" alt="Ropažkalns Countryside" class="hero-image">
        <div class="hero-overlay">
            <h2>Welcome to Ropažkalns</h2>
            <p>
                Ropazkalns is located in the beautiful countryside of Latvia, surrounded by lush forests and rolling hills.
                Our passion for the outdoors and our love for nature inspired us to create a place where people can escape
                from the hustle and bustle of the city and enjoy the tranquility of the countryside.
            </p>
        </div>
        <div class="hero-buttons">
            <a href="Rentals/RentForDayActivities.php" class="btn btn-rent">Day Activities</a>
            <a href="Rentals/RentForPrivateEvents.php" class="btn btn-rent">Private Events</a>
            <a href="Rentals/RentForCorporateEvents.php" class="btn btn-rent">Corporate Events</a>
        </div>
    </section>

    <!-- New Informative Section -->
    <section class="intro-section">
        <div class="info-box">
            <h2>Welcome to Ropažkalns</h2>
            <p>
                We invite you to take a break from the daily rush and recharge your soul while enjoying peaceful mornings and magical evenings filled with birdsong, silence, and nature.
            </p>
            <p>
                Whether you’re planning a <strong>holiday in a cabin</strong> or <strong>camping with your own tent or camper</strong>, Ropažkalns offers a wide and peaceful space for you to relax.
            </p>
        </div>

        <div class="highlight-note">
            <p>
                We kindly welcome guests who appreciate <strong>quiet nature retreats</strong> (music is not played, except on special occasions).
                <strong>After 23:00 – 100% silence is expected.</strong><br> We do not host loud parties or events.
            </p>
        </div>

        <div class="info-box">
            <p>
                Ropažkalns is open <strong>from April 1st to October 1st</strong> each year.
            </p>
            <p>
                If you're visiting with pets (especially <strong>dogs</strong>), please check our rules on the <a href="#">Pet Guidelines</a> page.
            </p>
        </div>
        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        </head>

        <body>
        <section class="kempings-section">
            <div class="kempings-box">
                <h2>
                    <i class="fa-solid fa-house" style="color: #508c39; margin-right: 8px;"></i>
                    Kempings
                </h2>
            </div>
        </section>
        </body>
        <div class="rental-cards">
            <div class="rental-card" onclick="location.href='Rentals/CampingHauses.php'">
                <img src="images/kempingaNamins.jpeg" alt="Kempinga namiņi">
                <div class="card-label">Kempinga namiņi</div>
            </div>

            <div class="rental-card" onclick="location.href='Rentals/TentPlace.php'">
                <img src="images/teltis.jpeg" alt="Telšu vietas">
                <div class="card-label">Telšu vietas</div>
            </div>

            <div class="rental-card" onclick="location.href='Rentals/ActivitiesInNature.php'">
                <img src="images/pargajiens.jpeg" alt="Aktivitātes dabā">
                <div class="card-label">Aktivitātes dabā</div>
            </div>
        </div>

</main>

<?php include "footer.php"; ?>
