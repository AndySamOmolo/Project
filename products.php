<?php
 require_once 'header.php';
?>


<style>
  /* Reset default browser styles */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  /* Set body background color */
  body {
    background-color: #f4f4f4;
  }

  /* Add a container to center content */
  .container2 {
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
  }

  /* Style the heading */
  h1 {
    font-size: 3rem;
    text-align: center;
    margin-bottom: 2rem;
  }

  /* Add a grid for the products */
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
  }

  /* Style the product cards */
  .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  /* Style the product image */
  .card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  /* Style the product title */
  .card h2 {
    font-size: 1.5rem;
    text-align: center;
    margin: 1rem;
  }

  /* Style the product description */
  .card p {
    font-size: 1.2rem;
    text-align: center;
    margin: 1rem;
  }

  /* Style the product price */
  .card span {
    display: block;
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin: 1rem;
  }
</style>

<div class="container2">
  <h1>Custom Products</h1>

  <div class="grid">
    <div class="card">
      <img src="https://picsum.photos/300/200" alt="Product 1">
      <h2>Product 1</h2>
      <p>Description of product 1</p>
      <span>$19.99</span>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300/200" alt="Product 2">
      <h2>Product 2</h2>
      <p>Description of product 2</p>
      <span>$24.99</span>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300/200" alt="Product 3">
      <h2>Product 3</h2>
      <p>Description of product 3</p>
      <span>$29.99</span>
    </div>

    <div class="card">
      <img src="https://picsum.photos/300/200" alt="Product 4">
      <h2>Product 4</h2>
      <p>Description of product 4</p>
      <span>$34.99</span>
    </div>
  </div>
</div>

<?php
 require_once 'footer.php';
?>
