<?php include "db.php";
      include "functions.php";

      if(isset($_POST['submit'])){
        deleteUsers();
      }

 ?>

<?php include "includes/header.php"; ?>
  <h1 class='text-center'>Delete</h1>
    <form class="" action="login_delete.php" method="post">
      <div class="form-group">
        <select name='id' id=''>
          <?php fetchUsers(); ?>
        </select>
      </div>
      <input name='submit' type="submit" name="submit" value="Delete User" class='btn btn-primary'>
    </form>
<?php include "includes/footer.php"; ?>
