<!--获得学生的专业信息-->

<?php 
	session_start();
	$mysql_conf = array(
    'host'    =>'127.0.0.1:3306',
    'db'      =>'Student',
    'db_user'=>'root',
    'db_pwd' =>'123456',
    );
    //获得连接
	$mysqli=new mysqli($mysql_conf['host'],$mysql_conf['db_user'],$mysql_conf['db_pwd']);
	//选择数据库
	$mysqli->select_db($mysql_conf['db']);
	//查询语句
	

	$mysqli->query("set names 'utf8';");//编码转换,防止乱码出现

	//获取学生所有的专业信息
	$sql = "select * from StuMajor where id = '".$_SESSION['id']."'";
	// echo $sql;
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();
	foreach ($attr as $key) {
		# code...
	}
	$res->close();
	$mysqli->close();
	
 ?>