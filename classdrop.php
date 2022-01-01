<?php 

$class_id=$_GET['class_id']; 
include 'connection.php';

$conn = OpenCon();


?>

<div class="form-group">
                    <select name="subject_Id" class="form-control" id="subject">
                       
                    

                <?php

$sql="SELECT * from subject where class_Id='$class_id'";
$result=mysqli_query($conn,$sql);


while ($row=mysqli_fetch_array($result)) {

	

	?>


	<option value="<?= $row['Id']; ?>"> <?= $row['subname'];  ?> </option>

	<?php

}

?>
</select>
                </div>











 