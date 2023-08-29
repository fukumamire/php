<?php
// htmlspecialchars はフォームを利用したセキュリティの攻撃を防ぐためにエスケープ処理をするための関数。
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
?>
