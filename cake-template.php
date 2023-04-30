<?php
 require_once 'header.php';
?>

<div class="product-container">
<div class="product-image">
  <img src="cake-image.jpg" alt="Cake Name">
</div>
<div class="product-details">
  <h2>Cake Name</h2>
  <p class="description">This delicious cake is perfect for any occasion. Made with high-quality ingredients and baked fresh to order, it's sure to impress your guests.</p>
  <ul class="product-info">
    <li><strong>Price:</strong> $24.99</li>
    <li><strong>Size:</strong> 9-inch</li>
    <li><strong>Flavor:</strong> Chocolate</li>
    <li><strong>Ingredients:</strong> Flour, sugar, eggs, butter, cocoa powder</li>
  </ul>
  <form action="add-to-cart.php" method="post">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
    <button type="submit" class="add-to-cart-btn">Add to Cart</button>
  </form>
</div>
</div>

<style>
.product-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  padding: 2rem;
  background-color: #f5f5f5;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.product-image img {
  width: 100%;
  max-width: 600px;
  margin-bottom: 2rem;
}

.product-details {
  flex: 1;
  margin-left: 2rem;
}

.product-details h2 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.product-details .description {
  font-size: 1.2rem;
  margin-bottom: 2rem;
}

.product-info {
  list-style: none;
  margin-bottom: 2rem;
}

.product-info li {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.product-info li strong {
  margin-right: 1rem;
}

form {
  display: flex;
  align-items: center;
}

label {
  font-size: 1.2rem;
  margin-right: 1rem;
}

input[type="number"] {
  width: 50px;
  font-size: 1.2rem;
  text-align: center;
  margin-right: 1rem;
}

.add-to-cart-btn {
  font-size: 1.2rem;
  padding: 0.5rem 1rem;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.add-to-cart-btn:hover {
  background-color: #555;
}
</style>


<?php
 require_once 'footer.php';
?>
