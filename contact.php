<?php
 require_once 'header.php';
?>

<div class="contact-form">
  <h2>Contact Us</h2>
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button class="btn2" type="submit">Send Message</button>
  </form>
</div>


<?php
 require_once 'footer.php';
?>
