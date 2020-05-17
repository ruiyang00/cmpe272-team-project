<?php

include 'dbconfig.php';
if (isset($_POST["id"])) {

    $conn = new mysqli($hn, $un, $pw, $db);
    $userID = $_POST['id'];

    $query = <<<EOSQL
    CREATE TABLE IF NOT EXISTS OAuth (
        userid      int(20) NOT NULL
    );
EOSQL;

    $insert_sql = "INSERT INTO OAuth (userid) VALUES ($userID)";

    create_domain_OAuthTable($conn, $query);
    insert_domain_OAuthTable($conn, $insert_sql);
    $conn->close();

}

function create_domain_OAuthTable($conn, $query)
{
    $result = $conn->query($query);
    if (!$result) {
        echo "CREATE failed: $query<br>" . $conn->error . "<br><br>";
    }
}

function insert_domain_OAuthTable($conn, $query)
{
    $result = $conn->query($query);
    if (!$result) {
        echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
    }
}
