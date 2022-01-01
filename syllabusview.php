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

<h1 class="text-center  text-dark">Course</h1>

<button class="btn btn-success "><a class="text-white text-decoration-none" href="syllabus.php">Add New Course</a></button>
<br>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 ">
<table class="table table-striped table-bordered text-center border-secondary">
<thead class="bg-primary text-white fw-bold">

<th>class</th>
<th>     File         </th>
<th>   Subject         </th>
<!-- <th>    Class       </th>
 -->
<th colspan="2">Actions</th>

</thead>

<tbody  id="response">
<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');



$q = "SELECT syllabus.file, subject.subname, class.classname FROM syllabus JOIN subject on syllabus.class_Id = subject.Id JOIN class on subject.class_Id=class.Id";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
?>


<tr>
<td class="text-secondary fw-bold">     <?php echo $result['classname']; ?> </td>
<td class="text-secondary fw-bold">  <a href="<?php echo $result['file']; ?>">view syllabus </a></td>
<td class="text-secondary fw-bold">     <?php echo $result['subname']; ?> </td>
<td>
<button class="btn btn-success"><a  href="updatecourse.php?id=<?php echo $result['classname']; ?>" class="text-white text-decoration-none"> Edit </a> </button>
<button class="btn btn-danger"> <a href="deletecourse.php?Id=<?php echo $result['classname']; ?>" class="text-white text-decoration-none" > Delete </a> </button>     </td>

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








