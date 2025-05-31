<?php include "head.php"; ?>

<main>
    <!-- Hero Section -->
    <section class="hero-container">
        <img src="images/Ropazkalns2.JPG" alt="Ropažkalns Countryside" class="hero-image">
        <div class="hero-overlay">
            <h2>Laipni lūdzam Ropažkalnā</h2>
            <p>
                Ropažkalns atrodas skaistā Latvijas lauku apvidū, ko ieskauj zaļojoši meži un viļņoti pakalni. Mūsu
                aizraušanās ar dabu un mīlestība pret lauku vidi iedvesmoja mūs radīt vietu, kur cilvēki var aizbēgt
                no pilsētas steigas un izbaudīt lauku mieru.
            </p>
        </div>
        <div class="hero-buttons">
            <a href="Rentals/RentForDayActivities.php" class="btn btn-rent">Dienas aktiviātes</a>
            <a href="Rentals/RentForPrivateEvents.php" class="btn btn-rent">Privātie pasākumi</a>
            <a href="Rentals/RentalPrices.php" class="btn btn-rent">Īres cenas</a>
        </div>
    </section>

    <!-- New Informative Section -->
    <section class="intro-section">
        <div class="info-box">
            <h2>Laipni lūdzam Ropažkalnā</h2>
            <p>
                Aicinām jūs uz mirkli apstāties no ikdienas steigas un uzlādēt dvēseli, izbaudot mierīgus rītus un burvīgus vakarus, kas piepildīti ar putnu dziesmām, klusumu un dabu.
            </p>
            <p>
                Neatkarīgi no tā, vai plānojat <strong>atpūtu namiņā</strong> vai <strong>kempingu ar savu telti vai kemperi</strong>, Ropažkalns piedāvā plašu un mierīgu vietu atpūtai.
            </p>
        </div>

        <div class="highlight-note">
            <p>
                Mēs laipni uzņemam viesus, kuri novērtē <strong>klusas dabas atpūtas vietas</strong> (mūzika netiek atskaņota, izņemot īpašos gadījumos).
                <strong>Pēc 23:00 – tiek sagaidīts 100% klusums.</strong><br> Mēs nerīkojam skaļas ballītes vai pasākumus.
            </p>
        </div>

        <div class="info-box">
            <p>
                Ropažkalns ir atvērts <strong>no 1. aprīļa līdz 1. oktobrim</strong> katru gadu.
            </p>
            <p>
                Ja apmeklējat mūs ar mājdzīvniekiem (īpaši <strong>suņiem</strong>), lūdzu, iepazīstieties ar mūsu noteikumiem lapā <a href="#">Noteikumi par mājdzīvniekiem</a>.
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
        <section class="kempings-section noma-spacing">
            <div class="kempings-box">
                <h2>
                    <i class="fa-solid fa-hot-tub-person" style="color: #508c39; margin-right: 8px;"></i>
                    Noma
                </h2>
            </div>
        </section>

        <div class="rental-cards">
            <div class="rental-card" onclick="location.href='Rentals/RentSauna.php'">
                <img src="images/pirts.jpeg" alt="Pirts noma">
                <div class="card-label">Pirts noma</div>
            </div>

            <div class="rental-card" onclick="location.href='Rentals/RentHotTub.php'">
                <img src="images/kubls.jpeg" alt="Kubls noma">
                <div class="card-label">Kubla noma</div>
            </div>
        </div>
</main>

<?php include "footer.php"; ?>
