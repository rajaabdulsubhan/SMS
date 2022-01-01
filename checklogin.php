<?php session_start();
 if (isset($_SESSION['Id'])) {
 	echo "0";
 }else
{
	echo "1";
}



?>