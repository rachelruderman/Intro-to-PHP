<?php include "db.php";
      include "functions.php";

      if(isset($_POST['submit'])){
        createUsers();
      }

 ?>

 <?php include "includes/header.php"; ?>
  <h1 class='text-center'>Create</h1>
    <form class="" action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input class='form-control' type="text" name="username" value="">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class='form-control' type="password" name="password" value="">
      </div>
        <input name='submit' type="submit" name="submit" value="Create User" class='btn btn-primary'>
    </form>
<?php include "includes/footer.php"; ?>
