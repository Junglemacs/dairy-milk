<?php
include('dbcon.php');

$id=$_GET['id'];

$users_query = ("delete from users where user_id='$id'") or die(mysqli_connect_error());
$result = mysqli_query($conn,$users_query);

header('location:users.php');
?>