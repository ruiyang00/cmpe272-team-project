<?php // user_sign.php
include "dbconfig.php";

if (isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $conn = new mysqli($hn, $un, $pw, $db);
    create_user($conn, $email, $username, $password);
    $user_id_row = get_user_id($conn, $email);
    $row = $user_id_row->fetch_assoc();
    $user_id = $row['UserID'];

    $data = array("id" => $user_id);
    $string = http_build_query($data);

    $ch = curl_init("");
    curl_setopt($ch, CURLOPT_URL, "http://ruiyang90.info//oauth.php");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    $response = curl_exec($ch);
    curl_close($ch);

    //set marketplace cookie
    $token_val = $email . ',' . strval($password);
    setcookie("curl_token", $token_val);
    $conn->close();

    //redirect
    // header("Location: http://ruiyang90.info//oauth.php");

}

function create_user($conn, $em, $un, $pw)
{
    $query = "INSERT INTO Users (email, username, password) VALUES ('$em', '$un', '$pw')";
    $result = $conn->query($query);
    if (!$result) {
        echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
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
