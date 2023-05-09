<?php
 require_once 'header.php';
?>

	<main class="customer">
    <header>
  		<h1>Bakery Customer Dashboard</h1>
  	</header>
		<aside>
			<ul>
				<li><a href="#summary">Summary</a></li>
				<li><a href="#orders">Orders</a></li>
				<li><a href="#favorites">Favorites</a></li>
				<li><a href="#settings">Settings</a></li>
				<li><a href="#specials">Specials</a></li>
				<li><a href="#delivery">Delivery</a></li>
				<li><a href="#feedback">Feedback</a></li>
				<li><a href="#social">Social Media</a></li>
        <li><a href="#track-order">Track Order</a></li>
			</ul>
		</aside>

		<section id="summary" class="active">
			<h2>Welcome, John Doe!</h2>
			<p>Here's a summary of your account:</p>
			<ul>
				<li>Account Balance: $50.00</li>
				<li>Order History: 3 orders</li>
				<li>Favorite Products: Croissants, Baguettes</li>
				<li>Loyalty Points: 100</li>
				<li>Rewards Available: $5 off next purchase</li>
			</ul>
		</section>

		<section id="orders">
			<h2>Order History</h2>
			<table>
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Order Date</th>
						<th>Total Amount</th>
						<th>Status</th>
						<th>Delivery Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>001</td>
						<td>2023-04-01</td>
						<td>$12.50</td>
						<td>Delivered</td>
						<td>In Transit</td>
					</tr>
					<tr>
						<td>002</td>
						<td>2023-04-15</td>
						<td>$20.00</td>
						<td>Delivered</td>
						<td>Delivered</td>
					</tr>
					<tr>
						<td>003</td>
						<td>2023-05-01</td>
						<td>$17.50</td>
						<td>Processing</td>
						<td>Preparing for Delivery</td>
					</tr>
				</tbody>
			</table>
		</section>

    <section id="favorites">
  <h2>Favorite Products</h2>
  <p>Here are your favorite products:</p>
  <ul>
    <li>
      <img src="croissants.jpg" alt="Croissants">
      <h3>Croissants</h3>
      <p>A buttery, flaky pastry that's perfect for breakfast or a snack.</p>
    </li>
    <li>
      <img src="baguettes.jpg" alt="Baguettes">
      <h3>Baguettes</h3>
      <p>A classic French bread with a crispy crust and chewy interior.</p>
    </li>
    <li>
      <img src="chocolate-cake.jpg" alt="Chocolate Cake">
      <h3>Chocolate Cake</h3>
      <p>A rich, decadent dessert that's always a crowd-pleaser.</p>
    </li>
    <li>
      <img src="apple-tart.jpg" alt="Apple Tart">
      <h3>Apple Tart</h3>
      <p>A sweet, fruity pastry that's perfect for any occasion.</p>
    </li>
    <li>
      <img src="cinnamon-rolls.jpg" alt="Cinnamon Rolls">
      <h3>Cinnamon Rolls</h3>
      <p>A warm, gooey pastry that's perfect for breakfast or dessert.</p>
    </li>
  </ul>
</section>

		<section id="settings">
			<h2>Account Settings</h2>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" value="John Doe">

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" value="johndoe@example.com">

				<label for="password">Password:</label>
				<input type="password" id="password" name="password">

				<label for="phone">Phone:</label>
				<input type="tel" id="phone" name="phone" value="(123) 456-7890">

				<label for="address">Address:</label>
				<textarea id="address" name="address">123 Main St, Anytown USA</textarea>

				<label for="payment">Payment Method:</label>
				<select id="payment" name="payment">
					<option value="credit">Credit Card</option>
					<option value="paypal">PayPal</option>
				</select>

				<input type="submit" value="Save Changes" class="btn2">
			</form>
		</section>

    <section id="specials">
  <h2>Today's Specials</h2>
  <p>Here are today's specials:</p>
  <ul>
    <li>
      <img src="special-1.jpg" alt="Special 1">
      <div class="details">
        <h3>Chicken Caesar Salad</h3>
        <p>A classic Caesar salad topped with grilled chicken and croutons.</p>
        <span class="price">$12.99</span>
      </div>
    </li>
    <li>
      <img src="special-2.jpg" alt="Special 2">
      <div class="details">
        <h3>Beef Burger with Fries</h3>
        <p>A juicy beef burger served with crispy fries and your choice of toppings.</p>
        <span class="price">$14.99</span>
      </div>
    </li>
    <li>
      <img src="special-3.jpg" alt="Special 3">
      <div class="details">
        <h3>Seafood Pasta</h3>
        <p>A delicious pasta dish loaded with shrimp, scallops, and clams.</p>
        <span class="price">$16.99</span>
      </div>
    </li>
  </ul>
</section>

		<section id="delivery">
			<h2>Delivery Information</h2>
			<p>Here's your delivery information:</p>
			<ul>
				<li>Delivery Address: 123 Main St, Anytown USA</li>
				<li>Delivery Date: 2023-05-10</li>
				<li>Delivery Time: 10:00 AM - 12:00 PM</li>
				<li>Delivery Instructions: Leave at front door.</li>
			</ul>
		</section>

		<section id="feedback">
			<h2>Feedback</h2>
			<p>Leave us your feedback:</p>
			<form>
				<label for="feedback">Feedback:</label>
				<textarea id="feedback" name="feedback"></textarea>

				<input type="submit" value="Submit Feedback" class="btn2">
			</form>
		</section>

    <section id="track-order">
  <h2>Track Your Order</h2>
  <form>
    <label for="order-number">Order Number:</label>
    <input type="text" id="order-number" name="order-number" required>
    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Track Order</button>
  </form>
  <div id="order-status"></div>
</section>

		<section id="social">
			<h2>Social Media</h2>
			<p>Connect with us on social media:</p>
			<ul>
				<li><a href="https://www.facebook.com/bakery">Facebook</a></li>
				<li><a href="https://www.twitter.com/bakery">Twitter</a></li>
				<li><a href="https://www.instagram.com/bakery">Instagram</a></li>
			</ul>
		</section>
	</main>

	<script>
		const sections = document.querySelectorAll("section");
		const links = document.querySelectorAll("aside a");

		links.forEach((link) => {
			link.addEventListener("click", (e) => {
				e.preventDefault();
				const href = link.getAttribute("href");
				sections.forEach((section) => {
					if (section.id === href.substring(1)) {
						section.classList.add("active");} else {
						section.classList.remove("active");
					}
				});
			});
		});

    const form = document.querySelector('section#track-order form');
 		const orderStatus = document.querySelector('#order-status');

 	 form.addEventListener('submit', function(event) {
   event.preventDefault();

   const orderNumber = form.elements['order-number'].value;
   const email = form.elements['email'].value;

   // Here you would make an API call to your backend to retrieve the status of the order
   // For the sake of this example, we will simply display a fake status

   const status = 'In Transit';

   orderStatus.textContent = `Your order with order number ${orderNumber} and email address ${email} is ${status}.`;
 });
	</script>

	<?php
   require_once 'footer.php';
  ?>
