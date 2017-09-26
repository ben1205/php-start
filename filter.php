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
        echo '不是一个合法的整数';
    }
    else
    {
        echo '是个合法的整数';
    }
?>
</body>
</html>