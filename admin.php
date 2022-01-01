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
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Employees</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="employee.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">CLASSES</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewclasses.php">
              <span class="float-left">view details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">Sujects</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="subjectview.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">Course</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="syllabusview.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div> 
      <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-clock-o"></i>
              </div>
              <div class="mr-5">Attendance</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="syllabusview.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div> 
      
    <!-- /.content-wrapper-->
   <?php 
 include 'footer.php';

 ?>

