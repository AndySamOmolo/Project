<?php
// Set database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$item_name = mysqli_real_escape_string($conn, $_POST['item-name']);
$item_description = mysqli_real_escape_string($conn, $_POST['item-description']);
$item_size = mysqli_real_escape_string($conn, $_POST['item-size']);
$item_topping = mysqli_real_escape_string($conn, $_POST['item-topping']);
$item_type = mysqli_real_escape_string($conn, $_POST['item-type']);
$item_other_details = mysqli_real_escape_string($conn, $_POST['item-other-details']);

// Initialize the message variable
$message = '';

// Check if image file was uploaded
if (isset($_FILES['item-image']) && $_FILES['item-image']['error'] === UPLOAD_ERR_OK) {
    // Create the uploads directory if it doesn't exist
    if (!file_exists('uploads')) {
        mkdir('uploads');
    }

    // Get image details
    $image_name = $_FILES['item-image']['name'];
    $image_type = $_FILES['item-image']['type'];
    $image_size = $_FILES['item-image']['size'];
    $image_tmp_name = $_FILES['item-image']['tmp_name'];

    // Generate a unique filename for the image
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_filename = uniqid() . '.' . $image_extension;

    // Move the uploaded image to the uploads directory
    $image_path = 'uploads/' . $image_filename;
    if (move_uploaded_file($image_tmp_name, $image_path)) {
        // Insert data into the database
        $sql = "INSERT INTO bakery_items (item_name, item_image, item_description, item_size, item_topping, item_type, item_other_details)
                VALUES ('$item_name', '$image_filename', '$item_description', '$item_size', '$item_topping', '$item_type', '$item_other_details')";
        if (mysqli_query($conn, $sql)) {
            // Set success message
            $message = 'New bakery item added successfully!';
        } else {
            // Set error message
            $message = 'Error creating bakery item: ' . mysqli_error($conn);
        }
    } else {
        // Set error message
        $message = 'Error uploading image: ' . $_FILES['item-image']['error'];
    }
} else {
    // Insert data into the database without an image
    $sql = "INSERT INTO bakery_items (item_name, item_description, item_size, item_topping, item_type, item_other_details)
            VALUES ('$item_name', '', '$item_description', '$item_size', '$item_topping', '$item_type', '$item_other_details')";
    if (mysqli_query($conn, $sql)) {
        // Set success message
        $message = 'New bakery item added successfully!';
    } else {
        // Set error message
        $message = 'Error creating bakery item: ' . mysqli_error($conn);
    }
}

// Redirect back to the same page with message parameter
header("Location: {$_SERVER['HTTP_REFERER']}?message=" . urlencode($message));
exit;

// Close database connection
mysqli_close($conn);
?>
