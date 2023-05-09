<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Bakery Item | My Bakery</title>
  <style>
    /* Global styles */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
    }

    /* Header styles */
    .header {
      background-color: #f00;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .header h1 {
      margin: 0;
      font-size: 28px;
      font-weight: bold;
    }

    /* Form styles */
    .form-container {
      max-width: 800px;
      margin: 30px auto;
    }

    form label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #333;
    }

    form input[type="text"], form input[type="number"], .form-input, .form-select, .form-textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ddd;
      font-size: 16px;
    }

    .form-input {
      margin-bottom: 10px;
    }

    .form-select {
      margin-bottom: 20px;
    }

    .form-textarea {
      height: 150px;
    }

    .form-submit {
      background-color: #f00;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .form-submit:hover {
      background-color: #d00;
    }
  </style>
</head>
<body>
  <?php
    // Check if message parameter is present
    if (isset($_GET['message'])) {
        // Decode and store the message in a variable
        $message = urldecode($_GET['message']);
    }

    // Display the message if it's not empty
    if (!empty($message)) {
        echo '<div style="background-color: #DFF2BF; border: 1px solid #4F8A10; color: #4F8A10; padding: 10px;">' . $message . '</div>';

        // Add JavaScript to hide the message after 5 seconds
        echo '<script>
                  setTimeout(function() {
                      document.querySelector("div[style=\"background-color: #DFF2BF; border: 1px solid #4F8A10; color: #4F8A10; padding: 10px;\"]").style.display = "none";
                  }, 5000);
              </script>';
    }
    ?>
  <div class="header">
    <h1>My Bakery</h1>
  </div>
  <div class="form-container">
    <form action="add.php" method="post" enctype="multipart/form-data">
      <div class="form-input">
        <label for="item-name">Item Name:</label>
        <input type="text" id="item-name" name="item-name" required>
      </div>
      <div class="form-input">
        <label for="item-image">Image:</label>
        <input type="file" id="item-image" name="item-image" accept="image/*" required>
      </div>
      <div class="form-input">
        <label for="item-description">Short Description:</label>
        <input type="text" id="item-description" name="item-description" required>
      </div>
      <div class="form-input">
        <label for="item-size">Size:</label>
        <select id="item-size" name="item-size" required>
          <option value="">Select Size</option>
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
        </select>
      </div>
      <div class="form-input">
        <label for="item-topping">Topping:</label>
        <select id="item-topping" name="item-topping" required>
          <option value="">Select Topping</option>
          <option value="Chocolate">Chocolate</option>
          <option value="Vanilla">Vanilla</option>
          <option value="Strawberry">Strawberry</option>
        </select>
      </div>
      <div class="form-input">
        <label for="item-type">Type:</label>
        <select id="item-type" name="item-type" required>
          <option value="">Select Type</option>
          <option value="Egg">Egg</option>
          <option value="Eggless">Eggless</option>
        </select>
      </div>
      <div class="form-input">
        <label for="item-other-details">Other Details:</label>
        <textarea id="item-other-details" name="item-other-details"></textarea>
      </div>
      <input type="submit" class="form-submit" value="Add Item">
    </form>
  </div>
</body>
</html>
