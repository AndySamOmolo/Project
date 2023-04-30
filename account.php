<?php
 require_once 'header.php';
?>

  <style media="screen">
  /* Style the tab */
.tabs {
overflow: hidden;
border-bottom: 1px solid #ccc;
margin-bottom: 20px;
}

/* Style the buttons that are used to open the tab content */
.tablinks {
background-color: #f2f2f2;
border: none;
outline: none;
cursor: pointer;
padding: 10px 20px;
font-size: 18px;
width: 50%;
float: left;
}

/* Change background color of buttons on hover */
.tablinks:hover {
background-color: #ddd;
}

/* Create an active/current tablink class */
.tablinks.active {
background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
display: none;
padding: 20px;
clear: both;
}

/* Style the forms */
form {
max-width: 500px;
margin: 0 auto;
display: flex;
flex-direction: column;
}

label {
font-weight: bold;
margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
padding: 10px;
margin-bottom: 20px;
border: none;
border-radius: 4px;
}

input[type="submit"] {
background-color: #4CAF50;
color: white;
border: none;
padding: 10px 20px;
border-radius: 4px;
cursor: pointer;
margin-top: 10px;
}

input[type="submit"]:hover {
background-color: #45a049;
}

  </style>


  <div class="tabs">
    <button class="tablinks" onclick="openTab(event, 'Login')" id="defaultOpen">Login</button>
    <button class="tablinks" onclick="openTab(event, 'Signup')">Signup</button>
  </div>

  <div id="Login" class="tabcontent">
    <h2>Login</h2>
    <form>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <div id="Signup" class="tabcontent">
    <h2>Signup</h2>
    <form>
      <label for="fullname">Full Name:</label>
      <input type="text" id="fullname" name="fullname" required>
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
      <input type="submit" value="Submit">
    </form>
  </div>

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
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
  </script>



<?php
 require_once 'footer.php';
?>
