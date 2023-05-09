<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bakery';

// create a database connection
$db = new mysqli($host, $user, $password, $database);

// check if the connection is successful
if ($db->connect_errno) {
  die('Failed to connect to database: ' . $db->connect_error);
}

?>
