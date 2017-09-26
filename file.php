<?php
    $file = fopen("welcome.html", "r") or exit ("Unable to open file");
    
    $file_txt = "welcome.txt";
    if(is_readable($file_txt)){
        echo "it's ok!" . "<br>";
    }

    if(!is_dir($file_txt)){
        echo "this is not a dir";
    }
    while (!feof($file))
    {
        echo fgetss($file, 1024, "<div>, <p>") . "<br>";//逐行读取数据
    }
    // while (!feof($file))
    // {
    //     echo fgetc($file) . "<br>";//逐字符读取数据
    // }
    fclose($file);

    $file1 = fopen("welcome.txt", "w");

    echo fwrite($file1, "Hello it's very cool!") . "<br>";
    
    fclose($file1);

    echo readfile("welcome.txt");
?>