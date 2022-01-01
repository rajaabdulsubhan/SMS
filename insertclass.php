<?php


include 'connection.php';

$classname = $_POST['classname'];

  $conn = OpenCon();


             $sql = "INSERT INTO class (classname)
            VALUES ('$classname')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New class inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          
                    
?>
