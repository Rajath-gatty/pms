<?php 
include("connection.php");
$id = $_GET['id'];

$sql = "delete from parking where id='$id'";
$res = mysqli_query($con,$sql);
header('Loation:index.php');
?>