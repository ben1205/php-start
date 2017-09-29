<?php
    $servername = "localhost";
    $username = "root";
    $password = "661107";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("链接失败：" . $conn->connect_error);
    }

    //预处理与绑定
    $stmt = $conn->prepare("INSERT INTO myguests01 (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    //设置参数并执行
    $firstname = 'Hebe';
    $lastname = 'Dong';
    $email = "hebe@163.com";
    $stmt->execute();

    $firstname = 'she';
    $lastname = 'San';
    $email = "hebe@163.com";
    $stmt->execute();

    $firstname = 'linda';
    $lastname = 'Doe';
    $email = "hebe@163.com";
    $stmt->execute();

    echo "新纪录插入成功";

    $stmt->close();
    $conn->close();
?>