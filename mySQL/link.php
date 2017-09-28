<?php

    //MySQLi链接代码

    $servername = "localhost";
    $username = "root";
    $password = "661107";

    // // //创建连接
    $conn = new mysqli($servername, $username, $password);

    // //检测连接
    if($conn->connect_error)
    {
        die("连接失败：" . $conn->connect_error);
    }

    //创建数据库
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === TRUE) {
        echo "数据库创建成功";
    }else {
        echo "Error creating database:" . $conn->error;
    }

    $conn->close();

    //PDO链接代码

    // try
    // {
    //     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username,$password);
    //     echo "链接成功";

    //     //设置 PDO 错误模式为异常
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "CREATE DATABASE myDBPDO";

    //     //使用 exec() , 因为没有结果返回
    //     $conn->exec($sql);

    //     echo "数据创建成功<br>";
    // }
    // catch(PDOException $e)
    // {
    //     echo $e->getMessage();
    // }

    // $conn = null;
?>