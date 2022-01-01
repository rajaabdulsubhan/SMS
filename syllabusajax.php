<?php 

include 'connection.php';

$class_id = $_POST['class_Id'];
$subject_Id = $_POST['subject_Id'];




$files = $_FILES['syllabus']['name'];
$files = $_FILES['syllabus'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
    $destfile = 'assests/syllabus/'.$filename;
    // echo"$destfile";
    move_uploaded_file($filepath,$destfile);
    $conn = OpenCon();


             $sql = "INSERT INTO syllabus (file,subject_Id,class_Id)
            VALUES ('$destfile','$class_id','$subject_Id')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Course Inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    






  ?>