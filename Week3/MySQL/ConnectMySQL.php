<!DOCTYPE html>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    echo "Connected successfully";
?>