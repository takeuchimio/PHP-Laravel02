<?php
echo 'hello php!' . "\n";
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
    ];
    
echo $animals [ "cat" ] . "\n";

$a = 3;
$b = 7;
echo $a + $b . "\n";
$array_month = ["1月", "２月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month [7]. "\n";
$hello = 'Hello.';
$name = 'Mio';
$world = "'s World!";
echo $hello . $name . $world .  "\n";
$tech_boost = "tech";
echo $tech_boost . "boost" . "\n";

$carendar_2018 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "Jun" => "6月",
    "July" => "7月",
    "August " => "8月",
    "September" => "9月",
    "October" => "10月",
    "Nobember" => "11月",
    "December" => "12月",
    ];
    echo $carendar_2018 [ "December" ] . "\n";


$height = 160;
if ($height < 150 ){
    echo "150cm 未満の方はご乗車できません。"."\n";
}else{
    echo "ご乗車になれます。"."\n";
}

$height = 230;
if($height < 150){
    echo "150cm未満の方はご乗車できません。"."\n";
}else if ($height >= 200){
    echo "200cm以上の方はご乗車できません。"."\n";
}else {
    echo "ご乗車になれます。". "\n";
}

$weekday = "木曜";
switch($weekday){
    case "月曜":
    case "木曜":
        echo "可燃ゴミの日です。\n";
        break;
    case "水曜":
        echo "資源ゴミの日です。\n";
        break;
    default:
        echo "回収はありません。\n";
        break;
}
$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b) ."\n";

$name = "美緒";
    if ($name = "美緒"){
        echo "私はあなたの名前です"."\n";
    } else{
       echo "あなたの名前ではありません" ."\n";
        }
    
$total = 0;
    for ($i = 0; $i <= 10000; $i++){
        $total += $i;
    }
    echo $total ."\n";

$fruits = array("apple","orange","grape","melon","peach");
    foreach($fruits as $fruits){
        echo $fruits;
        echo "\n";
    }
    
/* for文の始めの値を定義する　*/
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
    for ($i = $start; $i <= $end; $i++){
    //5で割り切れたら{}内を実行する
    if ($i % 5 == 0){
        echo $i ."\n";
    }
    }

?>

