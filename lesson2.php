<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。


date_default_timezone_set('Asia/Tokyo');


$w = date("w");
$week = array("日", "月", "火", "水", "木", "金", "土");
echo"・現在日時 (";
echo date("Y年m月d日") . "($week[$w]曜日) )<br>"."・現在日時から３日後 (";


$dateD= strtotime('+3 day'); 
echo date('Y年m月d日 H時i分s秒)', $dateD); 
echo "<br>"."・現在日時から１２時間前（";


$dateH = strtotime('-12 hour'); 
echo date('Y年m月d日 H時i分s秒)', $dateH); 
echo "<br>"."・2020年元旦から現在までの経過日数 (";


$today = date("Y-m-d");
$today = strtotime($today);
$day = strtotime('2020-01-01');
echo ($today - $day) / (60 * 60 * 24). '日'.")";


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)

?>