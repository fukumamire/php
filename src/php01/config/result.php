<!-- htmlspecialchars( 変換対象, 変換パターン, 文字コード ) の引数のうち、第二引数の『変換パターン』には『ENT_QUOTES』という定数を与えています。 ENT_QUOTESはPHPが定数としてもっているint型の値であり、ENT_QUOTESを指定すると、特殊文字のうちシングルクォーテーションとダブルクォーテーションも変換対象に含めるようになります。 ENT_QUOTESの他には以下のような定数が用意されており、状況に応じて使い分けることが可能です。 -->
<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number;