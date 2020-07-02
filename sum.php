<?php

//課題１
function baisuu($mo){
    return $mo *2 ;
}
echo baisuu(2)."\n";


//課題２
function f($a, $b){
    return $a + $b ;
    
}
echo f(6,3)."\n";

//課題３
$arr = array(1,3,5,7,9);
echo array_product($arr) ."\n";

//もしくは
function mi($arr){
    $result = 1;
    foreach ($arr as $number){
    $result *= $number;
  
    }
    return $result;   
}
echo mi(array(1,3,5,7,9))."\n";


//課題４
    function max_array($arr)
    {
        $max_number = $arr[0];
        foreach ($arr as $a) {
            if ($max_number < $a) {
                $max_number = $a;
            }
        }
        return $max_number;
    }
    echo  max_array(array(7, 10, 3, 6, 1000, 101, 1)). "\n";
    
//課題5(strip_tags)
     $str = "<h1>ホームページ</h1>"
        ."<p>こまめ</p>";
    echo strip_tags($str). "\n";
    
//(array_push)
    $fruits = ["appple", "orange", "melon"];
        array_push($fruits,"banana", "peach");
        print_r($fruits);
        
//(array_merge)
    $fruits1 = ["apple", "orange", "melon", "banana", "pineapple" ];
    $fruits2 = ["starawberry", "cherry", "watermelon"];
    $fruits3 = ["anzu", "peach", "grape"];
    
    $fruits_merge = array_merge($fruits1,$fruits2,$fruits3);
        print_r($fruits_merge);
    
//(time,timestamp)
$timestamp = mktime(0,0,0,3,7,2020);
echo $timestamp ."\n";

//(date)
echo date('y/m/d', time());
echo '' ."\n";

echo date('Y-m-d H:i:s');
echo '' ."\n";
echo date('Y年m月d日 H時i分s秒');
echo '' ."\n";





?>