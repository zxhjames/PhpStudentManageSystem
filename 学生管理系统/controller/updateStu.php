<?php 
	//Get请求如果发过来flag等于1，跳转学生基本信息页
	//如果flag等于2,跳转学生专业信息页
	//如果flag等于3,跳转学生成绩信息页
	session_start();
	$_SESSION['id'] = $_GET['id'];
	$flag = $_GET['flag'];
	if($flag==1){
		header('location:../student.php');
	}else if($flag==2){
		header('location:../schoolmsg.php');
	}else if($flag==3){
		header('location:../StudentGradeInfo.php');
	}

 ?>