<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>TimeTable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" href="css/sm.css">
<!--    <script type='text/javascript' src='js/zepto.min.js' charset='utf-8'></script>-->
<!--    <script type='text/javascript' src='js/sm.js' charset='utf-8'></script>-->
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type="text/javascript" src="js/cookie.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <style>
        *{
            margin: 0;
            padding:0;
            border: 0;
        }
        .bottomP{
            position: fixed;
            bottom: -.45rem;
            text-align: right;
            width: 65%;
            z-index: 100;
        }
    </style>
    <?php
    @$kid=isset($_GET['kid'])?$_GET['kid']:0;

    $bmList = array('请选择部门','部长们','宣传部','组织部','办公室','及时雨队员','及时雨干事','就业实践','外联部','艺术团','新闻中心','生活部','体育部','文艺部','学科部');
    ?>
    <script>
        var bmList=new Array('请选择部门','部长们','宣传部','组织部','办公室','及时雨队员','及时雨干事','就业实践','外联部','艺术团','新闻中心','生活部','体育部','文艺部','学科部');
        function change(n){

            n--;
            var rawDjj = $("#djj").val();
            var djj='';
            var j=0;
            for(j=0;j<n;j++){
                djj+=rawDjj[j];
            }

            djj+=parseInt(rawDjj[n])?'0':'1';

            for(j=n+1;j<14;j++){
                djj+=rawDjj[j];
            }

            $("#djj").val(djj);


        }
    </script>
</head>

<body onload="ZXinit();">
<div class="page">
    <header class="bar bar-nav">
        <button class="button pull-left" onclick="signIn();">
            登记
        </button>
        <button class="button pull-right" onclick="$.toast('建设中...')">
            管理
        </button>
        <h1 class='title open-panel' id="myTitle"  data-panel='#panel-left-demo'>请选择部门</h1>

    </header>

    <div class="content">
        <div class="list-block contacts-block">
            <div class="list-group" style="margin-top: -1.6rem;">
                <ul id="mainContent">
                    <li class="list-group-title" style="color: #838383">无课人员名单</li>

                </ul>
                <br>
                <br>
            </div>

        </div>
    </div>

    <!-- Services Popup -->
    <div class="popup popup-services theme-dark" >
        <div class="content-block">
            <div class="content-block">

                <div class="row">
                    <center>

                        <div class="content-block">
                            <div class="list-block">
                                <br><br><br><br>
                                <ul>
                                    <!-- Text inputs -->
                                    <li>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">周数</div>
                                                <div class="item-input">
                                                    <select id="zhouSelect" readonly="readonly">
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
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        <div class="content-block">
                            <div class="list-block">
                                    <!-- Text inputs -->
                                 <ul>
                                    <li>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">星期几</div>
                                                <div class="item-input">
                                                        <select id="mainSelect" >
                                                            <option id="xq1" value="xq1">星期一</option>
                                                            <option id="xq2" value="xq2">星期二</option>
                                                            <option id="xq3" value="xq3">星期三</option>
                                                            <option id="xq4" value="xq4">星期四</option>
                                                            <option id="xq5" value="xq5">星期五</option>
                                                            <option id="xq6" value="xq6">星期六</option>
                                                            <option id="xq7" value="xq7">星期天</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <div class="col-50">
                            <a class="button button-big button-fill close-popup" onclick="changeZX();">确认</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

<!--    底部导航-->
    <div class="bar bar-footer-secondary">
        <button class="button button-block" onclick="mysubmit();">查询</button>
    </div>

    <!-- Icons in standard bar fixed to the bottom of the screen -->
    <div class="bar bar-footer">
        <a class="icon icon-edit pull-left "></a>
        <a class="icon icon-menu pull-right my-btn"></a>
    </div>
    <div class="bottomP open-services">
            <p>第<span id="myZhou">4</span>周 星期<span id="myXq">二</span></p>
    </div>
</div>


<!--第几节课的侧边栏-->
<div class="panel-overlay"></div>
<div class="panel panel-right panel-cover theme-dark" id='panel-js-demo'>
    <div class="content-block">
        <div class="card" >
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(1);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第1节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content"  >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(2);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第2节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(3);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第3节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(4);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第4节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(5);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第5节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(6);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第6节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(7);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第7节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(8);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第8节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(9);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第9节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(10);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第10节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(11);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第11节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(12);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第12节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(13);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第13节课</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="checkbox" name="my-radio" onchange="change(14);">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;第14节课</div>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--部门选择-->
<div class="panel-overlay"></div>
<!-- Left Panel with Reveal effect -->
<div class="panel panel-left panel-reveal theme-dark" id='panel-left-demo'>
    <div class="content-block">
        <div class="card close-panel" onclick="changeBm(1);" >
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2" id="bm1">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;部长们</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(2);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;宣传部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(3);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;组织部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(4);">
            <div class="card-content" >
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;办公室</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(5);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;及时雨队员</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(6);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;及时雨干事</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(7);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;就业实践</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(8);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;外联部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(9);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;艺术团</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(10);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;新闻中心</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(11);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;生活部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(12);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;体育部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(13);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;文艺部</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="card close-panel" onclick="changeBm(14);">
            <div class="card-content">
                <div class="card-content-inner">
                    <label class="label-checkbox item-content">
                        <input readonly="readonly" type="radio" name="my-radio2">
                        <div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;&nbsp;&nbsp;&nbsp;学科部</div>
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>
<input type="hidden" name="bm" id="bm" value="0" readonly="readonly">
<input type="hidden" name="djj" id="djj" value="00000000000000" readonly="readonly">

<script>
    $.init();
    var i=0;

    function mysubmit(){
        if($("#bm").val()=='0'){
            $.toast('请在上方选择部门！',1500);
        }else{
            $.toast('查询中...',1500);
//            alert($("#djj").val());
            $.ajax({
                //            method:'POST',
                type:"POST",
                url: "searchApi.php",
                data: {
                    zhou:$("#zhouSelect").val(),
                    xqj:$("#mainSelect").val(),
                    kid:$("#bm").val(),
                    djj:$("#djj").val()
                },
                dataType: 'json',
                success: function(data){
                    $("#mainContent").html('<li class="list-group-title" style="color: #838383">无课人员名单</li>');
                    data.forEach(function(value){
                        $("#mainContent").append('<li>\
                            <div class="item-content">\
                            <div class="item-inner">\
                            <div class="item-title">'+value+'</div>\
                            </div>\
                            </div>\
                            </li>');
                    });

                }});
        }
    }



    var bmNum=<?php echo($kid);?>;
    function changeBm(n){
        $("#bm").val(n);
        $('#myTitle').html(bmList[n]);
        mysubmit();
    }


if(bmNum){
    var list = document.getElementsByTagName('input');
    list[13+parseInt(bmNum)].checked=true;
    changeBm(bmNum);
}
    $(document).on("click", ".my-btn", function() {
        $.openPanel("#panel-js-demo");
    });

    $(document).on('click','.open-services', function () {
        $.popup('.popup-services');
    });


//    mysubmit();

    function ZXinit(){
        //初始化周数
        var rawtime = 1473004800000;
        var date = new Date();
        var day = Math.ceil((date.getTime()-rawtime)/(24*3600*1000));
        var zhou = Math.ceil(day/7);
        $("#zhou"+zhou).attr("selected",true);
        $("#myZhou").html(zhou);

        //初始化星期几
        var week =  date.getDay();
        if(week==0)week='7';
        $("#xq"+week).attr("selected",true);
        var listXq = new Array('','一','二','三','四','五','六','天');
        $("#myXq").html(listXq[week]);
    }
    var listXq = new Array('','一','二','三','四','五','六','天');

    //改变周数和星期
    function changeZX(){
        $("#myZhou").html($("#zhouSelect").val().substr(4));
        $("#myXq").html(listXq[parseInt($("#mainSelect").val().substr(2))]);
        mysubmit();
    }

    //登记
    function signIn(){
        if($("#bm").val()==0){
            $.toast('请先选择部门！',1000);
            $.openPanel($("#panel-left-demo"));
        }else{

            if(window.confirm('确认加入'+bmList[$("#bm").val()]+'吗？') ){
                setCookie('kid',$("#bm").val());
                setCookie('bm',encodeURI(bmList[$("#bm").val()]));
                location.href="upload.php";
            }

        }
    }

</script>
</body>
</html>
