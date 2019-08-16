
<?php 
	$host="localhost";
	$user="root";
	$password="";
	$dbname="eb_lms";

	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn)
		echo "Unable to Connect" . mysqli_connect_error();
?>