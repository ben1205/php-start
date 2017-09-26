<?php
$expire = time()+60*60*24*30;
    setcookie("user" , "runoob" , $expire);
?>

<?php
        echo $_COOKIE['user'];
        //setcookie("user", "", time()-3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COOKIE</title>
</head>
<body>
    
</body>
</html>