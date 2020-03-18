<?php
header("Content-Type: text/html;charset=utf-8");
$un =  $_POST['un'];
$pwd = $_POST['pwd'];
if($un == 'hanmeimei'){
    echo '登录成功';
}else{
    echo '登录失败';
}
?>