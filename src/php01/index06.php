<!-- function 関数名(引数を受け取る変数で何個でも指定できる){
    処理内容
    return 返り値
} -->
<!-- 引数と戻り値あり outputNumberは自分で作っている-->
<?php
function outputNumber($a){
    echo '引数は'.$a.'です';
    return;
}
outputNumber(2);
// 改行
echo'<br />';
?>
<!--引数と戻り値なし  -->
<?php
function outputHello(){
echo 'Hello world';
}
// ↓関数を呼び出している。 呼び出された関数 outputHello が Hello world と出力させます。
outputHello(); 
// 改行
echo '<br />';
?>
<!-- 引数と戻り値あり -->
<?php
function text($number1, $number2){
    $value = $number1 + $number2;
    return $value;
}
$total = text(2,4);
echo $total;
// 改行
echo '<br ?>'
?>
<!--Q 結果が５になるように  -->
<?php
function addNumber($a,$b){
    $add = $a + $b;
    return $add;
}
$add = addNumber(2,3);
echo $add;
// 改行
echo '<br />';
?>
<!-- Q. 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。 -->

<?php

function exam ($score1,$score2,$score3){
    // 合計を「total」という変数を使う
    $total = $score1 + $score2 + $score3;
    // 条件
    if($total >210){
    // ２１０以上の時に実行される処理
        echo $total.'点なので合格です';
    }else{
        echo $total .'点なので不合格です';
    }
}
// echo でexam関数を呼び出す感じ？ exam(数字を３ついれることで、score1 score2 score3にリンクされる？反映？代入されている感じ？
echo exam (80, 60, 90);
echo '<br />';
?>
<!-- Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。 -->
<?php
function getSquareArea($base, $height){
    // 底辺×高さ
    return $base * $height;
}
function getTriangleArea($base, $height){
    // 底辺×高さ÷２
    return $base * $height / 2;
}
// 台形　上底Upper base 　下底Lower base　
function getTrapezoidArea($upperBase, $lowerBase, $height){
// (上底＋下底)×高さ÷２
  return ($upperBase + $lowerBase) * $height / 2;
}
echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);
?>


