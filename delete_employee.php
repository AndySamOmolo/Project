<?php
// Include the database connection file
include('db.php');

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the employee record from the database
    $sql = "DELETE FROM employees WHERE id = $id";
    if (mysqli_query($db, $sql)) {
        // Redirect back to the previous page with a success message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "&message=Employee deleted successfully");
        exit;
    } else {
        // Redirect back to the previous page with an error message
        header("Location: " . $_SERVER['HTTP_REFERER'] . "&message=Error deleting employee: " . mysqli_error($conn));
        exit;
    }
} else {
    // Redirect back to the previous page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
?>

<?php
// Close the database connection
mysqli_close($db);
?>
