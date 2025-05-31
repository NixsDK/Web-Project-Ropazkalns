<?php include "../head.php"; ?>
<main class="rental-section">
    <h2>Rent for Day Activities</h2>
    <p>For an unforgettable countryside experience, choose from a variety of activities. Prices are listed per hour and per full day.</p>

    <div class="rental-cards">

        <div class="rental-card-wrapper">
            <div class="rental-card toggle-info">
                <img src="../images/buggy.jpg" alt="Buggy">
                <div class="card-label">Buggy<br>$35/h - $180/d</div>
            </div>
            <div class="card-details">
                <p>The buggy is perfect for thrilling off-road rides through forest trails and open fields. Ideal for 2 passengers.</p>
                <ul>
                    <li>Includes helmet & goggles</li>
                    <li>Drivers must be 18+ with valid license</li>
                    <li>Fuel included for first hour</li>
                </ul>
            </div>
        </div>

        <div class="rental-card-wrapper">
            <div class="rental-card toggle-info">
                <img src="../images/motorbike.jpg" alt="Motorbike">
                <div class="card-label">Motorbike<br>$15/h - $150/d</div>
            </div>
            <div class="card-details">
                <p>Ride freely around the area on our powerful motorbike — suitable for both beginners and experienced riders.</p>
                <ul>
                    <li>Includes helmet</li>
                    <li>Fuel for 2 hours included</li>
                    <li>Must follow marked trails</li>
                </ul>
            </div>
        </div>

        <div class="rental-card-wrapper" >
        <div class="rental-card toggle-info">
                <img src="../images/Waterskies.jpg" alt="Water Skis">
                <div class="card-label">Water Skis<br>$10/h - $100/d</div>
            </div>
            <div class="card-details">
                <p>Enjoy an adrenaline-filled ride across the lake with our water skis. Great for both beginners and experienced users.</p>
                <ul>
                    <li>Life jacket included</li>
                    <li>Instructor available on request</li>
                    <li>Must be comfortable in water</li>
                </ul>
            </div>
        </div>

        <div class="rental-card-wrapper">
            <div class="rental-card toggle-info">
                <img src="../images/kempingaNamins.jpeg" alt="House">
                <div class="card-label">House<br>$250/day</div>
            </div>
            <div class="card-details">
                <p>Perfect for family retreats or peaceful weekends. Our wooden cabin includes full amenities and a view of nature.</p>
                <ul>
                    <li>Sleeps up to 4 people</li>
                    <li>Includes shower, mini kitchen, and terrace</li>
                    <li>Firewood and grill available</li>
                </ul>
            </div>
        </div>

    </div>

</main>
<?php include "../footer.php"; ?>
<script>
    document.querySelectorAll('.toggle-info').forEach(card => {
        card.addEventListener('click', () => {
            const details = card.nextElementSibling;
            details.style.display = details.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
</body>
</html>
