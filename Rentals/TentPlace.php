<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telšu vietas</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include '../head.php'; ?>

<section class="rental-section">
    <div class="rental-header">
        <h2>Telšu vietas</h2>
    </div>

    <div class="rental-content">
        <div class="rental-text">
            <h3>Telšu vietu noma:</h3>
            <ul>
                <li>Telšu novietošana ezera krasta zālienā;</li>
                <li>Iespējams elektrības pieslēgums;</li>
                <li>Virtuve, WC un duša sanmezglu ēkā;</li>
                <li>Galdi ar soliem, grils, ugunskura vieta;</li>
                <li>Izbraukšana līdz 16:00.</li>
            </ul>
        </div>
        <div class="rental-image">
            <img src="../images/teltis.jpeg" alt="Telšu vietas">
        </div>
    </div>

    <div class="rental-prices">
        <h3>Cenas</h3>
        <table>
            <tr><th>1 nakts</th><th>1 persona</th><th>12 EUR</th></tr>
            <tr><td></td><td>Bērni no 4g.v. līdz 10g.v.</td><td>6 EUR</td></tr>
            <tr><td></td><td>Bērni līdz 4g.v</td><td><strong>Bez maksas</strong></td></tr>
        </table>
        <p class="price-note">Cenā ietilpst autostāvvieta pie telts, koplietošanas virtuve, tualetes un dušas, galdi ar soliem, grils un ugunskura vieta.</p>
    </div>

    <div class="rental-gallery">
        <h3>Galerija</h3>
        <div class="gallery-row">
            <img src="../images/teltis.jpeg" alt="Teltis 1">
            <img src="../images/teltis1.jpeg" alt="Teltis 2">
            <img src="../images/teltis2.jpeg" alt="Teltis 3">
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
</body>
</html>
