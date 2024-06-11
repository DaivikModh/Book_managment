<?php
    include 'getBooks.php';
    include 'header.php';
?>

<div class="table-responsive mx-5 my-5">
    <table class="table align-middle">
        <tr>
            <th hidden>Id</th>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Author</th>
            <th>Page No.</th>
            <th>Description</th>
            <th>Progress</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        foreach($data as $inData){
            $i++;
            echo "<tr>";
            print_r("<td id='bookId' hidden>".$inData['id']."</td>");
            print_r("<td>".$i."</td>");
            print_r("<td>".$inData['name']."</td>");
            print_r("<td>".$inData['author']."</td>");
            print_r("<td>".$inData['page_no.']."</td>");
            print_r("<td>".$inData['description']."</td>");
            // print_r(var_dump($inData['progress'])"");
            if($inData['progress'] == "0"){
                $progress = 'Completed';
            } else{
                $progress = 'In Progress';
            }
            print_r("<td>".$progress."</td>");
            print_r("<td>
                <button class='btn btn-danger' onclick='deleteClickedRow(this)'>Delete</button></td>");
            echo "</tr>";
        }?>
    </table>
</div>