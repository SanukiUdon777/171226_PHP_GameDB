<?php
//
//ANZXAhX
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send_JSON.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//

//=============================
//Mf[^์ฌ
//=============================
$data = array(
    "name" => "John",
    "age" => 22,
    "male" => true
);

//=============================
//JSONf[^ึฬp[X
//=============================
takes_array("data",$data);




//=============================
//FunctionFJSONf[^ึฬp[X
//=============================
function takes_array($array_name, $array_data)
{
 //z๑๐JSON`ฎษฯท
 echo "{". $array_name. ":[". json_encode($array_data). "]}";

}

?>
