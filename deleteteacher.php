<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'schooldb');


$Id = $_GET['Id'];

$q ="Delete FROM users Where Id= $Id";

$query=mysqli_query($con,$q);
 header('location:teacherdata.php');

?>