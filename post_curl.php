<?php

// if (isset($_POST["product_url"]) && isset($_POST["product_id"]) && isset($_POST["Domain"])) {
    echo "<h1>succsfully post</h1>";

    if (isset($_COOKIE["curl_token"])) {
        $token = $_COOKIE["curl_token"];
        $product_url = $_POST["product_url"];
        $product_id = $_POST["product_id"];
        $Domain = $_POST["Domain"];

        $post = [
            'token' => $token
        ];

        $position = strrpos($product_url, "/", 0);
        $baseDomain = substr($product_url, 0, $position);
        $authDomain = $baseDomain."/authenticate.php";
        echo $authDomain;
        $ch = curl_init($authDomain);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Cookie: auth=".$token]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        // execute!
        $response = curl_exec($ch);

        // close the connection, release resources used
        curl_close($ch);

        // do anything you want with your response
        echo var_dump($response);
        $target_url = $product_url."?id=".$product_id."&domain=".$Domain;
        echo $target_url;
        header("Location: ".$target_url);




        $target_url = "http://www.feiyucai.info/thewayshop/viewcomments.php?id=".$product_id."&domain=".$domain;
        header("Location: ".$target_url);
    } else {
        header("Location: http://localhost:8080/cmpe272-team-project/login.html");
    }

// }
