<?php 
	//验证登录
	session_start();
	//POST传值
	$uid = $_POST['id'];
	$pwd = $_POST['pwd'];
	include "Conn.php";
	//查询登录名和密码匹配
    $sql = "insert into login(id,pwd) values('".$uid."','".$pwd."');";
	//查询结果集
	$result = $mysqli->query($sql);
    $cnt = mysqli_num_rows($result);
	if($cnt>0){
		//存储session并跳转
		$_SESSION['uid'] = $uid;
		header('location:../Main.php?page=1');	
		//跳转到主页面
	}else{
		//注册
		header('location:../index.html');
	}
    mysqli_close($result); 
	$mysqli->close();
 ?>