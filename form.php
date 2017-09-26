<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $q = isset($_POST['q'])? $_POST['q'] : '';

    if(is_array($q)){
        $sites = array(
            'RUNOOB' => '菜鸟教程',
            'GOOGLE' => 'google',
            'TAOBAO' => '淘宝'
        );

        foreach($q as $v){
            echo $sites[$v] . PHP_EOL;
        }
    }else{
?>
    <form action="" method="post">
        <select multiple="multiple" name="q[]">
        <option value="">选择一个站点:</option>
        <option value="RUNOOB">Runoob</option>
        <option value="GOOGLE">Google</option>
        <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
<?php
    }
?>

<?php
    $p = isset($_GET['p'])? htmlspecialchars($_GET['p']) : '';
    if($p) {
        if($p == 'RUNOOB') {
            echo "菜鸟娇嗔";
        }else if($p == 'GOOGLE'){
            echo 'google 搜索';
        }else if($p == 'TAOBAO'){
            echo 'taobao搜索';
        }
    }else{
?><form action="" method="get"> 
    <input type="radio" name="p" value="RUNOOB" />Runoob
    <input type="radio" name="p" value="GOOGLE" />Google
    <input type="radio" name="p" value="TAOBAO" />Taobao
    <input type="submit" value="提交">
</form>
<?php
}
?>

<?php
//表单验证

$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);
    $website = test_input($_POST["website"]);                
}

function test_input($data){
    $data = trim($data);
    $data = strpslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

</body>
</html>