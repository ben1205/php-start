<?php
    session_start();
    //存储session数据

    if(isset($_SESSION['views']))
    {
        $_SESSION['views'] = $_SESSION['views'] + 1;
    }
    else
    {
        $_SESSION['views'] = 1;
    }
    echo "浏览量：" . $_SESSION['views'];
?>

<?php
    unset($_SESSION['views']);//销毁指定session
    session_destroy();//销毁所有session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</body>
</html>