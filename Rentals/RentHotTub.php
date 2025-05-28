<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kubla noma</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include '../head.php'; ?>

<section class="rental-section">
    <div class="rental-header">
        <h2>Kubla noma</h2>
    </div>

    <div class="rental-content">
        <div class="rental-text">
            <h3>Informācija par kublu:</h3>
            <ul>
                <li>Kubls ar malkas apkuri un burbuļiem</li>
                <li>Baudāms skats uz apkārtējo dabu</li>
                <li>Ietilpība līdz 6 personām</li>
                <li>Tīrs, silts ūdens un vakara atmosfēra</li>
            </ul>
            <p><strong>Pieejams:</strong> pēc iepriekšēja pieraksta</p>
        </div>
        <div class="rental-image">
            <img src="../images/kubls.jpeg" alt="Kubla noma">
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
                <td>1 vakars (līdz 6 cilvēkiem)</td>
                <td>60 EUR</td>
            </tr>
            <tr>
                <td>Ar nakšņošanu (piem., pie namiņa)</td>
                <td>80 EUR</td>
            </tr>
            <tr>
                <td>+ katra nākamā stunda</td>
                <td>15 EUR</td>
            </tr>
        </table>
        <p class="price-note">Cenā iekļauta ūdens uzsildīšana, koka kurināšana un kubla tīrīšana pēc lietošanas.</p>
    </div>

    <div class="rental-gallery">
        <h3>Galerija</h3>
        <div class="gallery-row">
            <img src="../images/kubls.jpeg" alt="Kubla foto 1">
            <!-- Add more photos if needed -->
        </div>
    </div>
</section>

<?php include '../footer.php'; ?>
</body>
</html>

