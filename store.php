<?php 
    include "connection.php";

if(!empty($_POST['book'])){
    $name = $_POST['book'];
    $author = $_POST['author'];
    $page_no = $_POST['pages'];
    $desc = $_POST['description'];
    $progress = $_POST['progress'];
    // print_r(var_dump($_POST));die;

    $sql_insert = mysqli_prepare($conn,"INSERT INTO `books`(`name`, `author`, `page_no.`, `description`,`progress`) VALUES (?,?,?,?,?)");
    mysqli_stmt_bind_param($sql_insert,'ssdss',$name,$author,$page_no,$desc,$progress);
    $exe = mysqli_stmt_execute($sql_insert);

    if($exe) {
        echo "Data was Successfully inserted";
    }
} else {
    echo "";
}

?>
