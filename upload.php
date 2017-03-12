<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TimeTable</title>
    <link rel="stylesheet" href="css/sm.css">
    <script type='text/javascript' src='js/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='js/sm.js' charset='utf-8'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <style>
        *{
            margin: 0;
            padding:0;
        }
        #mainDiv{
            height: 300px;
            width: 100%;
            margin-top: 5rem;
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
            margin-top: 20px;
            width: 40%;
            height: 60px;
            line-height: 60px;
            border-radius: 5px;
            cursor: pointer;
        }
        .athu{
            width: 60%;
            margin-top: 15px;
            height: 40px;
            font-size: 20px;
            text-align: center;
        }
        .athu2{
            width: 60%;
            margin-top: 2px;
            height: 8px;
            font-size: 14px;
            text-align: center;
            color: red;
        }

    </style>
</head>

<body class="page">
<header class="bar bar-nav">
    <button class="button button-link button-nav pull-left" onclick="history.back();">
        <span class="icon icon-left"></span>
        返回
    </button>

    <h1 class="title" onclick="location.href='newList.php'">Time Table</h1>
</header>
<center>

    <div id="mainDiv">
        <br>
        <h2 style="color: #5d5d5d;margin-top: 20px;">请登陆您的校园网账号^-^</h2>
        <form action="upload_in.php" method="post">
            <div class="item-input">
                <input type="text" name="uname" id="uname" class="athu" placeholder="请输入您的登录名">
            </div>
            <div class="item-input">
                <input type="password" name="pwd" id="pwd" class="athu" placeholder="请输入您的密码">
            </div>

            <div class="athu2"><?php
                if(@$_GET['er']=='1'){
                    echo("用户名或密码错误");
                }
                ?></div>
            <input class="subDiv2 button button-fill"  style="width: 70%" value="进入" onclick="$.toast('获取课表中...')" type="submit">
        </form>
    </div>
</center>
</body>
</html>
