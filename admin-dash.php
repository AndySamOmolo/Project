<?php
	require_once 'admin-header.php';
 ?>


    <section id="sales-data" class="dashboard-section">
			<h2>Sales</h2>
			<div class="sales-section">
			<div class="sales-summary">
				<div class="sales-card">
					<h3 class="card-title">Total Orders</h3>
					<p class="card-value">256</p>
				</div>
				<div class="sales-card">
					<h3 class="card-title">Total Revenue</h3>
					<p class="card-value">$5,678.90</p>
				</div>
				<div class="sales-card">
					<h3 class="card-title">Most Popular Item</h3>
					<p class="card-value">Chocolate Cake</p>
				</div>
			</div>
			<div class="sales-chart">
				<!-- Insert sales chart here -->
			</div>
			</div>
    </section>


		<section id="product-management" class="dashboard-section">
		  <h2>Product Management</h2>
		  <div class="product-section">
		    <div class="product-actions">
		      <h3>Actions</h3>
		      <ul>
		        <li><a href="#">Add New Product</a></li>
		        <li><a href="#">Edit Product</a></li>
		        <li><a href="#">Delete Product</a></li>
		      </ul>
		    </div>
		    <div class="product-list">
		      <h3>Product List</h3>
		      <table>
		        <thead>
		          <tr>
		            <th>Product Name</th>
		            <th>Price</th>
		            <th>Quantity</th>
		            <th>Actions</th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td>Chocolate Cake</td>
		            <td>$20</td>
		            <td>10</td>
		            <td>
		              <a href="#">Edit</a>
		              <a href="#">Delete</a>
		            </td>
		          </tr>
		          <tr>
		            <td>Blueberry Muffin</td>
		            <td>$3</td>
		            <td>25</td>
		            <td>
		              <a href="#">Edit</a>
		              <a href="#">Delete</a>
		            </td>
		          </tr>
		          <tr>
		            <td>Croissant</td>
		            <td>$5</td>
		            <td>15</td>
		            <td>
		              <a href="#">Edit</a>
		              <a href="#">Delete</a>
		            </td>
		          </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		</section>

      <section id="inventory-management" class="dashboard-section">
    	<h2>Inventory Management</h2>
    	<div class="inventory-summary">
    		<h3>Inventory Summary</h3>
    		<ul>
    			<li>Total Items: 500</li>
    			<li>Items in Stock: 400</li>
    			<li>Items on Order: 100</li>
    			<li>Reorder Level: 50</li>
    		</ul>
    	</div>
    	<div class="inventory-actions">
    		<h3>Inventory Actions</h3>
    		<ul>
    			<li><a href="#">Add New Item</a></li>
    			<li><a href="#">Update Item</a></li>
    			<li><a href="#">Delete Item</a></li>
    			<li><a href="#">Place Order</a></li>
    		</ul>
    	</div>
    	<div class="inventory-list">
    		<h3>Inventory List</h3>
    		<table>
    			<thead>
    				<tr>
    					<th>Item Name</th>
    					<th>Category</th>
    					<th>Quantity</th>
    					<th>Price</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td>Apple</td>
    					<td>Fruit</td>
    					<td>50</td>
    					<td>$0.50</td>
    					<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    				</tr>
    				<tr>
    					<td>Orange</td>
    					<td>Fruit</td>
    					<td>75</td>
    					<td>$0.75</td>
    					<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    				</tr>
    				<tr>
    					<td>Carrot</td>
    					<td>Vegetable</td>
    					<td>100</td>
    					<td>$0.25</td>
    					<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </section>


      <section id="order-management" class="dashboard-section">
      <h2>Order Management</h2>
      <div class="order-summary">
      <h3>Order Summary</h3>
      <ul>
        <li>Total Orders: 100</li>
        <li>Orders Pending: 20</li>
        <li>Orders Shipped: 70</li>
        <li>Orders Delivered: 10</li>
      </ul>
      </div>
      <div class="order-actions">
      <h3>Order Actions</h3>
      <ul>
        <li><a href="#">View Pending Orders</a></li>
        <li><a href="#">View Shipped Orders</a></li>
        <li><a href="#">View Delivered Orders</a></li>
        <li><a href="#">Add New Order</a></li>
      </ul>
      </div>
      <div class="order-list">
      <h3>Order List</h3>
      <table>
        <thead>
          <tr>
            <th>Order Number</th>
            <th>Customer Name</th>
            <th>Order Date</th>
            <th>Status</th>
            <th>Total</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1234</td>
            <td>John Smith</td>
            <td>2023-04-29</td>
            <td>Pending</td>
            <td>$50.00</td>
            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
          </tr>
          <tr>
            <td>5678</td>
            <td>Jane Doe</td>
            <td>2023-04-30</td>
            <td>Shipped</td>
            <td>$100.00</td>
            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
          </tr>
          <tr>
            <td>9012</td>
            <td>Bob Johnson</td>
            <td>2023-05-01</td>
            <td>Delivered</td>
            <td>$75.00</td>
            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
          </tr>
        </tbody>
      </table>
      </div>
      </section>

      <section id="marketing-analytics" class="dashboard-section">
    	<h2>Market Analytics</h2>
    	<div class="chart-container"></div>
    	<div class="metrics">
    		<h3>Metrics</h3>
    		<ul>
    			<li>Visits: 10,000</li>
    			<li>Orders: 500</li>
    			<li>Conversion Rate: 5%</li>
    			<li>Revenue: $50,000</li>
    			<li>Average Order Value: $100</li>
    		</ul>
    	</div>
    	<div class="top-products">
    		<h3>Top Products</h3>
    		<table>
    			<thead>
    				<tr>
    					<th>Product</th>
    					<th>Quantity Sold</th>
    					<th>Revenue</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td>Product A</td>
    					<td>100</td>
    					<td>$5,000</td>
    				</tr>
    				<tr>
    					<td>Product B</td>
    					<td>75</td>
    					<td>$3,750</td>
    				</tr>
    				<tr>
    					<td>Product C</td>
    					<td>50</td>
    					<td>$2,500</td>
    				</tr>
    				<tr>
    					<td>Product D</td>
    					<td>25</td>
    					<td>$1,250</td>
    				</tr>
    			</tbody>
    		</table>
    	</div>
    </section>



    <section id="employee-management" class="dashboard-section">
			<?php
			// Check if a message is set in the URL query string
			if (isset($_GET['message'])) {
			    $message = $_GET['message'];
			    // Display the message in a styled div and set a timeout to hide it after 5 seconds
			    echo "<div style='background-color: #F0FFF0; color: #008000; border: 1px solid #008000; padding: 10px; margin-bottom: 20px;'>$message</div>";
			    echo "<script>window.onload = function() { setTimeout(function() { document.querySelector('div').style.display = 'none'; }, 5000); }</script>";
			}
			?>
			<h2>Employee Management</h2>
			<div class="add-employee">
				<h3>Add Employee</h3>
				<form action="add-employee.php" method="POST">
					<label for="employee-name">Name:</label>
					<input type="text" id="employee-name" name="employee-name" required>

					<label for="employee-email">Email:</label>
					<input type="email" id="employee-email" name="employee-email" required>

					<label for="employee-password">Password:</label>
					<input type="password" id="employee-password" name="employee-password" required>

					<label for="employee-role">Role:</label>
					<select id="employee-role" name="employee-role">
						<option value="sales">Sales</option>
						<option value="marketing">Marketing</option>
						<option value="baking">Baking</option>
					</select>

					<button type="submit" class="btn1">Add Employee</button>
				</form>
			</div>
			<?php
	// Include the database connection file
	include('db.php');

	// Query the database to retrieve the employee data
	$sql = "SELECT id, name, email, job_title FROM employees";
	$result = mysqli_query($db, $sql);
	?>

	<div class="employee-list">
	    <h3>Employee List</h3>
	    <?php
	    // Check for success or error messages in the URL query string
	    if (isset($_GET['message'])) {
	        $message = $_GET['message'];
	        echo "<p class='message'>$message</p>";
	    }
	    ?>
	    <table>
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Job Title</th>
	                <th>Actions</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php
	            // Loop through the query result and generate the table rows dynamically
	            while ($row = mysqli_fetch_assoc($result)) {
	                echo "<tr>";
	                echo "<td>" . $row["name"] . "</td>";
	                echo "<td>" . $row["email"] . "</td>";
	                echo "<td>" . $row["job_title"] . "</td>";
	                echo '<td>';
	                echo '<a href="edit_employee.php?id=' . $row["id"] . '" class="edit btn1">Edit</a>';
	                echo '<a href="delete_employee.php?id=' . $row["id"] . '" class="delete btn1" onclick="return confirm(\'Are you sure you want to delete this employee?\')">Delete</a>';
	                echo '</td>';
	                echo "</tr>";
	            }
	            ?>
	        </tbody>
	    </table>
	</div>

	<?php
	// Close the database connection
	mysqli_close($db);
	?>
		</section>



<section id="customer-management" class="dashboard-section">
		<h2>Customer Management</h2>
		<div class="add-customer">
		<h3>Add Customer</h3>
		<form>
		  <label for="customer-name">Name:</label>
		  <input type="text" id="customer-name" name="customer-name" required>

		  <label for="customer-email">Email:</label>
		  <input type="email" id="customer-email" name="customer-email" required>

		  <label for="customer-phone">Phone:</label>
		  <input type="tel" id="customer-phone" name="customer-phone" required>

		  <button type="submit" class="btn1">Add Customer</button>
		</form>
		</div>
		<div class="customer-list">
		<h3>Customer List</h3>
		<table>
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Email</th>
		      <th>Phone</th>
		      <th>Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>John Doe</td>
		      <td>johndoe@example.com</td>
		      <td>555-1234</td>
		      <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
		    </tr>
		    <tr>
		      <td>Jane Smith</td>
		      <td>janesmith@example.com</td>
		      <td>555-5678</td>
		      <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
		    </tr>
		    <tr>
		      <td>Bob Johnson</td>
		      <td>bjohnson@example.com</td>
		      <td>555-9012</td>
		      <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
		    </tr>
		  </tbody>
		</table>
		</div>
</section>




		<section id="reporting" class="dashboard-section">
			<h2>Reporting</h2>
			<!-- The reporting content will go here -->
			<div class="report-section">
				  <h2 class="section-title">Reports</h2>
				  <div class="report-filters">
				    <label for="start-date">Start Date:</label>
				    <input type="date" id="start-date" name="start-date">
				    <label for="end-date">End Date:</label>
				    <input type="date" id="end-date" name="end-date">
				    <button class="filter-btn">Filter</button>
				  </div>
				  <div class="report-table">
				    <table>
				      <thead>
				        <tr>
				          <th>Order Date</th>
				          <th>Order Number</th>
				          <th>Customer Name</th>
				          <th>Product Name</th>
				          <th>Quantity</th>
				          <th>Price</th>
				          <th>Total</th>
				        </tr>
				      </thead>
				      <tbody>
				        <tr>
				          <td>2022-05-01</td>
				          <td>#1234</td>
				          <td>John Doe</td>
				          <td>Chocolate Cake</td>
				          <td>2</td>
				          <td>$29.99</td>
				          <td>$59.98</td>
				        </tr>
				        <tr>
				          <td>2022-05-02</td>
				          <td>#5678</td>
				          <td>Jane Smith</td>
				          <td>Vanilla Cupcake</td>
				          <td>12</td>
				          <td>$2.99</td>
				          <td>$35.88</td>
				        </tr>
				        <!-- more table rows here -->
				      </tbody>
				    </table>
				  </div>
				</div>
		</section>
		<section id="alerts-and-notifications" class="dashboard-section">
			<h2>Alerts and Notifications</h2>
			<!-- The alerts and notifications content will go here -->
			<div class="alert-section">
			  <div class="alert-container">
			    <div class="alert-header">
			      <h2 class="alert-title">Alerts</h2>
			      <button class="clear-btn">Clear All</button>
			    </div>
			    <div class="alert-list">
			      <div class="alert-item">
			        <div class="alert-icon">
			          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#f00" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2a9 9 0 0 0-9 9c0 3.86 2.91 7.05 6.67 7.86L9 21v1.5h6V21l.33-.14C18.09 18.05 21 14.86 21 11a9 9 0 0 0-9-9zm0 16a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm-1-6h2v4H9v-4z"/></svg>
			        </div>
			        <div class="alert-details">
			          <p class="alert-message">There was an error processing your payment.</p>
			          <span class="alert-time">2 hours ago</span>
			        </div>
			      </div>
			      <div class="alert-item">
			        <div class="alert-icon">
			          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2c-4.41 0-8 3.59-8 8v4c0 .78.39 1.47.98 1.89L3 18v1c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-1l-1.98-2.11c.59-.42.98-1.11.98-1.89v-4c0-4.41-3.59-8-8-8zm-2 12v2h4v-2h-4zm0-6v4h4V8h-4z"/></svg>
			        </div>
			        <div class="alert-details">
			          <p class="alert-message">Your order has been shipped.</p>
			          <span class="alert-time">1 day ago</span>
			        </div>
			      </div>
			      <!-- more alert items here -->
			    </div>
			  </div>
			  <div class="notification-container">
			    <div class="notification-header">
			      <h2 class="notification-title">Notifications</h2>
			    </div>
			    <div class="notification-list">
			      <div class="notification-item">
			        <div class="notification-icon">
			          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 3H4v18h16V3zm-2 13H6v-1h12v1zm0-3H6V9h12v4z"/></svg>
			        </div>
			        <div class="notification-details">
			          <p class="notification-message">You have a new message from John Doe.</p>
			          <span class="notification-time">5 minutes ago</span>
			        </div>
			      </div>
			      <div class="notification-item">
			        <div class="notification-icon">
			          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="24px" height="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2a9 9 0 0 0-9 9c0 2.94 1.42 5.53 3.62 7.17V19a1 1 0 0 0 1 1h4.76c-.54-.58-.86-1.34-.86-2.17 0-.83.32-1.59.86-2.17H8.5c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h6c.28 0 .5.22.5.5s-.22.5-.5.5H13.4c.54.58.86 1.34.86 2.17 0 .83-.32 1.59-.86 2.17H19a1 1 0 0 0 1-1v-2.83c2.2-1.64 3.62-4.23 3.62-7.17a9 9 0 0 0-9-9zM4.27 4.27a7 7 0 0 1 9.9 0c.78.78 1.32 1.72 1.6 2.73H2.67c.28-1.01.82-1.95 1.6-2.73zm15.46 0c.78.78 1.32 1.72 1.6 2.73h-3.2c.28-1.01.82-1.95 1.6-2.73zM12 13.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
			        </div>
			        <div class="notification-details">
			          <p class="notification-message">John Smith has followed your bakery page.</p>
			          <span class="notification-time">1 hour ago</span>
			        </div>
			      </div>
			      <!-- more notification items here -->
			    </div>
			  </div>
			</div>
		</section>
	</main>

<?php
	require_once 'admin-footer.php';
 ?>
