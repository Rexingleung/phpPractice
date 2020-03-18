<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
        // 引入文件
        //require_once('a.php')
        // echo "我是index.php";
        // session_start();
        // echo "我是_SESSION['views'] $_SESSION['views']" ;
    ?>
    <form action="c.php" method="POST">
        <div>
            <label for="un">账号
                <input type="text" name="un" />
            </label>
        </div>
        <div>
            <label for="pwd">密码
                <input type="text" name="pwd" />
            </label>
        </div>
        <input type="submit" value="提交" />
    </form>
</body>
</html>