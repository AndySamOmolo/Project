<?php
require_once 'header.php';
session_start();

// check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: customer-dashboard.php');
    exit();
}

// check if there is an error message in the URL
if (isset($_GET['error_message'])) {
    $error_message = $_GET['error_message'];
} else {
    $error_message = '';
}
?>

<!-- your HTML code goes here -->
<main class="account">

  <!-- display the error message if there is one -->
  <?php if (!empty($error_message)): ?>
    <p class="error" id="error-message"><?php echo $error_message; ?></p>
  <?php endif; ?>

  <div class="tabs">
    <button class="tablinks" onclick="openTab(event, 'Login')" id="defaultOpen">Login</button>
    <button class="tablinks2" onclick="openTab(event, 'Signup')">Signup</button>
  </div>

  <div id="Login" class="tabcontent">
    <h2>Login</h2>
    <form method="post" action="login.php">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" value="Submit" name="submit" class="btn2">
    </form>
  </div>

  <div id="Signup" class="tabcontent">
    <h2>Signup</h2>
    <form method="post" action="signup.php">
      <label for="fullname">Full Name:</label>
      <input type="text" id="name" name="name" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required>
      <br>
      <input type="submit" value="Submit" name="submit" class="btn2">
    </form>
  </div>

</main>

<?php require_once 'footer.php'; ?>

<script>
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    tablinks = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  document.getElementById("defaultOpen").click();

  // remove the error message element after 5 seconds
  setTimeout(function() {
    var errorMessage = document.getElementById('error-message');
    if (errorMessage) {
      errorMessage.remove();
    }
  }, 5000);
</script>
