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
      

	<div>
	
		<h1 class="text-center  text-dark">Subject Information</h1>
	
	<button class="btn btn-success "><a class="text-white text-decoration-none" href="subject.php">Add New Subject</a></button>
	<br>
		<table class="table table-striped table-bordered text-center border-secondary ">
			<thead class="bg-primary text-white fw-bold">
				<!-- <th> class_Id</th> -->
				
				<th>Subject</th>
				
				<th colspan="2">Actions</th>
				
			</thead>

			<tbody  id="response">

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


