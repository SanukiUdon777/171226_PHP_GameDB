<?php
//������������������������������������������������������
//�A�N�Z�X�A�h���X
//http://jyarashi.php.xdomain.jp/GAME_DB/GameDB_Send.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//������������������������������������������������������
$data1 = "fuga"; //$data1�ɂ�"fuga"������
$data2 = "bb"; //$data2�ɂ�"bb"������

$ar[] = array("hoge" => $data1); // "hoge" => "fuga"
$ar[] = array("aa" => $data2); // "aa" => "bb"

header('Content-Type: application/json; charset=utf-8'); //JSON�t�@�C���̏o��
echo json_encode($ar, JSON_UNESCAPED_UNICODE); //JSON�`���ɂ��ĕԂ�


?>
