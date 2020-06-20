<?php 
	//显示所有成绩
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
	//多表查询
	$sql = "select StuClass.cname,StuScore.score from StuClass,StuScore where StuClass.cid = StuScore.cid and StuScore.sid = '".$_SESSION['id']."'";
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();
	foreach ($attr as $key) {
		# code.
	}
	$res->close();
	$mysqli->close();
 ?>