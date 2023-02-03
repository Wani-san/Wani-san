<?php
    // 関数の定義
    function sum_number($min_num,$max_num) {
        $result = 0;
        for ($i = $min_num; $i <= $max_num ; $i++) { 
            $result = $result + $i;
        }
        echo $result . PHP_EOL;
    }
    
    // 関数の呼び出し
    sum_number(1, 9);
?>