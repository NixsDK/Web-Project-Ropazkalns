<?php include "head.php"; ?>


<main style="
    display: grid;
    grid-template-columns: 35% 60%;
    align-items: start; /* Ensures image starts from top */
    max-width: 1200px;
    margin: auto;
    column-gap: 5%;
    position: relative; /* Allows absolute positioning inside */
">

    <!-- Left Side - Adjusted Image Container (Now Aligned to Top) -->
    <div style="
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: start;
        border-radius: 10px;
        height: 685px;
        width: 270px;
        overflow: hidden;
        position: absolute;
        left: -412px;
        top: 0; /* Moves it to the top */
    ">
        <img src="images/Ropazkalns1.JPG" alt="Ropazkalns Countryside" style="
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        ">
    </div>

    <!-- Right Side - Text -->
    <div style="
        background-color: rgba(0, 0, 0, 0.7);
        color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        margin-top: 20px; /* Ensures spacing from header */
    ">
        <h2>Welcome to Ropažkalns</h2>
        <p>
            Ropazkalns is located in the beautiful countryside of Latvia, surrounded by lush forests and rolling hills.
            Our passion for the outdoors and our love for nature inspired us to create a place where people can escape
            from the hustle and bustle of the city and enjoy the tranquility of the countryside.
        </p>
    </div>

</main>




<?php include "footer.php"; ?>

</body>
</html>
