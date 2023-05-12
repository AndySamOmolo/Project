<?php
  require_once 'admin-header.php';
 ?>

 <div class="add-products">

    <h2>Add Product</h2>
    <form action="add.php" method="POST">
      <label for="name">Product Name:</label>
      <input type="text" id="name" name="name" required>
      <br><br>
      <label for="description">Product Description:</label>
      <textarea id="description" name="description" required></textarea>
      <br><br>
      <label for="price">Product Price:</label>
      <input type="number" id="price" name="price" min="0" step="0.01" required>
      <br><br>
      <label for="image">Product Image:</label>
      <input type="file" id="image" name="image" class="file-upload">
      <br><br>
      <div class="btn-container">
        <button type="submit">Add Product</button>
      </div>
    </form>

   </div>

<?php
  require_once 'admin-footer.php';
 ?>
