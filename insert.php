<?php


include 'connection.php';


$name = $_POST['name'];
$class = $_POST['class'];
$age = $_POST['age'];
$dob =$_POST['dob'];
$gender = $_POST['gender'];
$status = $_POST['status'];
$password = $_POST['password'];
$img = $_FILES['image']['name'];
$files = $_FILES['image'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
    $destfile = 'assests/images/'.$filename;
    // echo"$destfile";
    move_uploaded_file($filepath,$destfile);
    $conn = OpenCon();


             $sql = "INSERT INTO users (name,class,age,dob,gender,status,password,image)
            VALUES ('$name','$class' ,'$age','$dob' ,'$gender','$status','$password','$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>
