<?php include "db.php";
      include "functions.php";
 ?>

<?php include "includes/header.php"; ?>
  <div class="container">
    <div class="small-sm-6">
      <h1 class='text-center'>User List</h1>
      <pre>  <?php readUsers(); ?>  </pre>
    </div>
  </div>
<?php include "includes/footer.php"; ?>
