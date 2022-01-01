<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>

<?php 
 include 'header.php';

 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      
      <?php

      include 'breadcrumbs.php';
      ?>
      <div class="row">
        <div class="col-12">
          <h1>Blank</h1>
          <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
        </div>
      </div>
    </div>
  </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

 
  <?php 
 include 'footer.php';

 ?> 