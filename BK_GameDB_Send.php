<?php
//
//ANZXAhX
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//
$data1 = "fuga"; //$data1ÉÍ"fuga"ªüé
$data2 = "bb"; //$data2ÉÍ"bb"ªüé

$ar[] = array("hoge" => $data1); // "hoge" => "fuga"
$ar[] = array("aa" => $data2); // "aa" => "bb"

header('Content-Type: application/json; charset=utf-8'); //JSONt@CÌoÍ
echo json_encode($ar, JSON_UNESCAPED_UNICODE); //JSON`®ÉµÄÔ·


?>
