<?php
 require_once 'header.php';
?>

  <style media="screen">
  .contact-form {
max-width: 600px;
margin: 0 auto;
text-align: center;
}

.contact-form h2 {
font-size: 2rem;
margin-bottom: 1rem;
}

.contact-form form {
display: flex;
flex-direction: column;
align-items: center;
}

.contact-form label {
display: block;
font-size: 1.2rem;
margin-bottom: 0.5rem;
}

.contact-form input,
.contact-form textarea {
width: 100%;
padding: 0.5rem;
margin-bottom: 1rem;
border-radius: 0.5rem;
border: 1px solid #ccc;
}

.contact-form button[type="submit"] {
background-color: #007bff;
color: #fff;
border: none;
border-radius: 0.5rem;
padding: 0.5rem 1rem;
font-size: 1.2rem;
cursor: pointer;
}

.contact-form button[type="submit"]:hover {
background-color: #0062cc;
}

  </style>

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

    <button type="submit">Send Message</button>
  </form>
</div>


<?php
 require_once 'footer.php';
?>
