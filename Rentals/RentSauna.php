<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirts noma</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include '../head.php'; ?>

<section class="rental-section">
    <div class="rental-header">
        <h2>Pirts noma</h2>
    </div>

    <div class="rental-content">
        <div class="rental-text">
            <h3>Informācija par pirti:</h3>
            <ul>
                <li>Tradicionāla koka pirts ar skatu uz dabu</li>
                <li>Iespēja izmantot atpūtas telpu un terasi</li>
                <li>Pieejams siltais ūdens un duša</li>
                <li>Ideāli piemērota atpūtai nelielā draugu lokā</li>
            </ul>
            <p><strong>Darba laiks:</strong> pēc iepriekšēja pieraksta</p>
        </div>
        <div class="rental-image">
            <img src="../images/pirts.jpeg" alt="Pirts noma">
        </div>
    </div>

    <div class="rental-prices">
        <h3>Cenas</h3>
        <table>
            <tr>
                <th>Ilgums</th>
                <th>Cena</th>
            </tr>
            <tr>
                <td>2 stundas (līdz 6 cilvēkiem)</td>
                <td>50 EUR</td>
            </tr>
            <tr>
                <td>Katra nākamā stunda</td>
                <td>20 EUR</td>
            </tr>
            <tr>
                <td>Palielināta kompānija (7+ cilvēki)</td>
                <td>+10 EUR kopā</td>
            </tr>
        </table>
        <p class="price-note">Cenā iekļauta pirts, malkas apkure, dušas telpa, ģērbtuve un atpūtas stūrītis.</p>
    </div>

    <div class="rental-gallery">
        <h3>Galerija</h3>
        <div class="gallery-row">
            <img src="../images/pirts.jpeg" alt="Pirts foto 1">
            <!-- Add more if needed -->
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
</body>
</html>
