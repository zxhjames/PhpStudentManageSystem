<?php 
	//分页算法
	
	session_start();
	include '../model/Conn.php';

	$page = $_GET['page'];
	//分页算法
	$flag = $_GET['flag'];
	if($flag=='up'){
		$page = $page==1?$page:$page-1;
		$sql = "select id,name from StuInfo limit ".(($page-1)*7).",".$page*7;
			
	}
	if($flag=='down'){
		$page = $page+1;
		$sql = "select id,name from StuInfo limit ".(($page-1)*7).",".$page*7;
	}
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();

	$res->close();
	$mysqli->close();
	header('location:../Main.php?page='.$page);	
 ?>