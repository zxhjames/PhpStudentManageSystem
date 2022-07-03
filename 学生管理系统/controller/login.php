<?php 
	//验证登录
	session_start();
	//POST传值
	$uid = $_POST['id'];
	$pwd = $_POST['pwd'];
	
	// $mysql_conf = array(
	// 	'host'    =>'127.0.0.1:3306',
	// 	'db'      =>'stusys',
	// 	'db_user'=>'root',
	// 	'db_pwd' =>'123456',
	// );
	// $mysqli=new mysqli($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd'],$mysql_conf['db']);
	// global $mysqli;
	// if($mysqli->connect_errno){
	// 	die("could not connect to the database:\n" . $mysqli->connect_errno);//诊断连接错误
	// }
	// $mysqli->query("set names 'utf8';");//编码转换
	// $select_db = $mysqli->select_db($mysql_conf['db']);
	// if(!$select_db){
	// 	die("could not connect to the db:/n" . $mysql->error);
	// }
	include "Conn.php";
	//查询登录名和密码匹配
	$sql = "select * from login where id='".$uid."' and pwd = '".$pwd."'";
	//查询结果集
	$result = $mysqli->query($sql);
	if(mysqli_num_rows($result)>0){
		//存储session并跳转
		$_SESSION['uid'] = $uid;
		header('location:../Main.php?page=1');	
		//跳转到主页面
	}else{
		//注册
		header('location:../regist.html');
	}
	$result->close();
	$mysqli->close();


 ?>