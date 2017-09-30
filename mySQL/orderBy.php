<?php
    $servername = "localhost";
    $username = "root";
    $password = "661107";
    $dbname = "myDB";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    //检测链接
    if(mysqli_connect_errno())
    {
        echo "连接失败!" . mysqli_connect_error();
    }

    //取出数据排序
    // $result = mysqli_query($con, "SELECT * FROM person ORDER BY age");

    // while($row = mysqli_fetch_array($result))
    // {
    //     echo $row['firstname'];
    //     echo " " . $row['lastname'];
    //     echo " " . $row['age'];
    //     echo "<br>";
    // }

    //更新数据表里的对应数据
    //mysqli_query($con, "UPDATE person SET age=99 WHERE firstname='bob' AND lastname='fly'");
    
    //删除对应的数据
    //mysqli_query($con, "DELETE FROM person WHERE lastname='jump'");

    mysqli_close($con);
?>