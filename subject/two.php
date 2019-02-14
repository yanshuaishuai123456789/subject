<?php

 /**
  题目二：
  * 思路：一整数被另一整数整除,后者即是前者的因数,则因数中的奇数则是奇因数。 
  * 如1,2,4都为8的因数 而奇因数为1。
  * 想要若干个连续整数的和的形式，则因数必须有基因数。
  * 
  */
  function sex($number){
    $flag = 0;
    for($m = 1; $m < $number; $m++){
        for($n = $m + 1; $n < $number; $n++){
            $sum = ($m + $n) * ($n - $m + 1) / 2;
            if($sum == $number) {
                $flag = 1;
                for($i = $m; $i <= $n; $i++){
                  echo $i."&nbsp";
                }
                echo "<br/>"; 
            }
        }
    }

    if($flag == 0){
      echo "NONE";
    }

  }

  echo sex(15);

?>