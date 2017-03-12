<!DOCTYPE html>
<html class=" " lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TimeTable</title>
    <script src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <style>
        *{
            margin: 0;
            padding:0;
        }
        #mainDiv{
            height: 300px;
            width: 370px;
            background-color: white;
            margin-top: 10px;
            border-radius: 5px;
        }
        .subDiv1{
            background-color: #60acff;
            font-size: 20px;
            display: inline-block;
            margin-top: 50px;
            width: 40%;
            height: 60px;
            line-height: 60px;
            border: solid 1px #3b8ae2;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .subDiv2{

            font-size:20px;
            display: inline-block;
            margin-top: 50px;
            width: 40%;
            height: 60px;
            line-height: 60px;
            border: solid 1px #439cff;
            border-radius: 5px;
            color: #439cff;
            cursor: pointer;
        }
        .athu2{
            width: 60%;
            margin-top: 28px;
            height: 8px;
            font-size: 14px;
            text-align: center;
            color: red;
            /*display: none;*/
        }
    </style>
</head>

<body style="background-color: #439cff">
    <center>
        <h1 style="color: white;margin-top: 30px;">Time Table</h1>
        <div id="mainDiv">
            <br>
            <h2 style="color: #5d5d5d;margin-top: 20px;">Hi 欢迎使用TimeTable</h2>
            <div class="subDiv1" onclick="location.href='upload.php'">登记</div>
            <div class="subDiv2" onclick="$('#tzz').text('跳转中......');location.href='tbList.php'">查看</div>
            <div class="athu2" id="tzz"></div>
            <h5 style="color: #5d5d5d;margin-top: 32px;">Silence 良心出品</h5>
            <h5 style="color: #439cff;margin-top: 5px;">QQ:970770194</h5>
        </div>
        <h5 style="color: white;margin-top: 10px;">Copyright &copy 2016 SWU Silence</h5>
    </center>
</body>
</html>