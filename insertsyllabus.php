<?php


include 'connection.php';

// $syllabusname = $_POST['syllabusname'];

$files = $_FILES['file']['name'];
$files = $_FILES['file'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
    $destfile = 'assests/syllabus/'.$filename;
    // echo"$destfile";
    move_uploaded_file($filepath,$destfile);
    $conn = OpenCon();


             $sql = "INSERT INTO syllabus (file)
            VALUES ('$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>

