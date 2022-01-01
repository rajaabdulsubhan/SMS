
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
      

<!-- registration -->

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 p-2 m-auto   text-dark border border-2 fw-bolder shadow-lg  rounded" style=" background: #ecf0f3; border-radius: 15px;
     box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff; ">
            <div>
                <h1 class="text-center ">Registraion</h1>
            </div>
            <form method="post" action="connection.php" id="registraion" enctype="multipart/form-data">
                <div class="form-group">
                <label><b>Name</b></label>
                <input class="form-control" type="text" name="name" required>
            </div><br>
            
                <div class="form-group">
                <label><b>Class</b></label>
                <input class="form-control" type="text" name="class" >
            </div><br>
            
                <div class="form-group">
                <label><b>Age</b></label>
                <input class="form-control" type="age" name="age" required>
            </div><br>
            <div class="form-group">
                <label><b>Date Of Birth</b></label>
                <input class="form-control" type="date" name="dob" required>
            </div><br>
            <div class="form-group">
<label><b>Gender</b></label>
<input  type="radio" name="gender" value="male" >&nbsp;<b>Male</b> &nbsp;&nbsp;
<input type="radio" name="gender" value="female" > &nbsp;<b>Female</b> 
</div><br>
<div class="form-group">
<label><b>Status</b></label>
<input  type="radio" name="status" value="teacher" >&nbsp; <b>Teacher</b>&nbsp;&nbsp;
<input type="radio" name="status" value="student" >&nbsp;<b>Student</b> 
</div><br>
            <div class="form-group">
                <label><b>Password</b></label>
                <input class="form-control" type="number" name="password" required>
            </div><br>
            <div>
<input   type="file" name="image" required>
</div><br>
           
            
            <div class="text-center mt-auto">
            <input class="btn btn-primary btn-lg fw-bold" type="submit" name="submit" value="Register">
            </div>
            
            </form>
        </div>
    </div>
</div>


<!-- end -->


  <script>
$( "#registraion" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#registraion')); 


$.ajax
({
url: "insert.php",
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
window.open('index.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script> 
  <!-- /.content-wrapper-->
 
 <?php 
 include 'footer.php';

 ?>
