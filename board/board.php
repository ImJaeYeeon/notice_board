<?php
include('./db_conn.php');

$_title=$_POST['utitle'];
//echo "제목:".$_title;

$_name=$_POST['uname'];
//echo "이름:".$_name;

$_school=$_POST['uschool'];
//echo "학교명명:".$_school;

$_content=$_POST['ucontent'];
//echo "내용:".$_content;


$query = "insert into board(utitle,uname,uschool,ucontent) 
value('$_title','$_name','$_school','$_content')";
mysqli_query($conn,$query);
echo "<script>alert('작성되었습니다.');</script>";
?>
<meta http-equiv="refresh" content="0; url=http://localhost/board/index.php">