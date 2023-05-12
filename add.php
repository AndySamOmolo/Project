<?php
// Include the database connection file
require_once 'db.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  // Get the image data
  $image = $_FILES['image'];
  $image_name = $image['name'];
  $image_tmp_name = $image['tmp_name'];
  $image_size = $image['size'];
  $image_type = $image['type'];

  // Create the uploads folder if it doesn't exist
  if (!file_exists('uploads')) {
    mkdir('uploads');
  }

  // Check if the image was uploaded successfully
  if ($image_size > 0 && $image_size <= 5000000) {
    if ($image_type === 'image/jpeg' || $image_type === 'image/png') {
      // Move the uploaded image to a permanent location
      $image_path = 'uploads/' . $image_name;
      move_uploaded_file($image_tmp_name, $image_path);

      // Prepare the SQL statement
      $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");

      // Bind the parameters
      $stmt->bindParam(1, $name);
      $stmt->bindParam(2, $description);
      $stmt->bindParam(3, $price);
      $stmt->bindParam(4, $image_path);

      // Execute the query
      if ($stmt->execute()) {
        // Redirect to the product list page
        header('Location: products.php');
        exit();
      } else {
        // Handle the error
        echo "<p style='color:red;'>Error: " . $stmt->errorInfo()[2] . "</p>";
      }
    } else {
      echo "<p style='color:red;'>Error: Invalid image type. Only JPEG and PNG images are allowed.</p>";
    }
  } else {
    echo "<p style='color:red;'>Error: Invalid image size. The maximum file size is 5 MB.</p>";
  }
}
?>
