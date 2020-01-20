<?php

function create(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //Create Connection
    $conn = new mysqli($servername, $username ,$password);
    
// Create Database
$sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database Create successfully";
    } else {
        echo "Error to Creating ur Database: " . mysqli_error($conn);
    }

    $conn->close();
}

create();


?>
