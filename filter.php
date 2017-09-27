<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //过滤器
    //filter_var()---通过一个指定的过滤器来过滤单一的变量
    //filter_var_array()---通过相同的或不同的过滤器来过滤多个变量
    //filter_input---获取一个输入变量，并对它进行过滤
    //filter_input_array---获取多个输入变量，并通过相同或不同的过滤器对它们进行过滤

    $int = 123;

    if(!filter_var($int, FILTER_VALIDATE_INT))
    {
        echo '不是一个合法的整数' . "<br>";
    }
    else
    {
        echo '是个合法的整数' . "<br>";
    }

    $var = 300;

    $int_options = array(
        "options" => array
        (
            "min-range" => 0,
            "max-range" => 256
        ) 
    );

    if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
    {
        echo "不是一个合法的整数" . "<br>";
    }
    else
    {
        echo "是个合法的整数" . "<br>";
    }

    // $filters = array
    // (
    //     "name" => array
    //     (
    //         "filter" => FILTER_SANITIZE_STRING
    //     ),
    //     "age" => array
    //     (
    //         "filter" => FILTER_VALIDATE_INT,
    //         "options" => array
    //         (
    //             "min_range" => 1,
    //             "max_range" => 120
    //         )
    //     ),
    //     "email" => FILTER_VALIDATE_EMAIL
    // );

    // $result = filter_input_array(INPUT_GET, $filters);

    // if(!$result["age"])
    // {
    //     echo "年龄必须在1 到 120 之间"
    // }else if (!$result["email"])
    // {
    //     echo "E-mail 不合法<br>";
    // }
    // else
    // {
    //     echo "输入正确";
    // }

    //使用Filter Callback
    function convertSpace($string)
    {
        return str_replace("_", ".", $string);
    }

    $string = "www_runoob_com!";

    echo filter_var($string, FILTER_CALLBACK, array("options" => "convertSpace")) . "<br>";
?>
<?php
    //移除ASCll值大于127的字符,顺便可以移除html标签
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;

?>
</body>
</html>