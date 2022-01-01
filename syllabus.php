<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>

<?php 
 include 'header.php';

 ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <?php

      include 'breadcrumbs.php';
      ?>

        <div class="col-lg-6 m-auto border border-secondary">
            <h5 class="text-center"><b>Courses</b></h5>
            <form method="post" id="syllabusup">
                <input type="hidden" name="Id">
                <div class="form-group">
                    <label><b>Class</b></label>
                    <select  class="form-control" id="clas" name="class_Id">
                        <option value="" disabled selected> Select class here</option>

                     
                        <?php 

include 'connection.php';

$conn = OpenCon();

$sql="SELECT * FROM class";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($result)) {
  
?>
<option value="<?= $row['Id']; ?>"> <?= $row['classname'];  ?> </option>

<?php 
} 

?>
                    </select>
                </div> <br>
                <div id="sub_drop">
                 <div class="form-group">
                    <label><b>Subject</b></label>
                    <select name="subject_Id" class="form-control" id="subject">
                        <option value="" disabled selected> Select subject here</option>
                    </select>
                </div>
                </div><br>

                <div id="syllabus">
                    <input   type="file" name="syllabus"  required>
                </div>
                <div class="text-center m-2">
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
            
        </div>
    </div>
</div>



<script type="text/javascript">
    

    $(document).ready(function(){
        $('#clas').change(function(){

            // alert("asd");

              var selectedval  = $('#clas :selected').val();

              $('#sub_drop').load('classdrop.php?class_id='+selectedval);

        });
     
    });


    // insert 

    $( "#syllabusup" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#syllabusup')); 


$.ajax
({
url: "syllabusajax.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{
      
      
},
success: function(data)
{

alert('Successfully'+data);
window.open('syllabusview.php','_self');

},

 error: function(e) 
{
                    }          
});
                  
                  
                     
return false;

});
</script>
<?php 
 include 'footer.php';

 ?>

