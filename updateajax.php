
<?php


include 'connection.php';

$Id = $_POST['Id']; 



// echo $Id;

$name = $_POST['name'];
$class = $_POST['class'];
$age = $_POST['age'];
$dob =$_POST['dob'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$password = $_POST['password'];
$files = $_FILES['image'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
$destfile = 'assests/images/'.$filename;

move_uploaded_file($filepath,$destfile);

$conn = OpenCon();


$sql = "UPDATE users SET 
name='$name',
class='$class',
age='$age',
dob='$dob',
gender='$gender',
status='$status', 
password='$password',
image='$destfile' 
where    Id='$Id'   ";
        
       

if ($conn->query($sql) === TRUE) {
    echo "record udpated";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
        
}             
?>