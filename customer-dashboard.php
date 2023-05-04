<!DOCTYPE html>
<html>
<head>
	<title>Bakery Customer Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		/* Define your CSS styles here */
  body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    margin: 0;
    padding: 0;
  }

  h1, h2, h3, h4, h5, h6 {
    font-weight: bold;
    margin-bottom: 16px;
  }

  a {
    color: #007bff;
    text-decoration: none;
  }

  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  main {
    position: relative; /* Set the position of the sections relative to the main element */
    min-height: 100vh; /* Set a minimum height equal to the viewport height */
    margin-left: 250px; /* Add a margin to the left to prevent the sections from overlapping the aside menu */
  }

  aside {
    position: fixed; /* Fix the position of the aside menu */
    top: 0;
    bottom: 0;
    left: 0;
    background-color: #f9f9f9;
    border-right: 1px solid #ccc;
    padding: 16px;
    width: 200px;
  }

  section {
    position: absolute; /* Position the sections relative to the main element */
    top: 0;
    left: 0;
    width: 100%;
    padding: 16px;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s; /* Add a transition to smoothly animate the section */
  }

  section.active {
    visibility: visible;
    opacity: 1;
  }

  /* Aside menu styles */
  aside ul {
    margin-bottom: 16px;
  }

  aside li {
    margin-bottom: 8px;
  }

  aside a {
    display: block;
    padding: 8px;
  }

  aside a:hover {
    background-color: #007bff;
    color: #fff;
  }

  /* Section styles */
  h2 {
    font-size: 24px;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  table th, table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
  }

  table th {
    background-color: #f9f9f9;
  }

  form label {
    display: block;
    margin-bottom: 8px;
  }

  form input, form textarea, form select {
    font-size: 16px;
    padding: 8px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 16px;
  }

  form input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 8px 16px;
    cursor: pointer;
  }

  form input[type="submit"]:hover {
    background-color: #0062cc;
  }

  section#summary {
  background-color: #f9f9f9;
  border-radius: 8px;
  padding: 32px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

section#summary h2 {
  font-size: 32px;
  margin-bottom: 16px;
}

section#summary p {
  font-size: 18px;
  margin-bottom: 24px;
}

section#summary ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

section#summary li {
  font-size: 16px;
  margin-bottom: 8px;
}

section#summary li:first-of-type {
  font-weight: bold;
}

section#summary li:last-of-type {
  margin-bottom: 0;
}

section#summary li:before {
  content: "• ";
  color: #007bff;
  font-weight: bold;
}

section#favorites {
    padding: 32px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  section#favorites h2 {
    font-size: 32px;
    margin-bottom: 16px;
  }

  section#favorites p {
    font-size: 18px;
    margin-bottom: 24px;
  }

  section#favorites ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  section#favorites li {
    width: calc(50% - 16px);
    margin-bottom: 32px;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 16px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
  }

  section#favorites li:hover {
    transform: translateY(-4px);
  }

  section#favorites li img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 16px;
  }

  section#favorites li h3 {
    font-size: 24px;
    margin-bottom: 8px;
  }

  section#favorites li p {
    font-size: 16px;
    margin-bottom: 0;
  }

  section#specials {
    padding: 32px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  section#specials h2 {
    font-size: 32px;
    margin-bottom: 16px;
  }

  section#specials p {
    font-size: 18px;
    margin-bottom: 24px;
  }

  section#specials ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  section#specials li {
    width: calc(33.33% - 16px);
    margin-bottom: 32px;
    border-radius: 8px;
    padding: 16px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
    overflow: hidden;
  }

  section#specials li:hover {
    transform: translateY(-4px);
  }

  section#specials li img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 16px;
  }

  section#specials li .details {
    margin-top: auto;
    text-align: center;
  }

  section#specials li h3 {
    font-size: 24px;
    margin-bottom: 8px;
  }

  section#specials li p {
    font-size: 16px;
    margin-bottom: 16px;
  }

  section#specials li .price {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    font-size: 20px;
    padding: 8px 16px;
    border-radius: 8px;
  }

  section#track-order {
    padding: 32px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  section#track-order h2 {
    font-size: 32px;
    margin-bottom: 16px;
  }

  section#track-order form {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 24px;
  }

  section#track-order label {
    font-size: 18px;
    margin-right: 8px;
    margin-bottom: 8px;
  }

  section#track-order input {
    font-size: 18px;
    padding: 8px;
    margin-bottom: 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
    flex: 1 1 100%;
  }

  section#track-order button {
    background-color: #007bff;
    color: #fff;
    font-size: 20px;
    padding: 8px 16px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
  }

  section#track-order button:hover {
    background-color: #0062cc;
  }

  section#track-order #order-status {
    font-size: 18px;
  }
	</style>
</head>
<body>


	<main>
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

				<input type="submit" value="Save Changes">
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

				<input type="submit" value="Submit Feedback">
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
		// Define your JavaScript functions here
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
</body>
</html>
