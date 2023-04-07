<?php
include('./db_conn.php');

$u_idx=$_POST['seq'];
$u_title = $_POST['utitle'];
$u_name= $_POST['uname'];
$u_school= $_POST['uschool'];
$u_content= $_POST['ucontent'];

$query = "select * from board where seq=$u_idx";
$result = mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);

echo "<script> history.go(-1);</script>";


?>