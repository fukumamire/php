<?php
$a = 7;

if ($a ===5){
    echo'$aは5です';
}elseif ($a === 7){
    echo'$aは7です';
}else{
    echo'$aは5以外です';
}
echo "<br />";
?>

<?php
$people = 'Saburo';

switch ($people){
    case 'Taro':
    echo '太郎です'; 
    break;
    case 'Jiro':
    echo '次郎です';
    break;
    case 'Saburo':
    echo '三郎です';
    break;
}
echo '<br />';
?>
<!-- 三項演算子 -->
<!-- <?php
$age = 21;
$val =($age >=18)?'成人':'未成年';
echo $val;
echo '<br />';
?> -->
<!-- 比較　if文-->
<?php
$age = 21;
if($age > 18){
    echo '成人';
}else{
    echo '未成年';
}
echo '<br />';
?>

<?php
$a =7;
$b = ($a>5)?'TRUE' : 'FALSE';
echo $b;
echo '<br /'>;
?>