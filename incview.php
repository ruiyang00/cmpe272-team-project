<?php
  $ProductId = $_POST['productId'];

  // echo "ProductId " +$ProductId + '\n';

  // $servername = "localhost";
  // $username = "root";
  // $password = "root";
  // $dbname = "thewayshop";
  
  // Create connection
  // $conn = new mysqli($servername, $username, $password, $dbname);

  include 'dbconfig.php';

  // Create connection
  $conn = new mysqli($hn, $un, $pw, $db);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $writesql = "UPDATE Products SET Visit = Visit+1 WHERE ProductID=". $ProductId . "";
  if ($conn->query($writesql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $writesql . "<br>" . $conn->error;
  }  
?>