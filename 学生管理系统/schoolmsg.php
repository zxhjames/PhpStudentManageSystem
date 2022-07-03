<!DOCTYPE html>
<html lang="en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>学籍信息</title>
	<link rel="stylesheet" href="css/common.css" >
	<link rel="stylesheet" href="css/school-msg.css">
	
</head>
<body>
	<?php
		include 'controller/GetStuMajor.php';
	?>
	<form action="controller/SaveStuMajor.php" method="post">
	<div class="school-msg">
		<div class="pos-set wrap">
			<span>当前位置>学籍信息</span>
			<p>
				<input type="button" name="emit" id="emit" value="编辑">
				<input type="submit" name="keep" value="保存">
			</p>
		</div>
		<div class="basics-msg">
			<p>专业信息</p>
		</div>

		<div class="basics-list">
			<ul class="clearfix">
				<li>
					<label for="">学历 :</label>
					<div class="inp-border">
						<input type="text" name="xueli"
						value="<?php echo $key[1]?>" 
						disabled>
					</div>
				</li>
				<li>
					<label for="">学制 :</label>
					<div class="inp-border">
						<input type="text" name="xuezhi" value="<?php echo $key[2] ?>" disabled>
					</div>
				</li>
				<li>
					<label for="">学科门类 :</label>
					<div class="inp-border">
						<input type="text" name="menlei" value="<?php echo $key[3] ?>" disabled>
					</div>
				</li>
				<li>
					<label for="">专业名称 :</label>
					<div class="inp-border">
						<input type="text" name="major" value="<?php echo $key[4] ?>"   disabled>
					</div>
				</li>
				<li>
					<label for="">所在院系 :</label>
					<div class="inp-border">
						<input type="text" name="faculty"
						value="<?php echo $key[5] ?>" disabled>
					</div>
				</li>
				<li>
					<label for="">所在班级 :</label>
					<div class="inp-border">
						<input type="text" name="class" 
						value="<?php echo $key[6] ?>" disabled>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
	</form>
	<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$('#emit').on('click',function(){
        	$('input').removeAttr('disabled');
        });
        $('#keep').on('click',function(){
        	$('input').attr('disabled','disabled');
        });
	</script>
</body>
</html>