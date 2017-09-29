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
    // $sql = "CREATE TABLE Person (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     age TINYINT(2) NOT NULL,
    //     reg_date TIMESTAMP
    // )";

    // if($conn->query($sql) === TRUE){
    //     echo "Table MyGuests created successfully";
    // }else{
    //     echo "创建数据表错误:" . $conn->error;
    // }

    //插入多条数据
    $sql = "INSERT INTO person (firstname, lastname, age)
            VALUES('123', 'kill', '12');";
    $sql .= "INSERT INTO person (firstname, lastname, age)
             VALUES('bob', 'fly', '20');";
    $sql .= "INSERT INTO person (firstname, lastname, age)
            VALUES('obk', 'jump', '38')";
    
    if($conn->multi_query($sql) === TRUE)
    {
        echo "新纪录插入成功!";
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>