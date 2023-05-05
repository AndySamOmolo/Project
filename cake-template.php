<?php
 require_once 'header.php';
?>

<div class="product-container">
  <div class="product-image">
    <img src="https://picsum.photos/500/500" alt="Cake Name">
  </div>
  <div class="product-details">
    <h2>Cake Name</h2>
    <p class="description2">This delicious cake is perfect for any occasion. Made with high-quality ingredients and baked fresh to order, it's sure to impress your guests.</p>
    <form action="add-to-cart.php" method="post">
      <ul class="product-info">
        <li>
          <label for="size">Size:</label>
          <select id="size" name="size">
            <option value="6-inch">6-inch</option>
            <option value="9-inch" selected>9-inch</option>
            <option value="12-inch">12-inch</option>
          </select>
        </li>
        <li>
          <label for="toppings">Toppings:</label>
          <select id="toppings" name="toppings">
            <option value="Chocolate Chips">Chocolate Chips</option>
            <option value="Rainbow Sprinkles" selected>Rainbow Sprinkles</option>
            <option value="Strawberries">Strawberries</option>
          </select>
        </li>
        <li>
          <label for="message">Custom Message:</label>
          <textarea id="message" name="message" rows="3" cols="30"></textarea>
        </li>
        <li><strong>Price:</strong> $24.99</li>
        <li><strong>Ingredients:</strong> Flour, sugar, eggs, butter, cocoa powder</li>
      </ul>
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
  background-color: white;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
  width: 80%;
  text-align: left;
}

.product-image img {
  width: 100%;
  max-width: 600px;
  margin-bottom: 2rem;
  object-fit: contain;
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
  font-size: 1.2rem;
}

.product-info li {
  margin-bottom: 0.5rem;
}

.product-info li strong {
  margin-right: 1rem;
}

form {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

label {
  font-size: 1.2rem;
  margin-right: 1rem;
}

select {
  font-size: 1.2rem;
  margin-right: 1rem;
}

textarea {
  font-size: 1.2rem;
  margin-right: 1rem;
}

input[type="number"] {
  width: 50px;
  font-size: 1.2rem;
  text-align: center;
  margin-right: 1rem;
}

.description2 {
  font-size: 1.2rem;
  margin-bottom: 1rem;
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
