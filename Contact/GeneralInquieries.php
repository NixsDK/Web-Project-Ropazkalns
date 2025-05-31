<?php
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmass.co';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'gmass';
    $mail->Password   = '7896fc55-3afb-4c58-ba14-bf43053f3149';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('anrik.fedotovs2003@gmail.com', 'Contact Form');
    $mail->addAddress('niksdanielskalnins@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = 'Name: ' . $_POST['name'] . '<br>Email: ' . $_POST['email'] . '<br>Message: ' . $_POST['message'];

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
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
