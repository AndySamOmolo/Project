<!DOCTYPE html>
<html>
<head>
	<title>Employee Dashboard - Bakery Name</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f7f7f7;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 20px;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		.status {
			display: inline-block;
			padding: 5px 10px;
			border-radius: 20px;
			font-size: 14px;
			font-weight: bold;
			text-transform: uppercase;
			color: #fff;
		}

		.status--active {
			background-color: #4CAF50;
		}

		.status--inactive {
			background-color: #f44336;
		}

		.status--pending {
			background-color: #ff9800;
		}

		.status--cancelled {
			background-color: #9e9e9e;
		}
	</style>
</head>
<body>
	<header>
		<h1>Employee Dashboard</h1>
	</header>

	<div class="container">
		<h2>Orders</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Customer Name</th>
					<th>Order Date</th>
					<th>Delivery Date</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td>John Doe</td>
					<td>2023-05-01</td>
					<td>2023-05-04</td>
					<td><span class="status status--active">Active</span></td>
				</tr>
				<tr>
					<td>002</td>
					<td>Jane Smith</td>
					<td>2023-05-02</td>
					<td>2023-05-05</td>
					<td><span class="status status--inactive">Inactive</span></td>
				</tr>
				<tr>
					<td>003</td>
					<td>Bob Johnson</td>
					<td>2023-05-03</td>
					<td>2023-05-06</td>
					<td><span class="status status--pending">Pending</span></td>
				</tr>
				<tr>
					<td>004</td>
					<td>Susan Lee</td>
					<td>2023-05-03</td>
					<td>2023-05-07</td>
					<td><span class="status status--cancelled">Cancelled</span></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
