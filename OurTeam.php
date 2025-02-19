<?php include "head.php"; ?>
<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    /* Container for team members */
    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        max-width: 1200px;
        margin: auto;
    }

    /* Individual team member boxes */
    .team-member {
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

    /* Images inside team member boxes */
    .team-member img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #ffffff;
        padding: 5px;
        background-color: rgba(255, 255, 255, 0.2);
    }

    /* Ensures text is readable */
    .team-member h3, .team-member p {
        margin: 10px 0;
        color: #ffffff;
    }
</style>
<main>

    <b style="color: #5cd682; background-color: rgba(0, 0, 0, 0.7); padding: 20px; font-size: 26px;">Our Team</b>


    <div style="display: flex; flex-wrap: wrap; justify-content: center;">
        <div class="team-member">
            <img src="images/employee1.jpg" alt="Employee 1">
            <h3>John Doe</h3>
            <p>CEO</p>
        </div>

        <div class="team-member">
            <img src="images/employee2.jpg" alt="Employee 2">
            <h3>Jane Smith</h3>
            <p>COO</p>
        </div>

        <div class="team-member">
            <img src="images/employee3.jpg" alt="Employee 3">
            <h3>Bob Johnson</h3>
            <p>Chief Guide</p>
        </div>

        <div class="team-member">
            <img src="images/employee4.jpg" alt="Employee 4">
            <h3>Alice Lee</h3>
            <p>Head of Marketing</p>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>
