<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成绩信息</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/punishment.css">
</head>
<body>
    <?php include 'controller/showAllScore.php' ?>
    <div class="container">
        <div class="content">
            <div class="header clearfix">
                <div class="top fl">当前位置>成绩信息</div>
                <div class="bottom fr">
                    <!-- <a id="emit" href="javascript:;">编辑</a> -->
                    <!-- <a id="keep" href="javascript:;">保存</a> -->
                    <input type="submit" name="查询">
                </div>
            </div>
            <div class="main">
                <!--基础信息-->
                <div class="BasicInformation">
                    <div class="title">基础信息</div>
                </div>
                <div class="content clearfix">
                    <div class="left fl">
                        <div>
                            <!-- <label for="">查询成绩：</label> -->
                            <input type="text" value="" name="search" placeholder="请输入学号查询">
                           
                        </div>
                    </div>
                
                    <div class="reason fl">
                       <table width="300px" height="100px" border="1px">
                       <?php 
                            foreach ($attr as $key) {
                                echo "<tr><th>".$key[0]."</th><th>".$key[1]."</th></tr>";
                            }
                        ?>
                 
                       </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
	<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$('#emit').on('click',function(){
        	$('input').removeAttr('disabled');
        	$('textarea').removeAttr('disabled');
        });
        $('#keep').on('click',function(){
        	$('input').attr('disabled','disabled');
        	$('textarea').attr('disabled','disabled');
        });
	</script>

    <script>
			
    </script>
</body>
</html>