<?php
  $ProductId = $_POST['productId'];
  $UserId = $_POST['userId'];
  $rating = $_POST['rating'];
  $comment = $_POST['comment'];
  $domain = $_POST['domain'];


  echo "ProductId " +$ProductId + '\n';
  echo  "UserId " + $UserId+ '\n';
  echo  "rating " + $rating+ '\n';
  echo  "comment " +$comment+ '\n';


  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "thewayshop";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $writesql = "INSERT INTO Reviews (ProductID, UserID, Domain, Rating, Comment)
  VALUES ( '". $ProductId . "','" . $UserId. "','" . $domain.  "','" . $rating.  "','" . $comment. "')";
  if ($conn->query($writesql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $writesql . "<br>" . $conn->error;
  }  
?>