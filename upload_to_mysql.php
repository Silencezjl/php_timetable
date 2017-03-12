<!DOCTYPE html>
<html class=" " lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <?php
    require_once("include/config.php");

    $query="select * from timetable";

    $result=$mysqli->query($query);
    @$kid=$_GET['kid'];
    @$uname=$_GET['uname'];
    if(strlen($uname)==0){
        header("location:upload.php?er=1");
    }
    $sql = "INSERT INTO bm$kid (uname)
    SELECT '$uname' FROM DUAL WHERE NOT EXISTS (SELECT uname FROM bm$kid WHERE uname = '$uname')";
    $mysqli->query($sql);
    ?>


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
            width: 370px;
            margin-top: 5rem;
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

    </style>
</head>

<body class="page">
<header class="bar bar-nav">
    <button class="button button-link button-nav pull-left" onclick="location.href='upload.php';">
        <span class="icon icon-left"></span>
        返回
    </button>

    <h1 class="title" onclick="location.href='newList.php'">Time Table</h1>
</header>
<center>
    <div id="mainDiv">
        <br>
        <h2 style="color: #5d5d5d;margin-top: 20px;">欢迎加入<?php echo(urldecode($_COOKIE['bm']));?>^-^</h2>
        <input type="button" class="subDiv2 button button-fill" onclick="location.href='newList.php?kid=<?php echo($_COOKIE['kid']);?>'" value="查看">
</center>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: silence
 * Date: 16/9/6
 * Time: 下午5:22
 */


?>