<?php
require_once 'addContact.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $contact = new Contacts();
    $result = $contact->insert($name, $email, $subject, $message);

    if ($result == "Success") {
      ?>
      <script>
        alert("Your message has been sent successfully!");
        document.querySelector('.contact-form').reset();
      </script>
      <?php
    } else {
      $error = $result;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="contact.css">
    <title>Contact</title>
</head>
<body>
<section id="contact" class="contact">
    <div class="container">
        <h2>Contact Me</h2>
        <p>If you'd like to get in touch, please fill out the form below:</p>
        <form method="post" class="contact-form">
            <div>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div>
            <input type="text" id="subject" name="subject" placeholder="Subject" required>
            </div>
            <div>
                <textarea name="message" id="message" rows="10" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 Bikat Tilahun. All rights reserved.</p>
    </div>
</footer>
</body>
</html>