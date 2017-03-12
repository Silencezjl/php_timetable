<?php
/**
 * Created by PhpStorm.
 * User: silence
 * Date: 16/9/29
 * Time: 下午6:38
 */
//    require_once("include/config.php");
//    $time=(string)time();
//
//    @$username=$_POST['uname'];
//    @$pass=$_POST['pwd'];
//
//    $cookie_file = '../computer/cookie/cookie_'.$time.'.txt';
//    $cookie_file2 ='../computer/cookie/cookie2_'.$time.'.txt';
//    $cookie_file3 = '../computer/cookie/cookie3_'.$time.'.txt';
//
//    $mydata2='Login.Token1='.$username.'&Login.Token2='.$pass.'&goto=http%3A%2F%2Furp.swu.edu.cn%2FloginSuccess.portal&gotoOnFail=http%3A%2F%2Furp.swu.edu.cn%2FloginFailure.portal';
//
//    $urlUrp='http://urp.swu.edu.cn/userPasswordValidate.portal';
//
//    $ch = curl_init ();
//    // print_r($ch);
//    curl_setopt ( $ch, CURLOPT_URL, $urlUrp );
//    curl_setopt ( $ch, CURLOPT_POST, 1 );
//    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
//    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt ( $ch, CURLOPT_REFERER, "http://urp.swu.edu.cn/login.portal");
//    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $mydata2 );
//    curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION,true);
//    curl_setopt ( $ch, CURLOPT_COOKIEJAR,$cookie_file); //存储cookies
//    curl_exec ( $ch );
//    curl_close ( $ch );
//    //var_dump($return);
//    //print_r($return);
//
//    //使用上面保存的cookies再次访问
//    $url = "http://urp.swu.edu.cn/index.portal";
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); //使用上面获取的cookies
//    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file2);
//    curl_exec($ch);
//    curl_close($ch);
//
//    $file = fopen($cookie_file2, "r");
//    $user=array();
//    $i=0;
//    //输出文本中所有的行，直到文件结束为止。
//    while(! feof($file))
//    {
//        $user[$i]= fgets($file);//fgets()函数从文件指针中读取一行
//        $i++;
//    }
//    fclose($file);
//
//    //var_dump(substr($user[4],47));
//
//    $ipl=substr($user[4],47);
//
//
//    //教务系统
//    $headers = array(
//        'Cookie: iPlanetDirectoryPro='.$ipl,
//
//    );
//
//    $urlJW='http://jw.swu.edu.cn/jwglxt/idstar/index.jsp';
//    $ch = curl_init($urlJW);
//    curl_setopt($ch, CURLOPT_HEADER,1);
//    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION,true);
//    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file3);
//    $response = curl_exec($ch);
//    curl_close($ch);
//
//
//    //echo $response;
//
//    $regex="/JSESSIONID=(.*); Path=\/jwglxt/";
//
//    preg_match_all($regex,$response,$rawcookie);
//
//    @$mycookie = substr($rawcookie[0][1],11,32);
//
//    function post3($url, $data,$cookie){//file_get_content
//
//
//        $postdata = http_build_query(
//
//            $data
//
//        );
//
//
//
//        $opts = array('http' =>
//
//            array(
//
//                'method'  => 'POST',
//
//                'header'  => 'Cookie: JSESSIONID='.$cookie,
//
//                'content' => $postdata
//
//            )
//
//        );
//
//        $context = stream_context_create($opts);
//
//        $result = @file_get_contents($url, false, $context);
//
//        return $result;
//
//
//    }
//
//    $mydata = array('xnm'=>'2016','xqm'=>'3');
//
//    $myresult=post3('http://jw.swu.edu.cn/jwglxt/kbcx/xskbcx_cxXsKb.html?gnmkdmKey=N253508',$mydata,$mycookie);
//以上为旧版教务系统认证方法



require_once("include/config.php");
$time=(string)time();

@$username=$_POST['uname'];
@$pass=$_POST['pwd'];

$cookie_file = '../computer/cookie/cookie_'.$time.'.txt';
$cookie_file2 ='../computer/cookie/cookie2_'.$time.'.txt';
$cookie_file3 = '../computer/cookie/cookie3_'.$time.'.txt';



$mydata1="serviceInfo=%7B%22serviceAddress%22%3A%22https%3A%2F%2Fuaaap.swu.edu.cn%2Fcas%2Fws%2FacpInfoManagerWS%22%2C%22serviceType%22%3A%22soap%22%2C%22serviceSource%22%3A%22td%22%2C%22paramDataFormat%22%3A%22xml%22%2C%22httpMethod%22%3A%22POST%22%2C%22soapInterface%22%3A%22getUserInfoByUserName%22%2C%22params%22%3A%7B%22userName%22%3A%22$username%22%2C%22passwd%22%3A%22$pass%22%2C%22clientId%22%3A%22yzsfwmh%22%2C%22clientSecret%22%3A%221qazz%40WSX3edc%24RFV%22%2C%22url%22%3A%22http%3A%2F%2Fi.swu.edu.cn.*%22%7D%2C%22cDataPath%22%3A%5B%5D%2C%22namespace%22%3A%22%22%2C%22xml_json%22%3A%22%22%7D";

$urlUrp1='http://i.swu.edu.cn/remote/service/process';

$ch = curl_init ();
// print_r($ch);
curl_setopt ( $ch, CURLOPT_URL, $urlUrp1 );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $mydata1 );
curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION,true);
curl_setopt ( $ch, CURLOPT_COOKIEJAR,$cookie_file); //存储cookies
$response=curl_exec ( $ch );
curl_close ( $ch );



$regex="/\",\"tgt\":\"(.*)=\",\"/";
preg_match_all($regex,$response,$res_tgt);
$tgt=$res_tgt[1][0]."=";

echo("<br>");
//echo(base64_decode($tgt));

$headers = array(
    'Cookie: CASTGC="'.base64_decode($tgt).'"',

);

$urlJW='https://uaaap.swu.edu.cn/cas/login?service=http%3A%2F%2Fjw.swu.edu.cn%2Fssoserver%2Flogin%3Fywxt%3Djw';
$ch = curl_init($urlJW);
curl_setopt($ch, CURLOPT_HEADER,1);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);

$response = curl_exec($ch);
curl_close($ch);


$regex="/JSESSIONID=(.*); Path=\/jwglxt/";

preg_match_all($regex,$response,$rawcookie);

//var_dump($rawcookie);


@$mycookie = substr($rawcookie[0][0],11,32);

function post3($url, $data,$cookie){//file_get_content


    $postdata = http_build_query(
        $data
    );



    $opts = array('http' =>

        array(

            'method'  => 'POST',

            'header'  => 'Cookie: JSESSIONID='.$cookie,

            'content' => $postdata

        )

    );

    $context = stream_context_create($opts);

    $result = @file_get_contents($url, false, $context);

    return $result;


}

$mydata = array('xnm'=>'2016','xqm'=>'3');

$myresult=post3('http://jw.swu.edu.cn/jwglxt/kbcx/xskbcx_cxXsKb.html?gnmkdmKey=N253508',$mydata,$mycookie);




//echo $myresult;
    //echo "<br><br><br><br><br><br>";

    $myArr=json_decode($myresult, true);
    //echo ($myresult);
//    var_dump($myArr);


    $timeTable=array(
        1=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        2=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        3=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        4=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        5=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        6=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
        7=>array(
            1=>'000000000000000000',
            2=>'000000000000000000',
            3=>'000000000000000000',
            4=>'000000000000000000',
            5=>'000000000000000000',
            6=>'000000000000000000',
            7=>'000000000000000000',
            8=>'000000000000000000',
            9=>'000000000000000000',
            10=>'000000000000000000',
            11=>'000000000000000000',
            12=>'000000000000000000',
            13=>'000000000000000000',
            14=>'000000000000000000'
        ),
    );//总时间表

    $userxm=$myArr["xsxx"]["XM"];

//    var_dump($myArr["xsxx"]["XM"]);//姓名
    if(strlen($myArr["xsxx"]["XM"])<2){
        header("location:upload.php?er=1");
//        echo($userxm);
    }

else{

    //认证成功

    $sql = "CREATE TABLE IF NOT EXISTS $userxm
(
xq1 varchar(260),
xq2 varchar(260),
xq3 varchar(260),
xq4 varchar(260),
xq5 varchar(260),
xq6 varchar(260),
xq7 varchar(260)
)";

    $mysqli2->query($sql);
    for( $i = 0 ; $i<count($myArr['kbList']);$i++){
        $xqj=(int)$myArr['kbList'][$i]['xqj'];//星期几
        //var_dump($myArr['kbList'][$i]);
        $jcs =  $myArr['kbList'][$i]['jcs'];//第几节课
        $regex="/\d+/";
        preg_match_all($regex,$jcs,$jcs1);

        $rawzcd=$myArr['kbList'][$i]['zcd'];//第几周
        $zcdarry=explode(',',$rawzcd);
        $regex2="/单/";
        $regex3="/双/";

        foreach ($zcdarry as $myzcd) {
//            echo($myzcd);
            preg_match_all($regex,$myzcd,$zcd1);
            $dan=2;
            if(@preg_match_all($regex2,$myzcd)){
                $dan=1;
            }
            if(@preg_match_all($regex3,$myzcd)){
                $dan=0;
            }


            for($j=(int)$jcs1[0][0];$j<=(int)$jcs1[0][1];$j++){
                if(!empty($zcd1[0][1])){
                    for($k=(int)$zcd1[0][0];$k<=(int)$zcd1[0][1]; $k++){
                        if($dan!=2){
                            if($k%2==$dan){
                                $timeTable[$xqj][$j][$k-1]='1';
                            }
                        }else{
                            $timeTable[$xqj][$j][$k-1]='1';
                        }

                    }
                }else{
                    $timeTable[$xqj][$j][(int)$zcd1[0][0]-1]='1';
                }

            }

        }
    }

    $xqArr=array();

    for($i=1;$i<8;$i++){
        for($j=1;$j<15;$j++){
            $xqArr[$i].=$timeTable[$i][$j];
        }

    }

    $sql = "INSERT INTO $userxm (xq1,xq2,xq3,xq4,xq5,xq6,xq7)
    VALUES ('$xqArr[1]','$xqArr[2]','$xqArr[3]','$xqArr[4]','$xqArr[5]','$xqArr[6]','$xqArr[7]')";

    $mysqli2->query($sql);

//    for($i=0;$i<7;$i++){
//        for($j=0;$j<14;$j++){
//            echo($timeTable[$i+1][$j+1]);
//            echo("<br>");
//        }
//        echo("<br>");
//    }
    $mykid=$_COOKIE['kid'];
    header("Location:upload_to_mysql.php?kid=$mykid&uname=$userxm");
}
    ?>


