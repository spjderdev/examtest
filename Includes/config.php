<?php 

function ConnectDatabase() {
  $Servername = "localhost";
  $Username = "root";
  $Password = "";
  try {
    $conn = new PDO("mysql:host=$Servername;dbname=ph55517_examphp", $Username, $Password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }
  catch (PDOException $e) {
    echo "Connection Failed " . $e->getMessage();
  }
}