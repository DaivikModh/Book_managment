
<div class="container center-card mt-5">
  <div class="card bg-dark text-white">
    <div class="card-body">
      <h5 class="card-title">Enter Books</h5>
      <form id="BookData" action="store.php" method="post">
        <div class="form-group">
          <label for="input1">Book Name</label>
          <input name="book" type="text" class="form-control bg-secondary text-white" id="input1" placeholder="What is the Book Name">
        </div>
        <div class="form-group">
          <label for="input2">Author</label>
          <input name="author" type="text" class="form-control bg-secondary text-white" id="input2" placeholder="Who was the Author">
        </div>
        <div class="form-group">
          <label for="input2">Page No.</label>
          <input name="pages" type="text" class="form-control bg-secondary text-white" id="input2" placeholder="Enter Page No.">
        </div>
        <div class="form-group">
        <label for="input2">Progress</label>
        <select name="progress" class="form-select form-control bg-secondary">
            <option value=0>
                Completed
            </option>
            <option value=1>
                In Progress
            </option>
        </select>
        </div>
        <div class="form-group">
          <label for="textarea">Description</label>
          <textarea name="description" class="form-control bg-secondary text-white" id="textarea" rows="3" placeholder="Describe your experience while reeading the book"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="insertData">Submit</button>
      </form>
    </div>
  </div>
</div>
<script>
  document.getElementById("BookData").addEventListener("submit", function (event) {
        // event.preventDefault();
        // document.getElementById('BookData').reset();
        console.log('submmited');
        });
</script>