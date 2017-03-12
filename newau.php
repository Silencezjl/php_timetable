<!DOCTYPE html>
<html class=" " lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TimeTable</title>

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
            margin-top: 35px;
            width: 40%;
            height: 60px;
            line-height: 60px;
            border: solid 1px #439cff;
            border-radius: 5px;
            color: #439cff;
            cursor: pointer;
        }
        #athu{
            width: 60%;
            margin-top: 35px;
            height: 40px;
            font-size: 20px;
            text-align: center;
        }

    </style>
</head>

<body style="background-color: #439cff">
<center>
    <h1 style="color: white;margin-top: 30px;">Time Table</h1>
    <div id="mainDiv">
        <br>
        <h2 style="color: #5d5d5d;margin-top: 20px;">创建权限认证0.0</h2>
        <input type="text" name="athu" id="athu" placeholder="请输入您的登录名">
        <div class="subDiv2">进入</div>
    </div>
</center>
</body>
</html>