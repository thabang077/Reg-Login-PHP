<?php

$dbhost="localhost";
$dbbuser="root";
$dbpass="";
$dbname="registration_system1";

// Create connection
// $dbname="registration_system";
$conn = new mysqli($dbhost, $dbbuser,$dbpass,$dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>