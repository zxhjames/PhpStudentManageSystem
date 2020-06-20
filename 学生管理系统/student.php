<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>个人信息</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/student.css">
    <script src="js/jquery-1.9.1.min.js"></script>
</head>
<body>


    <?php 
        include 'controller/GetStuInfo.php';
        header("Content-Type:text/html;charset=utf-8");
     ?>

    <form method="post" action="controller/SaveStuInfo.php">
    <div class="container">
        <div class="content">
            <div class="header clearfix">
                <div class="top fl">当前位置>个人信息</div>
                <div class="bottom fr">
                    <!-- <a id="emit" href="javascript:;">编辑</a> -->
                    <input type="button" value="编辑" id="emit">
                    <input type="submit" value="保存" id="sub">
                </div>
            </div>

            
            <?php foreach ($attr as $arr) {
                # code...
            } ?>

          
            <div class="main">
                <!--基础信息-->
                <div class="BasicInformation">
                    <div class="title">
                        基础信息
                    </div>
                </div>
                <div class="content clearfix">
                    <div class="left fl">
                        <div>
                            <label for="">姓名：</label>
                            <input id="stu_name" name="stu_name" type="text" value="<?php echo $arr[1] ?>"  disabled />
                        </div>
                        <div>
                            <label for="">性别：</label>
                           <input id="stu_sex" name="stu_sex" type="text" value="<?php echo $arr[2] ?>" disabled />
                        </div>
                        <div>
                            <label for="">出生日期：</label>
                            <input id="birthday" name="birthday" type="text" value="<?php echo $arr[4] ?>" disabled>
                        </div>
                        <div>
                            <label for="">身份证号：</label>
                            <input id="idNumber" name="idNumber" class="id oInp" type="text" value="<?php echo $arr[6] ?>" disabled>
                        </div>
                    </div>
                    <div class="right fr">
                        <div>
                            <label for="">学号：</label>
                            <input id="xstu_id" name="xstu_id" type="number" value="<?php echo $arr[0] ?>" disabled>
                        </div>
                        <div>
                            <label for="">民族：</label>
                            <input id="national_born" name="national_born" type="text" value="<?php echo $arr[3] ?>" disabled>
                        </div>
                        <div class="label">
                            <label for="">政治面貌：</label>
                             <input id="national_name" name="national_name" type="text" value="<?php echo $arr[5] ?>" disabled>
                        </div>
                      
                    </div>
                </div>
                <!--联系方式-->
                <div class="BasicInformation">
                    <div class="title">联系方式</div>
                </div>
                <div class="content clearfix">
                    <div class="left fl">
                        <div>
                            <label for="">手机号码：</label>
                            <input id="phone" name="phone" type="number" value="<?php echo $arr[7] ?>" disabled>
                        </div>
                        <div>
                            <label for="">QQ号码：</label>
                            <input id="qq" name="qq" type="number" value="<?php echo $arr[9] ?>" disabled>
                        </div>
                    </div>
                    <div class="right fr">
                        <div>
                            <label for="">电子邮箱：</label>
                            <input id="e_mail" name="e_mail" type="text" value="<?php echo $arr[8] ?>" class="mailbox" disabled>
                        </div>
                    </div>
                </div>
                
            </div>
            </form>





        </div>
    </div>

    <script>
        $('#politics i').on('click', function() {
            $(this).siblings('ul').show();
        });
        $('#politics ul li').on('click', function() {
            var selTxt = $(this).text();
            $('#politics a').text(selTxt);
            $('#politics ul').hide();
        });
        $('#child i').on('click', function() {
            $(this).siblings('ul').show();
        });
        $('#child ul li').on('click', function() {
            var selTxt = $(this).text();
            $('#child a').text(selTxt);
            $('#child ul').hide();
        });
        $('#emit').on('click',function(){
            $('input').removeAttr('disabled');
        });
        $('#keep').on('click',function(){
            $('input').attr('disabled','disabled');
        });
        $(document).ready(function(){
            $.ajax({
                url: "http://101.201.154.205:9090/bm/bmList",
                type: 'post',
                data: {
                    t: Math.random()
                },
                dataType: 'jsonp',
                'jsonp': 'callback'
            }).then(function(res){
                console.log(res)
    //              var stu_name = $('#stu_name').val();
                for (var i=0; i<res.length; i++) {
                    $('#stu_name').arr('value',res[i].stu_name);
                    $('#sex').arr('value',res[i].sex);
                    $('#xstu_id').arr('value',res[i].xstu_id);
                    $('#idNumber').arr('value',res[i].idNumber);
                    $('#birthday').arr('value',res[i].birthday);
                    $('#national_name').arr('value',res[i].national_name);
                    $('#qq').arr('value',res[i].qq);
                    $('#phone').arr('value',res[i].phone);
                    $('#e_mail').arr('value',res[i].e_mail);
                    $('#pl_name').text(res[i].pl_name);
                }
            },function(){
                console.log('error');
            });
        });
    </script>

</body>
</html>