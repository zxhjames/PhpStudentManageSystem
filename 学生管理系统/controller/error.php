<?php 
	//用于检测数据库是否有一个相同的用户名
	echo "用户名已经存在,3s后跳转回主页面";
	header("Refresh:3;url=../Main.php?page=1");
 ?>