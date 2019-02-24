<?php
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆
//アクセスアドレス
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆
$data1 = "fuga"; //$data1には"fuga"が入る
$data2 = "bb"; //$data2には"bb"が入る

$ar[] = array("hoge" => $data1); // "hoge" => "fuga"
$ar[] = array("aa" => $data2); // "aa" => "bb"

header('Content-Type: application/json; charset=utf-8'); //JSONファイルの出力
echo json_encode($ar, JSON_UNESCAPED_UNICODE); //JSON形式にして返す


?>
