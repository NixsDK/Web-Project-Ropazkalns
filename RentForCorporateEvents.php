<?php include "head.php"; ?>
<style>
    /* Main container */
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    /* Container for rental items */
    .rent-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    /* Individual rental item boxes */
    .rent-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 250px;
        height: 350px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #FFFFFF;
        text-align: center;
        border: 2px solid #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.3);
        padding: 15px;
    }

    /* Images inside rental boxes */
    .rent-item img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #ffffff;
        padding: 5px;
        background-color: rgba(255, 255, 255, 0.2);
    }

    /* Text styling */
    .rent-item h3, .rent-item p {
        margin: 10px 0;
        color: #ffffff;
    }

</style>

<main>
    <b style="color: #5cd682; background-color: rgba(0, 0, 0, 0.7); padding: 20px; font-size: 26px;">Rent for Corporate Events</b>

    <div class="rent-container">
        <div class="rent-item">
            <img src="images/Rent1.jpg" alt="Buggy">
            <h3>Buggy</h3>
            <p>35$/h 180$/d</p>
        </div>

        <div class="rent-item">
            <img src="images/Rent2.jpg" alt="Motorbike">
            <h3>Motorbike</h3>
            <p>15$/h 150$/d</p>
        </div>

        <div class="rent-item">
            <img src="images/Rent3.jpg" alt="Water Skies">
            <h3>Water Skies</h3>
            <p>10$/h 100$/d</p>
        </div>

        <div class="rent-item">
            <img src="images/Rent4.jpg" alt="House">
            <h3>House</h3>
            <p>250$/d</p>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>
</body>
</html>
