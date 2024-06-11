<?php 
    $servername = "localhost";
    $database = "book_management";
    $username = "root";
    $password = "";
    // $conn = new mysqli($servername, $username, $database);
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "The connection to database failed";
        die;
    }