<?php
// Set the cache-control header to prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");

// Include the database connection file
require_once 'db.php';

// Get the form data
$name = $_POST['employee-name'];
$email = $_POST['employee-email'];
$password = $_POST['employee-password'];
$role = $_POST['employee-role'];

// Insert the data into the employees table
$sql = "INSERT INTO employees (name, email, password, job_title)
        VALUES ('$name', '$email', '$password', '$role')";

if ($db->query($sql)) {
    // Set a success message and redirect to the previous page
    $message = "Employee added successfully";
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?message=" . urlencode($message));
} else {
    // Set an error message and redirect to the previous page
    $message = "Error adding employee: " . $conn->error;
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?message=" . urlencode($message));
}

// Close the database connection
$db->close();
?>
