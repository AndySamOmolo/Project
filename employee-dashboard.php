<!DOCTYPE html>
<html>
<head>
  <title>Employee Dashboard</title>
</head>
<body>
  <style media="screen">
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    }

    h1 {
    color: #333;
    margin-bottom: 20px;
    }

    h2 {
    color: #666;
    margin-top: 40px;
    margin-bottom: 20px;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 40px;
    }

    thead {
    background-color: #ccc;
    }

    th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
    }

    th {
    font-weight: bold;
    }

    tr:nth-child(even) {
    background-color: #f9f9f9;
    }

    tr:hover {
    background-color: #ddd;
    }
  </style>
  <h1>Welcome to the Employee Dashboard</h1>

  <?php
  // display employee details
  require_once 'db.php';
  $stmt = $db->prepare("SELECT * FROM employee WHERE id = ?");
  $stmt->bind_param("i", $_SESSION['user_id']);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $employee = $result->fetch_assoc();
    echo "<p>Name: {$employee['name']}</p>";
    echo "<p>Email: {$employee['email']}</p>";
    echo "<p>Department: {$employee['department']}</p>";
    echo "<p>Position: {$employee['position']}</p>";
  }
  ?>

  <h2>Customers</h2>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // display customer list
      $stmt = $db->prepare("SELECT * FROM customers");
      $stmt->execute();
      $result = $stmt->get_result();

      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <h2>Orders</h2>
  <table>
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Order Date</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // display order list
      $stmt = $db->prepare("SELECT customers.name AS customer_name, products.name AS product_name, orders.order_date, order_items.quantity FROM orders JOIN order_items ON orders.order_id = order_items.order_id JOIN customers ON orders.customer_id = customers.customer_id JOIN products ON order_items.product_id = products.product_id");
      $stmt->execute();
      $result = $stmt->get_result();

      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['customer_name']}</td>";
        echo "<td>{$row['product_name']}</td>";
        echo "<td>{$row['order_date']}</td>";
        echo "<td>{$row['quantity']}</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
