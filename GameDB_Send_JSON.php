<?php
//������������������������������������������������������
//�A�N�Z�X�A�h���X
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send_JSON.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//������������������������������������������������������

//=============================
//���M�f�[�^�쐬
//=============================
$data = array(
    "name" => "John",
    "age" => 22,
    "male" => true
);

//=============================
//JSON�f�[�^�ւ̃p�[�X
//=============================
takes_array("data",$data);




//=============================
//Function�FJSON�f�[�^�ւ̃p�[�X
//=============================
function takes_array($array_name, $array_data)
{
 //�z���JSON�`���ɕϊ�
 echo "{". $array_name. ":[". json_encode($array_data). "]}";

}

?>
