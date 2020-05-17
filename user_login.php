<?php // user_login.php
include "dbconfig.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $conn = new mysqli($hn, $un, $pw, $db);
    authenticate_user($conn, $email, $password);

    $user_id_row = get_user_id($conn, $email);
    $row = $user_id_row->fetch_assoc();
    $token = $row['UserID'];
    setcookie("curl_token", $token);

    //redirect
    header("Location: http://ruiyang90.info");

}

$conn->close();

function authenticate_user($conn, $em, $pw)
{
    $query = $query = "SELECT * FROM Users WHERE email='$em' and password='$pw'";
    $result = $conn->query($query);
    if (!$result) {
        echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
    } else {

    }
}

function get_user_id($conn, $em)
{
    $query = "SELECT UserID from Users where email = '$em'";
    $result = $conn->query($query);

    if (!$result) {
        echo "SELECT failed: $query<br>" . $conn->error . "<br><br>";
    }

    return $result;
}
