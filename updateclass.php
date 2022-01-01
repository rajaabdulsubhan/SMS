<?php
include 'connection.php';

$Id=$_GET['Id'];



$conn = OpenCon();

$sql = "SELECT * FROM class where Id='$Id'";

$data=mysqli_query($conn,$sql);

while($result = mysqli_fetch_array($data)){

$Id= $result['Id'];

$classname = $result['classname'];



}


CloseCon($conn);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>UpdateCLASS</title>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12   p-5 m-auto  border border-danger bg-dark text-danger border border-2 fw-bolder">
<div>
<h1 class="text-center">Class Update </h1>
</div>
<form method="post" action="connection.php" id="classupdate" enctype="multipart/form-data" >
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<div class="form-group">
<label>ClassName</label>
<input class="form-control" type="text" name="classname" value="<?php echo $classname; ?>">
</div><br>
<div class="text-center mt-auto">
<input class="btn btn-danger btn-lg fw-bold" type="submit" name="submit" value="Update">
</div>
</form>
</div>  
</div>
</div>

<script>
$( "#classupdate" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#classupdate')); 


$.ajax({
url: "updateclassajax.php",
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
window.open("viewclasses.php");


},
error: function(e) 
{
}          
});



return false;

});
</script> 
</body>
</html>