<!DOCTYPE html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";


    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row["id"] ."-". $row["firstname"]."".$row["lastname"]."<br>";
        }
    } else {
        echo "0 results";}
    $conn->close();
?>