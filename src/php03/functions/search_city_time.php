<?php
// function 関数名（引数）｛処理 city_nameには東京が格納される ｝
function searchCityTime($city_name){
// cities.phpの情報　シドニー等の外部ファイルを読み込実行

// PHPにおけるrequireとは、「外部ファイルを読み込み、実行したい」ときに使われる文
//  　　　↓ひとつ下の階層にファイルあり

// データによって送信された国と東京が結果としてブラウザに表示されるようにします。
// 表示される判断を search_city_time.phpファイルにて行います。 
// cities.phpの情報　シドニー等の外部ファイルを読み込実行
require('config/cities.php');
// 要素の数（対象の国の数）だけ処理だけ繰り返す
// cities.phpのファイルの中にある二次元配列$citiesを使用している
foreach ($cities as $city){
    // cities.phpのファイルに記載されている$citiesにcities.phpに記載されている配列名nameを配列キーとする。今回、配列のキー name が一致した時に処理を行えるようにする
    if ($city['name'] === $city_name) { $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      $time = $date_time->format('H:i');
      $city['time'] = $time;

      return $city;
    }
  }
}
