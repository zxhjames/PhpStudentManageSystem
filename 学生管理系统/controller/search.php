<?php 
//搜索，还没写完
	session_start();
	include "Conn.php";
	$id = $_POST['id'];
	$sql = "select id,name from StuInfo where id='".$id."'";
	$res = $mysqli->query($sql);
	//拿到所有信息
	$attr = $res->fetch_all();
	//关闭连接
	$res->close();
	$mysqli->close();
 ?>