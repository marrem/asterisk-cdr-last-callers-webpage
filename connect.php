<?php


function connectToDb() {

    include "db_password.php";
    # Should define $dbPassword var

    $servername = "127.0.0.1";
    $username = "cdr";
    $password = $dbPassword;
    $database = "asterisk";

// Create connection
    $conn = new mysqli($servername, $username, $password, $database);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    return $conn;
}
