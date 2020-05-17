<?php // user_login.php
include "dbconfig.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $conn = new mysqli($hn, $un, $pw, $db);
    authenticate_user($conn, $email, $password);

    $token_val = $email . ',' . strval($password);
    setcookie("curl_token", $token_val);

    //redirect
    // header("Location: http://localhost:8080/cmpe272-team-project/index.html");

}

$conn->close();

function authenticate_user($conn, $em, $pw)
{
    $query = $query = "SELECT * FROM users WHERE email='$em' and password='$pw'";
    $result = $conn->query($query);
    if (!$result) {
        echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
    } else {

    }
}
