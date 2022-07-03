<!--用来显示所有学生的信息-->
<!DOCTYPE html>
<html>
<head>
	<title>学生名单首页</title>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body >
<p align="right"><a href="index.html">登出</a></p>
<div class="login">
	<div class="content clearfix">
		<?php 
			//显示主页内容
			session_start();
			$mysql_conf = array(
			'host'    =>'127.0.0.1:3306',
			'db'      =>'stusys',
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

		<h1 align="center">学生名单列表</h1>
		
		<form action="POST" action="../controller/search.php">
		<center>
				寻找:<input name="id" type="text" placeholder="输入学号查找学生">&nbsp;
					<input type="submit" name="" value="寻找">
		</center>
		</form>


		<center><table border="1px" align="center" cellpadding="0" cellspacing="0" style="border-color: red ;align-content: center;">
			<?php 
				foreach ($attr as $key ) {
					echo "<tr><th>".$key[0]."</th><th>".$key[1]."</th>";
				    echo "<th><a href='controller/updateStu.php?id=".$key[0]."&flag=1'>个人信息</a></th>";
				    echo "<th><a href='controller/updateStu.php?id=".$key[0]."&flag=2'>学籍信息</a></th>";
				    echo "<th><a href='controller/updateStu.php?id=".$key[0]."&flag=3'>成绩信息</a></th>";
					echo "<th><a href='controller/DeleteStu.php?id=".$key[0]."''>删除该学生</a></th></tr>";
				}
			 ?>	
		</table>
		<p>
			<?php
				$page = $_GET['page'];
				echo "<a href='controller/fenye.php?page=".$page."&flag=up'>上一页</a>&nbsp&nbsp$nbsp";
				for ($i=1; $i<=7 ; $i++) { 
					# code...
					echo "<a href='Main.php?page=".$i."'>".$i."</a>&nbsp&nbsp$nbsp";
				}
				echo "<a href='controller/fenye.php?page=".$page."&flag=down'>下一页</a>&nbsp&nbsp$nbsp";

			 ?>
		</p>
		</center>
		<h3 align="center"><a href="controller/addStuInfo.php">增加学生</a></h3>
	
	</div>
</div>
</body>
</html>