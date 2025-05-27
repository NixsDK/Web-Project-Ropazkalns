<?php include "../head.php"; ?>

$greeting = "<h1 style='color: #FFFFFF;'>Booking Information</h1>";

?>




<main>
    <?php echo $greeting; ?>
    <p style='color: #FFFFFF; background-color: rgba(0, 0, 0, 0.7); padding: 10px;'>Ropazkalns is located in the beautiful countryside of Latvia, surrounded by lush forests and rolling hills. Our passion for the outdoors and our love for nature inspired us to create a place where people can escape from the hustle and bustle of the city and enjoy the tranquility of the countryside.</p>
    <?php include 'Calendar.php'; ?> <!-- Include Calendar.php here -->
</main>

<?php include "../footer.php"; ?>
</body>
</html>
