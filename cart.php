<?php
 require_once 'header.php';
?>

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
