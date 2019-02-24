<?php
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆
//アクセスアドレス
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send_JSON.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆

//=============================
//送信データ作成
//=============================
$data = array(
    "name" => "John",
    "age" => 22,
    "male" => true
);

//=============================
//JSONデータへのパース
//=============================
takes_array("data",$data);




//=============================
//Function：JSONデータへのパース
//=============================
function takes_array($array_name, $array_data)
{
 //配列をJSON形式に変換
 echo "{". $array_name. ":[". json_encode($array_data). "]}";

}

?>
