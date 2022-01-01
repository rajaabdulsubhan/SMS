
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update course </title>
</head>
<body>
<div id="sub_drop">
                 <div class="form-group">
                    <label><b>Subject</b></label>
                    <select name="subject_Id" class="form-control" id="subject">
                        <option value="" disabled selected> Select subject here</option>
                    </select>
                </div>
                </div><br>

                <div id="syllabus">
                    <input   type="file" name="syllabus"  required>
                </div>
                <div class="text-center m-2">
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
            
        </div>
    </div>
</div>
<script>
$( "#syllabusup" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#syllabusup')); 


$.ajax({
url: "updatesyllabusview.php",
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
window.open("updatecourse.php");


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
      

      <?php
include 'connection.php';

$Id=$_GET['Id'];



$conn = OpenCon();

$sql = "SELECT syllabus.file, subject.subname, class.classname FROM syllabus JOIN subject on syllabus.class_Id = subject.Id JOIN class on subject.class_Id=class.Id";

$data=mysqli_query($conn,$sql);

while($result = mysqli_fetch_array($data)){

    $subject_Id = $result['subject_Id'];
$class_Id = $result['class_Id'];
$file = $result['file'];




}


CloseCon($conn);


?>
<?php


    $con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');



$q = "SELECT *  FROM subject where Id=Id";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
 	?>


<tr>
	
	<!-- <td class="text-secondary fw-bold"> 	<?php echo $result['classname']; ?>	</td> -->
	<td class="text-secondary fw-bold"> 	<?php echo $result['subname']; ?>	</td>
	<td><a class="btn btn-success" href="updatesubject.php?Id=<?php echo $result['Id']; ?>"> Edit </a> 
		<button class="btn btn-danger"> <a href="deletesubject.php?Id=<?php echo $result['Id']; ?>" class="text-white text-decoration-none" > Delete </a> </button>  	</td>
	
</tr>


 	<?php
 	}
 }




?>


				
			</tbody>
		</table>
	
	
</div>
</div>
</div>

    <!-- /.content-wrapper-->
 
 <?php 
 include 'footer.php';

 ?>


