<?php include "db.php";
      include "functions.php";

      if(isset($_POST['submit'])){
        updateUsers();
      }

 ?>

<?php include "includes/header.php"; ?>
  <h1 class='text-center'>Update</h1>
    <form class="" action="login_update.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input class='form-control' type="text" name="username" value="">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class='form-control' type="password" name="password" value="">
      </div>
        <input name='submit' type="submit" name="submit" value="Update User" class='btn btn-primary'>
      <div class="form-group">
        <select name='id' id=''>
          <?php
            fetchUsers();
           ?>
        </select>
      </div>
    </form>
  <?php include "includes/footer.php"; ?>
