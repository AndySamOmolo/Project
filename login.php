<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
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
        // user not found, show error message
        echo "Incorrect email or password.";
    }
}
?>
