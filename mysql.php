<?php
// 根据url传入的参数新增
$con = mysqli_connect("localhost", "root", ""); // 第一个参数是地址, 第二个参数是用户名, 第三个参数是密码
if (!$con) // 如果没有被连接上
{
    die('Could not connect: ' . mysqli_error($con)); // 就死掉
} else {
    echo "mysql ok";
}
$newstitle =  $_GET['newstitle'];
echo $newstitle;
// some code
// 操作完, 需要及时关闭数据库
mysqli_select_db($con,"phplesson");
// 定义sql语句
$sql="INSERT INTO `news` (`newstitle`, `newsimg`, `newscontent`, `addtime`) VALUES ('$newstitle', 'newsimg', 'newscontent', '2015-01-30')";
// 执行sql操作, 并接收返回值
$result = mysqli_query($con,$sql);
if (!$result)
  {
  die('Error: ' . mysqli_error($con));
  }else{
    echo "1 record added success";
  }
mysqli_close($con);
?>