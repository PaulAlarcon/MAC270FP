<?php
  include 'sections/operations.php';
  $Gid = $op->getGid();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Extra Credit</title>

  <!-- importing style sheets -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <!-- header started -->
  <?php include 'sections/header.php'; ?>
  <!-- header ended -->

  <!-- main body started -->
  <div class="container-fluid" id="body">
    <div class="card">
      <!-- form started with method 'post', action 'post.php' and enctype 'multipart/form-data' for file upload -->
      <form class="card-body" method="post" action="sections/post.php" enctype="multipart/form-data">
        <div class="row">
          <!-- left column started -->
          <?php include 'sections/left.php'; ?>
          <!-- left column ended -->

          <!-- right column started -->
          <?php include 'sections/right.php'; ?>
          <!-- right column ended -->
        </div>

        <hr><!-- Horizontal line -->

        <!-- File Upload Section Started -->
        <?php include 'sections/upload.php'; ?>
        <!-- File Upload Section Ended -->
        <hr>
        <!-- Button Section -->
        <div class="row">
          <div class="col-sm-12">
            <button type="submit" id="btn_save">Save</button>
            <button type="reset">Clear</button>
          </div>
        </div>
      </form>
      <!-- form ended -->
    </div>
  </div>
  <!-- main body ended -->

  <!-- importing javascript files -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>