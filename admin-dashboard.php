<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
      /* Global styles */
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
        position: relative;
        min-height: 100vh;
        margin-left: 250px;
        padding: 16px;
      }

      aside {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        background-color: #f9f9f9;
        border-right: 1px solid #ccc;
        padding: 16px;
        width: 200px;
      }

      section {
        position: absolute;
        top: 40px;
        left: 0;
        width: 100%;
        padding: 16px;
        visibility: hidden;
        opacity: 0;
        transition: visibility 0s, opacity 0.5s;
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
        margin-top: 32px;
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
    </style>
  </head>

  <body>
    <aside>
      <ul>
        <li><a href="#orders">Orders</a></li>
        <li><a href="#customers">Customers</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#sales">Sales and Revenue</a></li>
        <li><a href="#analytics">Analytics</a></li>
        <li><a href="#settings">Settings</a></li>
        <li><a href="#help">Help and Support</a></li>
      </ul>
    </aside>

    <main>
      <h1>Welcome to the Admin Dashboard</h1>

      <section id="orders" class="active">
        <h2>Orders</h2>

        <table>
          <thead>
            <tr>
              <th>Order Number</th>
              <th>Date</th>
              <th>Customer Name</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>001</td>
              <td>2023-04-30</td>
              <td>John Smith</td>
              <td>$100.00</td>
            </tr>
            <tr>
              <td>002</td>
              <td>2023-04-30</td>
              <td>Jane Doe</td>
              <td>$50.00</td>
            </tr>
            <tr>
              <td>003</td>
              <td>2023-05-01</td>
              <td>Bob Johnson</td>
              <td>$75.00</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="customers">
        <h2>Customers</h2>

        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Orders</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John Smith</td>
              <td>john@example.com</td>
              <td>555-555-5555</td>
              <td>3</td>
            </tr>
            <tr>
              <td>Jane Doe</td>
              <td>jane@example.com</td>
              <td>555-555-5555</td>
              <td>1</td>
            </tr>
            <tr>
              <td>Bob Johnson</td>
              <td>bob@example.com</td>
              <td>555-555-5555</td>
              <td>2</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="products">
        <h2>Products</h2>

        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Inventory</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Product 1</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
              <td>$10.00</td>
              <td>100</td>
            </tr>
            <tr>
              <td>Product 2</td>
              <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
              <td>$20.00</td>
              <td>50</td>
            </tr>
            <tr>
              <td>Product 3</td>
              <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
              <td>$15.00</td>
              <td>75</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="sales">
        <h2>Sales and Revenue</h2>

        <p>Total Sales: $225.00</p>
        <p>Revenue by Product:</p>
        <ul>
          <li>Product 1: $50.00</li>
          <li>Product 2: $100.00</li>
          <li>Product 3: $75.00</li>
        </ul>
        <p>Revenue by Region:</p>
        <ul>
          <li>North America: $150.00</li>
          <li>Europe: $50.00</li>
          <li>Asia: $25.00</li>
        </ul>
      </section>

      <section id="analytics">
        <h2>Analytics</h2>

        <p>Number of Users: 1,000</p>
        <p>Pageviews: 10,000</p>
        <p>Conversion Rate: 5%</p>
      </section>

      <section id="settings">
        <h2>Settings</h2>

        <form>
          <label for="payment-method">Payment Method:</label>
          <select id="payment-method" name="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
          </select>

          <label for="tax-rate">Tax Rate:</label>
          <input id="tax-rate" type="number" name="tax-rate" step="0.01" value="7.5">

          <input type="submit" value="Save Settings">
        </form>
      </section>

      <section id="help">
        <h2>Help and Support</h2>

        <h3>Frequently Asked Questions</h3>
        <ul>
          <li><a href="#">How do I add a new product?</a></li>
          <li><a href="#">What payment methods do you accept?</a></li>
          <li><a href="#">How do I contact customer support?</a></li>
        </ul>

        <h3>Contact Us</h3>
        <p>Email: support@example.com</p>
        <p>Phone: 00000000 </p>
</section>
    </main>

    <script>
      const sections = document.querySelectorAll('section');
      const links = document.querySelectorAll('aside a');

      function setActiveLink(link) {
        links.forEach(link => link.classList.remove('active'));
        link.classList.add('active');
      }

      function setActiveSection(section) {
        sections.forEach(section => section.classList.remove('active'));
        section.classList.add('active');
      }

      links.forEach(link => {
        link.addEventListener('click', e => {
          e.preventDefault();
          const href = link.getAttribute('href');
          const section = document.querySelector(href);
          setActiveLink(link);
          setActiveSection(section);
        });
      });
    </script>
  </body>
</html>
