<?php 
	session_start();
	//保存学生的专业情况
	$id = $_SESSION['id'];
	$xueli = $_POST['xueli'];
	$xuezhi = $_POST['xuezhi'];
	$menlei = $_POST['menlei'];
	$major = $_POST['major'];
	$faculty = $_POST['faculty'];
	$class = $_POST['class'];
	include '../model/Conn.php';
	$sql = "update StuMajor set xueli = '".$xueli."',xuezhi='".$xuezhi."',menlei='".$menlei."',major='".$major."',faculty='".$faculty."',class='".$class."' where id='".$id."'";

	// echo $sql;
	$result = $mysqli->query($sql);
	// if($result){
	mysqli_close($result);
	$mysqli->close();
	header('location:../schoolmsg.php');
	// }
 ?>