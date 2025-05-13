<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars(trim($_POST["name"] ?? ''));
    $email   = htmlspecialchars(trim($_POST["email"] ?? ''));
    $message = htmlspecialchars(trim($_POST["message"] ?? ''));

    $to      = "your-email@example.com"; // NOMAINIET AR SAVU EPASTU
    $subject = "New Contact Form Submission";
    $body    = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $success = "Thank you! Your message has been sent.";
    } else {
        $error = "Oops! Something went wrong. Please try again.";
    }
}
?>

<?php include "../head.php"; ?>

<main>
    <section class="intro-section">
        <div class="info-box">
            <h2>Contact Us</h2>
            <p>If you have any questions or want to book your stay, send us a message using the form below.</p>

            <?php if (!empty($success)) echo "<p style='color: green;'>$success</p>"; ?>
            <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>

            <form method="POST" action="" class="contact-form">
                <label for="name">Name:</label><br>
                <input type="text" name="name" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" name="email" required><br><br>

                <label for="message">Message:</label><br>
                <textarea name="message" rows="5" required></textarea><br><br>

                <button type="submit" class="btn btn-rent">Send Message</button>
            </form>
        </div>
    </section>
</main>

<?php include "../footer.php"; ?>
</body>
</html>
