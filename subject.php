
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
    <div class="logo"> <img src="assests/images/subject.png" alt=""> </div>
    <div class="text-center mt-4 name"> Enter New Subjects </div>
    <form class="p-3 mt-3" method="POST" action="connection.php" id="subjectreg">
        <div class="form-field d-flex align-items-center"> <span class="fa fa-book"></span> <input type="text" name="subname"  placeholder="Enter Subjects"> </div>
        <form class="p-3 mt-3" method="POST" action="connection.php" id="subjectreg">
        <select  class="form-control" id="clas" name="class_Id">
                        <option value="" disabled selected> Select class here</option>

                     
                        <?php 

include 'connection.php';

$conn = OpenCon();

$sql="SELECT * FROM class";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
  
?>
<option value="<?= $row['Id']; ?>"> <?= $row['classname'];  ?> </option>

<?php 
} 

?>
                    </select> 
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
$( "#subjectreg" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#subjectreg')); 


$.ajax({
url: "insertsubject.php",
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



<!-- <div class="col-lg-8 col-md-8 col-sm-12   p-5 m-auto  border border-danger bg-dark text-danger border border-2 fw-bolder">
<div>
<h1 class="text-center">Subjects registration </h1>
</div>
<form method="post" action="connection.php" id="subjectreg" enctype="multipart/form-data" >
<div class="form-group">
<label>SubjectName</label>
<input class="form-control" type="text" name="subname" >
</div><br>
<div class="text-center mt-auto">
<input class="btn btn-danger btn-lg fw-bold" type="submit" name="submit" value="Done">
</div> -->
<!-- </div>	 -->
 

 <?php 
 include 'footer.php';

 ?>
