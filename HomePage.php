<?php include "head.php"; ?>

<main style="
    display: grid;
    grid-template-columns: 0.9fr 1.5fr; /* Makes image side slightly larger */
    align-items: center;
    max-width: 1200px;
    margin: auto;
    column-gap: 10px; /* Reduces spacing */
    padding-top: 20px;
">


    <!-- Left Side - Properly Aligned Image -->
    <div style="
        display: flex;
        justify-content: flex-start; /* Forces it to the left */
        align-items: center;
        border-radius: 10px;
        height: 705px;
        width: 270px;
        overflow: hidden;
        margin-left: -342px; /* Moves entire image div left */
    ">
        <img src="images/Ropazkalns1.JPG" alt="Ropazkalns Countryside" style="
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        ">
    </div>

    <!-- Right Side - Text Box -->
    <div style="
    background-color: rgba(0, 0, 0, 0.7);
    color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin-left: -520px; /* Moves text box closer to the image */
    margin-top: -490px; /* Moves text box upwards */
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
