<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "bakery");

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// process the form data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO customers (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    // insert the data into the database
    $sql = "INSERT INTO customers (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $sql);

    // check if the data was inserted successfully
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// close the database connection
mysqli_close($conn);
?>
