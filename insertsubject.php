<?php


include 'connection.php';

$subname = $_POST['subname'];
$classId = $_POST['class_Id'];

  $conn = OpenCon();


             $sql = "INSERT INTO subject (subname ,class_Id)
            VALUES ('$subname','$classId')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New class inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          
                    
?>
