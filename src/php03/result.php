<!--1回しか処理を読み込まないrequire_once  -->
<?php
require_once('functions/search_city_time.php');
// search_city_time.php　ファイルに関数を作成　そのうちの１つ東京の時間を表示する記述
$tokyo = searchCityTime('東京');
// ↑searchCityTime関数をこのresult.php ファイルで呼び出す。呼び出した関数は
//  search_city_time.phpファイルにて処理をする 

// htmlspecialchars はフォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03/index.php">
        World Clock
      </a>
    </div>
  </header>

  <main>
  <div class="result__content">
    <div class="result-cards">
      <div class="result-card">
        <div class="result-card__img-wrapper">
          <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
        </div>
        <div class="result-card__body">
          <!-- 東京という名前と時間を表示 -->
          <p class="result-card__city"><?php echo $tokyo['name']?></p>
          <p class="result-card__time"><?php echo $tokyo['time']?></p>
        </div>
      </div>
      <div class="result-card">
        <div class="result-card__img-wrapper">
          <!-- 変数 comparison から表示をしている理由は、１１行目の$comparison = searchCityTime($city);から検索した国の取得をしているため-->
          <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
        </div>
        <div class="result-card__body">
          <p class="result-card__city"><?php echo $comparison['name']?>
          </p>
          <p class="result-card__time"><?php echo $comparison['time']?>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
</body>

</html>