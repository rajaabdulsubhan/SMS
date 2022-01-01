<div class="container">
<h2 style="text-align:center;">Syllabus</h2>
<form id="regform" method="post">
<label for="class">Subject:</label>
<select  class="form-control" name="subject.Id" id="class_ID">

<!-- <option disabled="" selected="">Select Class</option> -->

<?php include 'connection.php';
$conn = OpenCon();

$q = "SELECT * FROM subject where Id= $Id";
$records = mysqli_query($conn, $q);

while ($result = mysqli_fetch_array($records) ) { ?>


<option value="<?php echo $result['Id']; ?>"  ><?php echo $result['subname']; ?></option>



<?php



}

?>

</select>
</form>
</div>
<script>
$( "#regform" ).submit(function( event ) {



// alert("submitted");
var form_data = new FormData(document.querySelector('#regform')); 


$.ajax({
url: "insertsyllabus.php",
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

alert(data);


},
error: function(e) 
{
}          
});



return false;

});

</script>