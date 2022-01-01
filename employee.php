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

<h1 class="text-center  text-dark">Employee</h1>

<!-- <button class="btn btn-success "><a class="text-white text-decoration-none" href="studentregistrationform.php">Add New Teacher</a></button> -->
<br>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 ">
<table class="table table-striped table-bordered text-center border-secondary">
<thead class="bg-primary text-white fw-bold">
<th>     Name          </th>
<th>     class         </th>
<th>     age           </th>
<th>     gender        </th>
<th>     DOB           </th>
<th>     Status        </th>
<th>     Image         </th>
<!-- <th colspan="2">Actions</th>
 -->
</thead>

<tbody  id="response">
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');



$q = "SELECT * FROM users";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
?>


<tr>
<td class="text-secondary fw-bold"> <?php echo $result['name']; ?>  </td>
<td class="text-secondary fw-bold">     <?php echo $result['class']; ?> </td>
<td class="text-secondary fw-bold">     <?php echo $result['age']; ?>   </td>
<td class="text-secondary fw-bold"> <?php echo $result['gender']; ?>    </td>
<td class="text-secondary fw-bold"> <?php echo $result['dob']; ?>   </td>
<td class="text-secondary fw-bold"> <?php echo $result['status']; ?>    </td>
<td class="text-secondary fw-bold"> <img src="<?php echo $result['image'];?>"    width="50" height="50" >   </td>
<!-- <td>
<button class="btn btn-success"><a  href="updateall.php?Id=<?php echo $result['Id']; ?>" class="text-white text-decoration-none"> Edit </a> </button>
<button class="btn btn-danger"> <a href="deleteteacher.php?Id=<?php echo $result['Id']; ?>" class="text-white text-decoration-none" > Delete </a> </button>     </td> -->

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
</div>
</div>

    <!-- /.content-wrapper-->
 
 <?php 
 include 'footer.php';

 ?>








