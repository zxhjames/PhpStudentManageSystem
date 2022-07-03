<!--用于删除主页面的某个学生名单 -->
<?php 
	include 'Conn.php';
	$id = $_GET['id'];
	$sql = "delete from StuInfo where id= '".$id."'";
	$res = $mysqli->query($sql);
	mysqli_close($result);
	$mysqli->close();
	header('location:../Main.php');
 ?>