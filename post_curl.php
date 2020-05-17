<?php

if (isset($_POST["product_url"]) && isset($_POST["product_id"]) && isset($_POST["Domain"])) {
    echo "<h1>succsfully post</h1>";

    if (isset($_COOKIE["curl_token"])) {
        $token = $_COOKIE["curl_token"];
        $product_url = $_POST["product_url"];
        $product_id = $_POST["product_id"];
        $Domain = $_POST["Domain"];

        $target_url = $product_url."?id=".$product_id."&domain=".$Domain."&token=".$token;
        header("Location: ".$target_url);
    } else {
        header("Location: login.html");
    }

}
