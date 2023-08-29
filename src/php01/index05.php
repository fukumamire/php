<!-- for文 -->
<!-- <?php
// $iのスタートは「１」
// $i＜＝５　「５」になるまで繰り返す
//$i++ ブラウザに表示したあとに＋１される
for ($i = 1; $i <= 5; $i++) {
// ブラウザ（echoで表示）にはスタート値に×２された数字が
// 表示したあとに、サーバー側（PHP）で「１」を足す　$iが５になったとき　つまりブラウザには１０まで表示される
     echo $i * 2 . '<br />';

}
?> -->

<!-- while 文 -->
<!-- <?php
$count = 0;

while ($count < 20){
    $count ++;
    echo $count .'<br />';
}
?> -->

<!-- while ...break -->
<!-- <?php
$j = 0;
while ($j < 10){
    if($j == 5){
        break;
    }
echo $j;
$j++;
echo '<br />';
}
?> -->

<!-- Q. while 文を使用して、結果が以下のようになるコードを記述しましょう。 ループは、$count が 100 まで行うような条件式としてください。-->
<?php
$count = 0;

while ($count <=100){
    if($count ===20 ) {
        break;
    }
    // 3の倍数毎に違う処理をしたい　$countが３で割り切れたかどうかを調べる
    if($count % 3 === 0){
    // .ここに3の倍数毎に処理したい内容を記入
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}
?>
<!-- for文　if文でFizzBuzz問題 １～５０まで-->
<?php
$Fizz = 'Fizz';
$Buzz = 'Buzz';
$FizzBuzz = 'FizzBuzz';

// 1からスタート、５０まで繰り返す、１つずつ増やす
for($i = 1; $i <= 50; $i++){
// 15で割った余りが0（＝15の倍数）のとき
    if($i % 15 ==0){
    // FizzBuzzを表示させる 改行
        echo $FizzBuzz.'<br />';
    }else if($i % 3 == 0){
        echo $Fizz.'<br />';
    }else if($i % 5 ==0){
        echo $Buzz.'<br />';
    }else{
        // 3の倍数でも5の倍数でもないときは数字
        echo $i.'<br />';
    }
}
?>


