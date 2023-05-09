<?php
require_once 'db.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // check if the passwords match
  if ($password != $confirm_password) {
    header('Location: account.php?error_message=Passwords do not match');
    exit();
  }

  // hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // insert the user into the database
  $stmt = $db->prepare("INSERT INTO customers (name, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $hashed_password);

  if ($stmt->execute()) {
    // check if the user is an employee
    $stmt = $db->prepare("SELECT * FROM employee WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      // user is an employee, redirect to employee dashboard
      header('Location: employee-dashboard.php');
      exit();
    } else {
      // user is a customer, redirect to customer dashboard
      header('Location: customer-dashboard.php');
      exit();
    }
  } else {
    header('Location: account.php?error_message=Error creating account');
    exit();
  }
}
?>
