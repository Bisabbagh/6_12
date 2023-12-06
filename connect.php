<?php
$servername = "localhost";
$username = "Bik";
$password = "3190&wise";

try {
  $conn = new PDO("mysql:host=$servername;dbname=login", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
    