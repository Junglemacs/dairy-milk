<?php 
include('dbcon.php');

$id=$_GET['id'];
$book_id = $_GET['book_id'];

$book_query = ("update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysqli_connect_error());
$result = mysqli_query($conn,$book_query);						
 header('location:view_borrow.php');

?>	