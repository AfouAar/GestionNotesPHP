<?php
$servername = "serveurdb.mysql.database.azure.com";
$username = "serveurdb";
$password = "Motdepasse!";
$dbname = "apu";

// Create connection

$conn = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password,$dbname, 3307, MYSQLI_CLIENT_SSL);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";