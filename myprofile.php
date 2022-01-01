<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>My Profile</title>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
</head>
<body>
<div>
	
<h1 class="text-center  text-dark">Weclome</h1>

<br>

<table class="table table-striped table-bordered text-center border-danger ">
<thead class="bg-dark text-danger fw-bold">

<th>      Name         </th>
<th>      class        </th>
<th>      age          </th>
<th>      gender       </th>
<th>      DOB          </th>
<th>      Status       </th>
<th>      Syllabus     </th>
<th>      Image        </th>


</thead>

<tbody  id="response">

<?php


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');



$q = "SELECT * FROM users  Where status='student'";


$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
?>


<tr>
<td class="text-danger fw-bold">	<?php echo $result['name']; ?>	                                        </td>
<td class="text-danger fw-bold"> 	<?php echo $result['class']; ?>	                                        </td>
<td class="text-danger fw-bold"> 	<?php echo $result['age']; ?>	                                        </td>
<td class="text-danger fw-bold">	<?php echo $result['gender']; ?>                                        </td>
<td class="text-danger fw-bold">	<?php echo $result['dob']; ?>	                                        </td>
<td class="text-danger fw-bold">	<?php echo $result['status']; ?>                                        </td>
<td class="text-danger fw-bold">	<?php echo $result['file']; ?>	                                        </td>
<td class="text-danger fw-bold">	<img src="<?php echo $result['image'];?>"	 width="50" height="50" >   </td>
	
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