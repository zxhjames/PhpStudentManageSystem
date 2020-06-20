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
		<?php include 'controller/ShowMainTheme.php'; ?>

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