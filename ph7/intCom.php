<?php
    //整形比较
    echo (1 <=> 1); echo PHP_EOL;
    echo (1 <=> 2); echo PHP_EOL;
    echo (2 <=> 1); echo PHP_EOL . "<br>";

    // 字符串比较
    print( "a" <=> "a");print(PHP_EOL);
    print( "a" <=> "b");print(PHP_EOL);
    print( "b" <=> "a");print(PHP_EOL) . "<br>";

    //使用 define 函数来定义数组
    define('sites', [
        'Google',
        'Runoob',
        'Taobao'
    ]);

    echo sites[1];
?>