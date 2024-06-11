<?php 
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="bookshelf.png">
    <title>Book Management</title>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Book Management</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php 
    include 'form.php';
    echo "<hr class='mx-5'>";
    include './table.php';
?>

</body>
<script>
      function deleteClickedRow(button){
        var row = button.closest('tr');
        var bookId = row.querySelector('#bookId').textContent;
          console.log(bookId);
          $.ajax({
                    url: "deleteBook.php",
                    data: {'id': bookId},
                    success: function (result) {
                       alert(result);
                       location.reload();
                    }
                  });
      }
</script>
</html>