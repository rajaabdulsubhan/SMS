<?php


include 'connection.php';

$Id = $_POST['Id']; 

$classname = $_POST['classname'];


$conn = OpenCon();


$sql = "UPDATE class SET 
classname='$classname'
where    Id='$Id' ";



if ($conn->query($sql) === TRUE) {
echo "record udpated";

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);


?>