<?php
// Include the database connection file
include('db.php');

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query the database to retrieve the employee record with the specified ID
    $sql = "SELECT name, email, job_title FROM employees WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Check if the employee record exists in the database
    if (!$row) {
        // Redirect to the employee list page with an error message
        header("Location: employee_list.php?message=Employee not found");
        exit;
    }
} else {
    // Redirect to the employee list page
    header("Location: employee_list.php");
    exit;
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the updated employee data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job_title = $_POST['job_title'];

    // Update the employee record in the database
    $sql = "UPDATE employees SET name='$name', email='$email', job_title='$job_title' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        // Redirect to the employee list page with a success message
        header("Location: employee_list.php?message=Employee updated successfully");
        exit;
    } else {
        // Redirect to the employee list page with an error message
        header("Location: employee_list.php?message=Error updating employee: " . mysqli_error($conn));
        exit;
    }
}
?>

<h3>Edit Employee</h3>
<form method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

    <label for="job_title">Job Title:</label>
    <input type="text" name="job_title" value="<?php echo $row['job_title']; ?>" required>

    <button type="submit" name="submit" class="btn1">Update</button>
</form>

<?php
// Close the database connection
mysqli_close($conn);
?>
