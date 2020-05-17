<?php

if (isset($_POST["product_url"]) && isset($_POST["product_id"]) && isset($_POST["Domain"])) {
    echo "<h1>succsfully post</h1>";

    if (isset($_COOKIE["curl_token"])) {
        $token = $_COOKIE["curl_token"];
        $product_url = $_POST["product_url"];
        $product_id = $_POST["product_id"];
        $Domain = $_POST["Domain"];
        echo "<h1>$product_url</h1>";
        echo "<h1>$product_id</h1>";
        echo "<h1>$Domain</h1>";
        echo "<h1>$token</h1>";

    } else {
        header("Location: http://localhost:8080/cmpe272-team-project/login.html");
    }

}
