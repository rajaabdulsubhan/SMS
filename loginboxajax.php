<!-- <?php 
require_once('connection.php');
session_start();
    if(isset($_POST['submit']))
    {
       if(empty($_POST['Id']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where Id='".$_POST['Id']."' and Pass='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['users']=$_POST['Id'];
                header("location:admindashboard.php");
            }
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?> -->