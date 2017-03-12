<!DOCTYPE html>
<html class=" " lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <?php
    require_once("include/config.php");

    $query="select * from timetable";

    $result=$mysqli->query($query);

    ?>


    <title>TimeTable</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <style>
        *{
            margin: 0;
            padding:0;
        }
        #mainDiv{
            /*height: 700px;*/
            width: 520px;
            background-color: white;
            margin-top: 10px;
            border-radius: 5px;
        }
        .subDiv1{
            position: absolute;
            background-color: #60acff;
            font-size: 16px;
            margin-top: 10px;
            margin-left: 160px;
            display: inline-block;
            width: 80px;
            height: 50px;
            line-height: 50px;
            border: solid 1px #3b8ae2;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .subDiv2{

            font-size:20px;
            display: inline-block;
            margin-top: 25px;
            width: 40%;
            height: 60px;
            line-height: 60px;
            border: solid 1px #439cff;
            border-radius: 5px;
            color: #439cff;
            cursor: pointer;
        }
        .athu{
            width: 60%;
            margin-top: 15px;
            height: 40px;
            font-size: 20px;
            text-align: center;
        }
        span{
            color: red;
        }
    </style>
    <script>
        //做个简单的认证,就不做cookie认证了...
        var au=new Array(13);
        au[0]='silence';
        au[1]='silence';
        au[2]='yjqsb';
        au[3]='bgs666';
        au[4]='silence';
        au[5]='1996823yao';
        au[6]='silence';
        au[7]='Artist';
        au[8]='silence';
        au[9]='silence';
        au[10]='tiyubu2016';
        au[11]='silence';
        au[12]='silence';
    </script>
</head>

<body style="background-color: #439cff">
<center>
    <h1 style="color: white;margin-top: 30px;cursor: pointer" onclick="location.href='login.php'">Time Table</h1>
    <div id="mainDiv">
        <div class="subDiv1" onclick="alert('建设中,无法使用!')">新增</div>
        <br>
        <h2 style="color: #5d5d5d;margin-top: 5px;">请选择部门^-^</h2>
        <?php
        if ($result) {
            if($result->num_rows>0){
                while($row =$result->fetch_array() ){
                    ?>

                    <div class="subDiv2" onclick="var re=prompt('请输入验证信息');if(re==au[<?php echo((int)$row['id']-1);?>]){this.innerHTML='<span>跳转中...</span>';location.href='search.php?kid=<?php echo($row['id']); ?>&kname=<?php echo($row['tbname'])?>'}else{alert('授权信息错误')}" ><?php echo($row['tbname']); ?></div><br>
<?php
                }
            }
        }else {
            echo "查询失败";
        }

        $result->free();
        $mysqli->close();
        ?>
        <br><br>
    </div>
    <br><br>
</center>
</body>
</html>