<?php
    include 'connection.php';

    $sql_get = "SELECT * FROM `books`;";
    $got = mysqli_query($conn, "$sql_get");

    $row = [];
    if($got) {
        while($row = mysqli_fetch_assoc($got)){
            $data[] = $row;
        }
        return $data;
    } else {
        $error = "There is no data in the table";
        return $error;
    }

?>