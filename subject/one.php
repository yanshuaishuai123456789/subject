<?php

/**
题目一：
解题思路：
先将字符串转化为数组进行比较
一：先将每个字符串转换成数组
Array ( [0] => This [1] => is [2] => C [3] => programming [4] => text )
Array ( [0] => This [1] => is [2] => a [3] => text [4] => for [5] => C [6] => programming )
二：两个函数去重   array_unique  =》减少比较的次数
三：自定义排序函数进行排序 ，按照降序的方式进行排序
四：获取相同长度的数据 然后根据题意展示

*/
function getCommon($s,$t){
  $s_array = explode(" ", $s);
  array_unique($s_array);
  $t_array = explode(" ", $t);
  array_unique($t_array);

  //根据自定义排序方法对数组进行 单词长度降序排序
  usort($s_array, 'functionSort');
  usort($t_array, 'functionSort');

  //获取重复的数据
  foreach($s_array as $key => $val){
    foreach($t_array as $kk => $vv){
        if($val == $vv){
          $contains[] = $val;  //将两个数组相同的元素保存
        }
    }
  }

  if(count($contains) > 1){
    return $contains[1];
  }else{
    return NULL;
  }
}



function functionSort($s_array,$t_array){
    if (strlen($s_array) == strlen($t_array)) {
        return 0;   //不需要
    }
    return (strlen($s_array) < strlen($t_array)) ? 1 : -1;
}


$s="This is C programming text";
$t="This is a text for C programming";
echo getCommon($s,$t);


?>