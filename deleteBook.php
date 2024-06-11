<?php 
    include "connection.php";

    $id = $_GET;

    $sql = mysqli_prepare($conn,"DELETE FROM `books` WHERE `books`.`id` = ?");
    mysqli_stmt_bind_param($sql, 'd',$id['id']);
    $exe = mysqli_stmt_execute($sql);

    if($exe) {
        echo "The book was deleted: " . $id['id'];
    } else {
        echo "Error occured";
    }

