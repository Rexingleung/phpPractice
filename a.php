<!DOCTYPE html>
<html>
<body>

<?php

$GLOBALS["b"] = 'test+GLOBALS_B';


$a = "我的第一段 PHP 脚本！";
$t=date("H");
if ($t<"20"){
    echo $a , $a ;
}
echo "123";

function test(){
    global $a;
    echo "====我是test => $a ";
}
test();
$cars=array(0=>"porsche",1=>"BMW",2=>"Volvo");

// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
$arr=array(0=>"🍎", 1=>"🍌");
echo json_encode($cars)


?> 

</body>
</html>