<!DOCTYPE html>
<html class=" " lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <?php
    require_once("include/config.php");

    $kid=$_GET["kid"];

    $query="select * from bm$kid";

    $result=$mysqli->query($query);

    ?>


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
            height: 700px;
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
            font-size:18px;
            display: inline-block;
            margin-top: 15px;
            width: 50%;
            height: 50px;
            line-height: 50px;
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
        #mainSelect{
            margin-top: 20px;
            width: 65%;
            height: 30px;
            text-decoration: none;
        }
        #show{
            margin-top: 20px;
            width: 65%;
            height: 30px;
            text-decoration: none;
        }
        #zhouSelect{
            margin-top: 10px;
            width: 65%;
            height: 30px;
            text-decoration: none;
        }
        .allclass{
            margin-top: 8px;
            height: 40px;
            width: 40px;
            border-radius: 20px;
            line-height: 40px;
            border: 1px solid #439cff;
            cursor: pointer;
            color: #686868;
        }
        #mainclass{
            margin-top: -4px;
            margin-left: 8px;
            position: absolute;
            width: 41px;

        }
    </style>
</head>

<body style="background-color: #439cff">
<center>
    <h1 style="color: white;margin-top: 30px;cursor: pointer" onclick="location.href='login.php'">Time Table</h1>
    <div id="mainDiv">
        <div class="subDiv1" onclick="mysubmit();">查询</div>
        <div id="mainclass">
            <div id="class1" class="allclass" onclick="change(1);">1</div>
            <div id="class2" class="allclass" onclick="change(2);">2</div>
            <div id="class3" class="allclass" onclick="change(3);">3</div>
            <div id="class4" class="allclass" onclick="change(4);">4</div>
            <div id="class5" class="allclass" onclick="change(5);">5</div>
            <div id="class6" class="allclass" onclick="change(6);" style="border: red solid 1px">6</div>
            <div id="class7" class="allclass" onclick="change(7);" style="border: red solid 1px">7</div>
            <div id="class8" class="allclass" onclick="change(8);">8</div>
            <div id="class9" class="allclass" onclick="change(9);">9</div>
            <div id="class10" class="allclass" onclick="change(10);">10</div>
            <div id="class11" class="allclass" onclick="change(11);">11</div>
            <div id="class12" class="allclass" onclick="change(12);" style="border: #000000 solid 1px">12</div>
            <div id="class13" class="allclass" onclick="change(13);" style="border: #000000 solid 1px">13</div>
            <div id="class14" class="allclass" onclick="change(14);" style="border: #000000 solid 1px">14</div>
        </div>
        <br>
        <h2 style="color: #5d5d5d;margin-top: 5px;"><?php echo($_GET["kname"])?>无课表查询</h2>
        <select  id="mainSelect" >
            <option id="xq1" value="xq1">星期一</option>
            <option id="xq2" value="xq2">星期二</option>
            <option id="xq3" value="xq3">星期三</option>
            <option id="xq4" value="xq4">星期四</option>
            <option id="xq5" value="xq5">星期五</option>
            <option id="xq6" value="xq6">星期六</option>
            <option id="xq7" value="xq7">星期天</option>
        </select>
        <select  id="zhouSelect" >
            <option id="zhou1" value="zhou1">第1周</option>
            <option id="zhou2" value="zhou2">第2周</option>
            <option id="zhou3" value="zhou3">第3周</option>
            <option id="zhou4" value="zhou4">第4周</option>
            <option id="zhou5" value="zhou5">第5周</option>
            <option id="zhou6" value="zhou6">第6周</option>
            <option id="zhou7" value="zhou7">第7周</option>
            <option id="zhou8" value="zhou8">第8周</option>
            <option id="zhou9" value="zhou9">第9周</option>
            <option id="zhou10" value="zhou10">第10周</option>
            <option id="zhou11" value="zhou11">第11周</option>
            <option id="zhou12" value="zhou12">第12周</option>
            <option id="zhou13" value="zhou13">第13周</option>
            <option id="zhou14" value="zhou14">第14周</option>
            <option id="zhou15" value="zhou15">第15周</option>
            <option id="zhou16" value="zhou16">第16周</option>
            <option id="zhou17" value="zhou17">第17周</option>
            <option id="zhou18" value="zhou18">第18周</option>
        </select>
        <div style="width: 65%;height:540px;overflow-y: scroll;overflow-x: hidden;margin-top: 10px" id="dataMain">

        </div>



    </div>
</center>
</body>
<script>
    var i=0;
    var allclass = new Array(15);
    for(i=0;i<15;i++){
        allclass[i]='0';
    }
    function  change(n){
        if(allclass[n]=="0"){
            allclass[n]='1';
            $("#class"+n).css("background-color","#60acff");

        }else{
            allclass[n]='0';
            $("#class"+n).css("background-color","white");
        }
    }
    //初始化周数
    var rawtime = 1473004800000;
    var date = new Date();
    var day = Math.ceil((date.getTime()-rawtime)/(24*3600*1000));
    var zhou = Math.ceil(day/7);
    $("#zhou"+zhou).attr("selected",true);

    //初始化星期几
    var week =  date.getDay();
    if(week==0)week='7';
    $("#xq"+week).attr("selected",true);


    function mysubmit(){
        var mydjj='';
        for(i=1;i<15;i++){
            mydjj+=allclass[i];
        }
        $("#dataMain").html('<br>查询中,请稍后...<br>');
        $.ajax({
            method:'post',
            url: "searchApi.php",
            data: {
                zhou:$("#zhouSelect").val(),
                xqj:$("#mainSelect").val(),
                kid:<?php echo($kid)?>,
                djj:mydjj
            },
            dataType: 'json',
            success: function(data){
                $("#dataMain").html('');
                data.forEach(function(value){
                    $("#dataMain").append("<div class='subDiv2'>"+value+"</div>");
                });
//                alert(data);
            }});
    }
    mysubmit();

</script>
</html>



