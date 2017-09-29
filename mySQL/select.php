<?php
     $servername = "localhost";
     $username = "root";
     $password = "661107";
     $dbname = "myDB";
 
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     if($conn->connect_error) {
         die("链接失败：" . $conn->connect_error);
     }
     
     //筛选想要的数据
     $sql = "SELECT * FROM myguests01 WHERE email='hebe@163.com'";

     $result = $conn->query($sql);

     if($result->num_rows > 0){
         //输出数据
         while($row = $result->fetch_assoc()) {
             echo "id:" . $row['id'] . "-Name: " . $row['firstname']. " " . $row['lastname'] . "email : " . $row['email'] . "时间 ：" . $row['reg_date'] . "<br>";
         }
     }
     else
     {
         echo "0 结果";
     }

     $conn->close();
?>