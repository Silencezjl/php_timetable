<?php
/**
 * Created by PhpStorm.
 * User: silence
 * Date: 16/9/8
 * Time: 下午5:29
 */
include_once("include/config.php");

$k=0;
$test = array();
$kid=$_POST['kid'];
$xqj=$_POST['xqj'];
$week=(int)substr($_POST['zhou'],4);
$djj=$_POST['djj'];
$count='';
$query="select * from bm$kid";

$result=$mysqli->query($query);

if ($result) {
    if($result->num_rows>0){
        while($row =$result->fetch_array() ){
            $flag=1;
            $uname=$row['uname'];
            $query="select * from $uname";
            $Uresult=$mysqli->query($query);
            $Urow =$Uresult->fetch_array() or die(mysqli_connect_error());
            $classData=$Urow[$xqj];
            for($myi=0;$myi<14;$myi++){
                if((int)$djj[$myi]==1 and (int)$classData[$week+$myi*18-1]==1){
                    $flag=0;
                    break;
                }
            }
            if($flag){
                $test[$k]=$uname;
                $k++;
            }
        }
    }
}else {
    echo "无";
}



echo(json_encode($test));
//echo($count);