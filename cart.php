<?php
 require_once 'header.php';
?>

<style media="screen">
.cart-container {
max-width: 800px;
margin: 0 auto;
padding: 20px;
background-color: #fff;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
border-radius: 5px;
}

.cart-container h2 {
margin-bottom: 20px;
}

.cart-container table {
width: 100%;
border-collapse: collapse;
}

.cart-container th {
text-align: left;
padding: 10px;
background-color: #f5f5f5;
}

.cart-container td {
padding: 10px;
}

.cart-container .product-info {
display: flex;
align-items: center;
}

.cart-container img {
width: 100px;
height: 100px;
object-fit: cover;
margin-right: 10px;
}

.cart-container .remove-btn {
background-color: #ff6666;
color: #fff;
border: none;
padding: 8px 12px;
border-radius: 5px;
cursor: pointer;
}

.cart-container .remove-btn:hover {
background-color: #e60000;
}

.cart-container .clear-btn {
background-color: #fff;
color: #333;
border: 1px solid #ccc;
padding: 8px 12px;
border-radius: 5px;
cursor: pointer;
}

.cart-container .clear-btn:hover {
background-color: #f5f5f5;
}

.cart-container .checkout-btn {
background-color: #1abc9c;
color: #fff;
border: none;
padding: 8px 12px;
border-radius: 5px;
cursor: pointer;
}

.cart-container .checkout-btn:hover {
background-color: #16a085;
}

.cart-container .cart-total {
margin-top: 20px;
display: flex;
justify-content: flex-end;
align-items: center;
}

.cart-container .cart-total h4 {
margin-right: 10px;
}

.cart-container .cart-total span {
font-size: 24px;
font-weight: bold;
}

</style>

<div class="cart-container">
    <h2>Your Cart</h2>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="product-info">
              <img src="https://picsum.photos/100/100" alt="Product Image">
              <div class="product-details">
                <h3>Product Name</h3>
                <p>Product Description</p>
              </div>
            </div>
          </td>
          <td>$10.00</td>
          <td>
            <input type="number" min="1" value="1">
          </td>
          <td>$10.00</td>
          <td>
            <button class="remove-btn">Remove</button>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="https://picsum.photos/100/100" alt="Product Image">
              <div class="product-details">
                <h3>Product Name</h3>
                <p>Product Description</p>
              </div>
            </div>
          </td>
          <td>$20.00</td>
          <td>
            <input type="number" min="1" value="1">
          </td>
          <td>$20.00</td>
          <td>
            <button class="remove-btn">Remove</button>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="cart-total">
      <h4>Total:</h4>
      <span>$30.00</span>
    </div>
    <div class="cart-buttons">
      <button class="clear-btn">Clear Cart</button>
      <button class="checkout-btn">Checkout</button>
    </div>
  </div>

  <?php
   require_once 'footer.php';
  ?>
