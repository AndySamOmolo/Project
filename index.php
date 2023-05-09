 <?php
  require_once 'header.php';
 ?>

 <?php
   // Check if message parameter is present
   if (isset($_GET['message'])) {
       // Decode and store the message in a variable
       $message = urldecode($_GET['message']);
   }

   // Display the message if it's not empty
   if (!empty($message)) {
       echo '<div style="background-color: #DFF2BF; border: 1px solid #4F8A10; color: #4F8A10; padding: 10px;">' . $message . '</div>';

       // Add JavaScript to hide the message after 5 seconds
       echo '<script>
                 setTimeout(function() {
                     document.querySelector("div[style=\"background-color: #DFF2BF; border: 1px solid #4F8A10; color: #4F8A10; padding: 10px;\"]").style.display = "none";
                 }, 5000);
             </script>';
   }
   ?>

 <div class="banner">
   <p>WELCOME </p>
   <p>TO AMASDEN</p>
   <p>BAKERY</p>
  </div>


 <div class="container">
  <h1 class="tagline">Bestsellers in Our Bakery</h1>

  <div class="items-container">
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 1">
      </div>
      <div class="description">
        <p>Description for Image 1</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button">Select Options</button>
      </div>
    </div>
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 2">
      </div>
      <div class="description">
        <p>Description for Image 2</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button">Select Options</button>
      </div>
    </div>
    <div class="item">
      <div class="image-container">
        <img src="https://picsum.photos/500/500" alt="Image 3">
      </div>
      <div class="description">
        <p>Description for Image 3</p>
      </div>
      <div class="btnopt">
        <button class="btn1" type="button" name="button">Select Options</button>
      </div>
    </div>
  </div>

</div>



<div class="container1">
  <h1 class="tagline">Hear what our satisfied customers have to say!</h1>
  <div class="items-container1">
    <div class="item1">
      <div class="image-container1">
        <img src="https://picsum.photos/500/500" alt="Image 1">
      </div>
      <div class="description1">
        <p>Description for Image 1</p>
      </div>
    </div>
    <div class="item1">
      <div class="image-container1">
        <img src="https://picsum.photos/500/500" alt="Image 2">
      </div>
      <div class="description1">
        <p>Description for Image 2</p>
      </div>
    </div>
    <div class="item1">
      <div class="image-container1">
        <img src="https://picsum.photos/500/500" alt="Image 3">
      </div>
      <div class="description1">
        <p>Description for Image 3</p>
      </div>
    </div>
  </div>
</div>


<div class="newsletter-container">
  <form action="#" method="post" class="newsletter-form">
    <div class="subscribe-title">
      <h4>Subscribe to Our Newsletter</h4>
    </div>
    <div class="form-group">
      <label for="email" class="sr-only">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      <button type="submit" class="btn2">Subscribe</button>
    </div>
  </form>
</div>


<script type="text/javascript">

</script>


<?php
  require_once 'footer.php';
 ?>
