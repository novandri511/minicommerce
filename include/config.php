<?php

//DATABASE CONNECTION
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'olioli';

$conn = mysqli_connect($host, $username, $password , $database) or die('Could not connect');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>