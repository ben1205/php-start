<?php
    $bytes = random_bytes(2);

    print(bin2hex($bytes));

    // --------------------------------

    print("<br>" . random_int(100, 999));
    print(PHP_EOL);
    print(random_int(-1000, 0));

    //p7 assert()
    ini_set('zend.assertions', 0);

    assert(true == false);
    
    echo 'Hi!';
    
    //intdiv()函数

    echo intdiv(9, 3), PHP_EOL;
    echo intdiv(10, 3), PHP_EOL;
    echo intdiv(5, 10), PHP_EOL;    
?>