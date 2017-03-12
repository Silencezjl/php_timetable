<?php
/**
 * Created by PhpStorm.
 * User: silence
 * Date: 16/9/29
 * Time: 下午6:38
 */

$fileDir = '../computer/cookie/fopen.txt';//这个不行
//$fileDir = '../computer/fopen.txt';//这个可以
$str ='testing';
$h = fopen($fileDir,'w+');
if(fwrite($h,$str))
{
    echo '文件写入成功';
}
fclose($h);