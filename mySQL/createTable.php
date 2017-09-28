<?php
    $servername = "localhost";
    $username = "root";
    $password = "661107";
    $dbname = "myDB";

    //创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);

    //检测链接
    if($conn->connect_error) {
        die("链接失败:" . $conn->connect_error);
    }

    //使用 sql 创建数据表
    // $sql = "CREATE TABLE MyGuests01 (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    // )";

    // if($conn->query($sql) === TRUE){
    //     echo "Table MyGuests created successfully";
    // }else{
    //     echo "创建数据表错误:" . $conn->error;
    // }

    //插入一条数据
    $sql = "INSERT INTO MyGuests01 (firstname, lastname, email)
            VALUES('anny', 'kill', '616096669@qq.com')";
    
    if($conn->query($sql) === TRUE)
    {
        echo "新纪录插入成功!";
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>