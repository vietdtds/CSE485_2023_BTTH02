<?php
function connectDB()
{
  try {
    $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306', 'root', '');
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}