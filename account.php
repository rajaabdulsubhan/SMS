
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Account</title>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
<style>
body{

background-image:url('assests/images/istockphoto-535695503-612x612.jpg');
background-repeat: no-repeat;
background-size: cover;
}
</style>

</head>
<body>
<br>
<div>
<h1 class="text-center  text-white bg-primary">Students Information</h1>
<hr class="bg-danger">
<button class="btn btn-success "><a class="text-white text-decoration-none" href="studentregistrationform.php">Add New Student</a></button>
<br>
<table class="table table-striped table-bordered text-center border-danger text-white bg-dark opacity-75 ">
<thead class="bg-dark text-danger fw-bold">
<th>Name    </th>
<th>class   </th>
<th>age	    </th>
<th> gender </th>
<th> DOB    </th>
<th> Status </th>
<th> Image </th>			
</thead>
<tbody  id="response">

<?php


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');



$q = "SELECT * FROM users Where status='student'";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
?>


<tr>
<td class="text-white fw-bold">	<?php echo $result['name']; ?>	</td>
<td class="text-white fw-bold"> 	<?php echo $result['class']; ?>	</td>
<td class="text-white fw-bold"> 	<?php echo $result['age']; ?>	</td>
<td class="text-white fw-bold">	<?php echo $result['gender']; ?>	</td>
<td class="text-white fw-bold">	<?php echo $result['dob']; ?>	</td>
<td class="text-white fw-bold">	<?php echo $result['status']; ?>	</td>
<td class="text-white fw-bold">	<img src="<?php echo $result['image'];?>"	 width="50" height="50" >   </td>



	
</tr>


<?php
}
}




?>


				
</tbody>
</table>

</div>
</body>
</html>