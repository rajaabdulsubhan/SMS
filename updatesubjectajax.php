<?php


include 'connection.php';

$Id = $_POST['Id']; 

$subname = $_POST['subname'];


$conn = OpenCon();


$sql = "UPDATE subject SET 
subname='$subname'
where    Id='$Id' ";
        
       

if ($conn->query($sql) === TRUE) {
    echo "record udpated";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
        
            
?>