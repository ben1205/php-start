<?php
header('content-type:text/html;charset=utf-8');
//通过heredoc语法结构来写(类似于双引号的作用)
$username='queen';
$table=<<<EOF
<table border="1" width="80%">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3 "呵呵呵"</td>
        <td>{$username}</td>        
    </tr>
</table>
EOF;
echo $table;
echo "<hr>";

//php5.3之后可以这么做

echo <<<EOF
<h1>呵呵呵</h1>
EOF;

//nowdoc语法结构(相当于单引号的作用)
echo "<hr>";
$str=<<<'EOD'
    hello bob<br/>
    {$username}
    <br/>
EOD;
echo $str;
?>
<?php
/*
    数值型->数值本身
    true->1;
    false->空字符串;
    null->空字符串;
=======================
    数组->Array
*/
echo 123;
echo '<br/>';
echo 34.5;
echo '<br/>';
echo true;
echo '<br/>';
echo 'A', false,'B';
echo '<br/>';
echo 'C',null,'D';
echo "<br/>";

//强制转换
//临时转换
$var=123;
$res=(string)$var;
$arr=array((boolean)1,12,23);
var_dump($res, $var,$arr);
//echo $var,$res;
$var01=123;
var_dump(strval($var01));

//永久转换
$var=12;
settype($var,'string');
var_dump($var);
?>
<?php
    //字符串转换成其他类型
    echo 1+'3king';//4
    echo "<br/>";
    echo 1.2+'4abc';//5.2
?>