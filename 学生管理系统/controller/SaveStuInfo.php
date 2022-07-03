<!--保存用户基本学籍信息-->
<?php 
	session_start();
	$uname = $_POST['stu_name'];
	$sex = $_POST['stu_sex'];
	$birthday = $_POST['birthday'];
	$idNum = $_POST['idNumber'];
	$id = $_POST['xstu_id'];
	$mingzu = $_POST['national_born'];
	$mianmao = $_POST['national_name'];
	$phone = $_POST['phone'];
	$qq = $_POST['qq'];
	$email = $_POST['e_mail'];
	include 'Conn.php';
	$sql = "update StuInfo set name = '".$uname."',sex = '".$sex."',mingzu='".$mingzu."',birthday='".$birthday."',pid='".$idNum."',mingzu='".$mingzu."',mianmao='".$mianmao."',phone='".$phone."',qq='".$qq."',mail='".$email."' where id='".$id."'";
	// echo $sql;
	// 执行语句
	$result = $mysqli->query($sql);

	// if($result){
		//保存成功后跳转
	mysqli_close($result);
	$mysqli->close();
	header('location:../student.php');
	// }

 ?>