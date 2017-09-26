<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        //最简单的错误捕获机制die()
        // if(!file_exists("op.txt"))
        // {
        //     die("该文件不存在!!!");
        // }
        // else
        // {
        //     $file = fopen("op.txt", "r");
        // }

        //错误处理函数
        function customError($errno, $errstr)
        {
            echo "<b>Error:</b> [$errno] $errstr";
        }

        //设置错误处理函数
        set_error_handler("customError");

        //触发错误
        echo($test);
    ?>
</body>
</html>