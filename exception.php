<?php
    //创建一个有异常处理的函数

    function checkNum($number)
    {
        if($number > 1)
        {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }

    //触发异常
    try
    {
        checkNum(2);
        //如果抛出异常，以下文本不会输出
        echo '我是最帅的人，哈哈哈';
    }
    //捕获异常
    catch(Exception $e)
    {
        echo 'Message:' . $e->getMessage();
    }
?>