<?php

$siteurl="http://localhost/Training/Projects/admin/";

$hostname = "localhost";
$username = "root";
$password = "";
$database="adminpanel";


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>