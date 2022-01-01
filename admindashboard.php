
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger ">
<a class="navbar-brand text-white" href="#"><b>SchoolManagementSystem</b></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ">
<li class="nav-item active">
<a class="nav-link text-white" href="admindashboard.php">Home</a>
</li>
<li class="nav-item ">
<a class="nav-link text-white" href="studentdata.php">Students</a>
</li>
<a class="nav-link text-white" href="teacherdata.php">Teachers</a>
</li>
<li class="nav-item">
<a class="nav-link text-white" href="viewclasses.php">Classes</a>
</li>
<li class="nav-item">
<a class="nav-link text-white" href="subjectview.php">Subjects</a>
</li>
<li class="nav-item">
<a class="nav-link text-white" href="#">Syllabuus</a>
</li>

<li>
<a   class="nav-link text-white" href="logout.php">Logout</a>
</li>
</ul>
</div>
</nav>
  
<h1 class="text-center text-white bg-primary">Admin dashboard</h1>

<hr class="bg-danger">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 ">
<div class="card bg-danger">
<div class="card-body">
<h4 class="card-title text-center text-white" ><b>Employee Panel</b></h4>
<p class="card-text text-center text-white">View All of Employee</p>
<div class="text-center justify-space-between text-white">
<button class="btn btn-primary"> <a href="studentregistrationform.php" class="card-link text-white text-decoration-none">Registeration</a></button> 
<button class="btn btn-primary"> <a href="teacherdata.php" class="card-link  text-white text-decoration-none">View Teacher Info</a></button>
<button class="btn btn-primary"> <a href="studentdata.php" class="card-link  text-white text-decoration-none">View Students Info</a></button> 
</div>
</div>
</div>
</div>		
</div>
</div>
<br>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 ">
<div class="card bg-danger text-white" >
<div class="card-body">
<h4 class="card-title text-center"><b>Subjects</b></h4>
<p class="card-text text-center">View ALL Subjects info here</p>
<div class="text-center">
<button class="btn btn-primary "> <a href="subject.php" class="card-link text-white text-decoration-none">Registeration</a></button> 
<button class="btn btn-primary"> <a href="subjectview.php" class="card-link text-white text-decoration-none">View Subjects</a></button>  
</div>
</div>
</div>
</div>
</div>
</div>

<br>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 " >
<div class="card bg-danger text-white" >
<div class="card-body">
<h4 class="card-title text-center"><b>Class</b></h4>
<p class="card-text text-center">View All classes</p>
<div class="text-center">
<button class="btn btn-primary"> <a href="class.php" class="card-link text-white text-decoration-none">Registration</a></button>
<button class="btn btn-primary"> <a href="viewclasses.php" class="card-link text-white text-decoration-none">View Class</a></button> 
</div> 
</div>
</div>
</div>
</div>
</div>
<br>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 " >
<div class="card bg-danger text-white" >
<div class="card-body">
<h4 class="card-title text-center"><b>Syllabus</b></h4>
<p class="card-text text-center">View All Syllabus</p>
<div class="text-center">
<button class="btn btn-primary"> <a href="syllabus.php" class="card-link text-white text-decoration-none">Registration</a></button>
<button class="btn btn-primary"> <a href="viewsyllabus.php" class="card-link text-white text-decoration-none">View Syllabus</a></button> 
</div> 
</div>
</div>
</div>
</div>
</div>


</body>
</html>