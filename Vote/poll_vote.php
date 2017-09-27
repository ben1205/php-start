<?php
   $vote = isset($_GET['vote'])?htmlspecialchars($_GET['vote']):'555';

   echo $vote;
    //获取文件中存储的数据
    $filename = "poll_result.txt";
    $content = file($filename);

    //将数据分割到数组中
    $array = explode("||", $content[0]);
    $yes = $array[0];
    $no = $array[1];
    //echo $array[1];
    switch($vote)
    {
        case 0 :
            $yes += 1;
            break;
        case 1 :
            $no += 1;
            break;
        default:
            echo "不存在的vote值";
    }
    //echo $yes . "||" . $no;
    // if($vote == 0){
    //     $yes += 1;
    // }

    // if($vote == 1){
    //     $no += 1;
    // }

    //插入投票数据
    $insertvote = $yes . "||" . $no;
    $fp = fopen($filename, 'w');
    fputs($fp, $insertvote);
    fclose($fp);
?>

<h2>结果:</h2>
<table>
  <tr>
  <td>BOB:</td>
  <td>
  <span style="display: inline-block; background-color:green;
      width:<?php echo(100*round($yes/($no+$yes),2)); ?>px;
      height:20px;" ></span>
  <?php echo(100*round($yes/($no+$yes),2)); ?>%
  </td>
  </tr>
  <tr>
  <td>JACK:</td>
  <td>
  <span style="display: inline-block; background-color:red;
      width:<?php echo(100*round($no/($no+$yes),2)); ?>px;
      height:20px;"></span>
  <?php echo(100*round($no/($no+$yes),2)); ?>%
  </td>
  </tr>
</table>