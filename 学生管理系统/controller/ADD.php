<?php 
	//接收表单数据，增加一个新的学生信息
	session_start();
	$id = $_POST['id'];
	$pwd = $_POST['pwd'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];
	$birthday = $_POST['birthday'];
	$mingzu = $_POST['mingzu'];
	$mianmao = $_POST['mianmao'];
	$pid = $_POST['pid'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$qq = $_POST['qq'];


	$xueli = $_POST['xueli'];
	$xuezhi = $_POST['xuezhi'];
	$menlei = $_POST['menlei'];
	$major = $_POST['major'];
	$faculty = $_POST['faculty'];
	$cla = $_POST['class'];

	$os = $_POST['os'];
	$ds = $_POST['datastruct'];
	$lib = $_POST['lib'];
	$cn = $_POST['cn'];
	$co = $_POST['component'];
	$net = $_POST['netsecurity'];
	$soft = $_POST['soft'];
	$arr = array($os,$ds,$co,$cn,$lib,$net,$soft);



	include 'Conn.php';
	//先去看数据库的数据是否已经存在
	$sql = "select id from StuInfo where id = '".$id."'";
	$res = $mysqli->query($sql);
	$attr = $res->fetch_all();
	foreach ($attr as $key) {}
	// echo $sql." ".$res;

	if($key[0] == $id){
		//跳转到404
		$res->close();
		$mysqli->close();
		header('location:error.php');	
	}else{
		//开始插入数据
		//向三张表插入数据
		$sql1 = "insert into login values('".$id."','".$pwd."');";
		$res = $mysqli->query($sql1);

		$sql2 = "insert into StuInfo values('".$id."','".$name."','".$sex."','".$mingzu."','".$birthday."','".$mianmao."','".$pid."','".$phone."','".$mail."','".$qq."');";
		$res = $mysqli->query($sql2);

		$sql3 =  "insert into StuMajor values('".$id."','".$xueli."','".$xuezhi."','".$menlei."','".$major."','".$faculty."','".$cla."');";

		$res = $mysqli->query($sql3);

		//批量插入成绩

		for ($i=0; $i < 7; $i++) { 
			$sql4 = "insert into StuScore values('".$id."','".($i+1)."','".$arr[$i]."');";
			$res = $mysqli->query($sql4);
		}
		//关闭资源
		mysqli_close($res); 
		$mysqli->close();
	 	header('location:../Main.php?page=1');
	 		
	}





 ?>