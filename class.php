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
      

<div class="wrapper">
    <div class="logo"> <img src="assests/images/class.jpg" alt=""> </div>
    <div class="text-center mt-4 name"> Enter New Class </div>
    <form class="p-3 mt-3" method="POST" action="connection.php" id="classreg">
        <div class="form-field d-flex align-items-center"> <span class="fa fa-mortar-board"></span> <input type="text" name="classname"  placeholder="Enter class"> </div>
       <!--  <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input  name="password" id="pwd" placeholder="Enter Your Password"> </div> --> 
       <button class="btn mt-3" name="submit">Done</button>
    </form>
    <!-- <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="studentregistrationform.php">Sign up</a> </div> -->
</div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script>
$( "#classreg" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#classreg')); 


$.ajax({
url: "insertclass.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{


},
success: function(data)
{

alert('Successfully'+data);
// window.open('login.php','_self');

},
error: function(e) 
{
}          
});



return false;

});
</script>
 <?php 
 include 'footer.php';

 ?>





<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CLASS</title>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
</head>
<body>
<br><br><br>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12   p-5 m-auto  border border-danger bg-dark text-danger border border-2 fw-bolder">
<div>
<h1 class="text-center">Class registration </h1>
</div>
<form method="post" action="connection.php" id="classreg" enctype="multipart/form-data" >
<div class="form-group">
<label>ClassName</label>
<input class="form-control" type="text" name="classname" >
</div><br>
<div class="text-center mt-auto">
<input class="btn btn-danger btn-lg fw-bold" type="submit" name="submit" value="Done">
</div>
</form>
</div>	
</div>
</div>
> 


</body>
</html> -->