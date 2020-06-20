<?php 
	//显示主页内容
	session_start();
	$mysql_conf = array(
    'host'    =>'127.0.0.1:3306',
    'db'      =>'Student',
    'db_user'=>'root',
    'db_pwd' =>'123456',
    );
	$mysqli=new mysqli($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);
	if($mysqli->connect_errno){
	    die("could not connect to the database:\n" . $mysqli->connect_errno);//诊断连接错误
	}
	$mysqli->query("set names 'utf8';");//编码转换
	$select_db = $mysqli->select_db($mysql_conf['db']);
	if(!$select_db){
	    die("could not connect to the db:/n" . $mysql->error);
	}

	//分页算法
	$page = $_GET['page'];
	//分页算法
	$sql = "select id,name from StuInfo limit ".(($page-1)*7).",".$page*7;
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();

	$res->close();
	$mysqli->close();
 ?>