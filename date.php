<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set("UTC");//设置时区是必须的，不然会报警告
    echo date("Y/m/d/H/i/s"). "<br/>";
    echo date("Y.m.d"). "<br/>";
    echo date("Y-m-d");
?>
</body>
</html>