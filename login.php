<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "bakery");

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            if ($user['email'] == 'admin@example.com') {
                // admin user, redirect to admin dashboard
                header('Location: admin-dashboard.php');
                exit();
            } else {
                // regular user, redirect to customer dashboard
                header('Location: customer-dashboard.php');
                exit();
            }
        } else {
            // incorrect password, show error message
            echo "Incorrect password.";
        }
    } else {
        // user not found, show error message
        echo "Incorrect email or password.";
    }
}
?>
