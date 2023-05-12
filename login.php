<?php
session_start();

// connect to the database
$conn = mysqli_connect("localhost", "root", "", "bakery");

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check if the user is an employee
    $sql = "SELECT * FROM employee WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // employee user, redirect to employee dashboard
            $_SESSION['user_id'] = $user['id'];
            header('Location: employee-dashboard.php');
            exit();
        } else {
            // incorrect password, redirect to login page with error message in URL
            $error_message = 'Incorrect password';
            header("Location: account.php?error_message=$error_message");
            exit();
        }
    } else {
        // check if the user is a customer
        $sql = "SELECT * FROM customers WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                if ($user['email'] == 'admin@example.com') {
                    // admin user, redirect to admin dashboard
                    $_SESSION['user_id'] = $user['id'];
                    header('Location: admin-dash.php');
                    exit();
                } else {
                    // regular user, redirect to customer dashboard
                    $_SESSION['user_id'] = $user['id'];
                    header('Location: customer-dashboard.php');
                    exit();
                }
            } else {
                // incorrect password, redirect to login page with error message in URL
                $error_message = 'Incorrect password';
                header("Location: account.php?error_message=$error_message");
                exit();
            }
        } else {
            // user not found, redirect to login page with error message in URL
            $error_message = 'Incorrect email or password';
            header("Location: account.php?error_message=$error_message");
            exit();
        }
    }
}

// close the database connection
mysqli_close($conn);
?>
