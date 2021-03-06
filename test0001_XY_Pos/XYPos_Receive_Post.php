<?php
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆
//アクセスアドレス
//http://jyarashi.php.xdomain.jp/GAME_DB/test0001_XY_Pos/XYPos_Receive_Post.php
//
//USER:jyarashi_game
//PASSWORD:game4game4
//
//◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆◆

//====================================================
///引数/設定値一覧
//====================================================
//--------------------------------------------------
//引数
//--------------------------------------------------

	//引数設定
	$game_tytle 		= $_POST['game_tytle'];
	$user_id 			= $_POST['user_id'];
	$player_x_pos 		= $_POST['player_x_pos'];
	$player_y_pos 		= $_POST['player_y_pos'];

/*
	//テスト用の一時設定値
	$game_tytle 		= "tytle001";
	$user_id 			= "id001";
	$player_x_pos 		= 5.0;
	$player_y_pos 		= 5.0;
*/

//--------------------------------------------------
//DBアクセス設定値
//--------------------------------------------------
	//ユーザ・パスワード設定
	$dsn 	= 'mysql:dbname=jyarashi_game; host=mysql1.php.xdomain.ne.jp; charset=utf8';
	$usr 	= 'jyarashi_game';
	$passwd = 'game4game4';

	//保存先DB名称
	$tbl 	= $game_tytle."_".$user_id;


//====================================================
//DB制御
//====================================================
//--------------------------------------------------
//データベースへの接続
//--------------------------------------------------
 	try 
 	{
    	$db = new PDO($dsn, $usr, $passwd);
 	}
 	catch (PDOException $e) 
 	{
		exit("データベースに接続できません。：{$e->getMessage()}");
 	}


//--------------------------------------------------
//テーブル作成
//--------------------------------------------------
	//値の設定
	$sql = 	"CREATE TABLE IF NOT EXISTS ". $tbl
			."("
			. "`id`"					." "."CHAR(10)  PRIMARY KEY," //主キーを登録する
			. "`date`"					." "."DATETIME,"
			. "`player_x_pos`"			." "."FLOAT,"
			. "`player_y_pos`"			." "."FLOAT"
			.");";

	//設定を実行する
	$stmt = $db -> prepare($sql);
	$stmt -> execute();
	echo $sql;
	echo '<br>';


//--------------------------------------------------
//テーブル件数
//--------------------------------------------------
	$sql = 'select count(*) as cnt from '.$tbl;
	$stmt = $db->query($sql);
	$count = $stmt->fetchColumn();
	echo $sql;
	echo '<br>';


//--------------------------------------------------
//SQL DBを更新する
//--------------------------------------------------
	//データベースへの登録(主キー存在時は、データのみ更新する/主キーなし時は新規作成する)
	$sql = "INSERT INTO " .$tbl. " ( id, date, player_x_pos, player_y_pos ) VALUES ( :id, now(), :player_x_pos, :player_y_pos ) ON DUPLICATE KEY UPDATE player_x_pos = $player_x_pos, player_y_pos = $player_y_pos";
	$params = array( ':id' => $user_id, ':player_x_pos' =>  $player_x_pos, ':player_y_pos' => $player_y_pos );
	$stmt = $db->prepare($sql);
	$stmt->execute($params);
	echo $sql;
	echo '<br>';



//====================================================
// DBの表示(確認用)
//====================================================
//表示開始
//--------------------------------------------------
	echo '<br><br>';
	echo 'Start DB Display';
	echo '<br><br>';


//--------------------------------------------------
//更新したテーブル名の表示
//--------------------------------------------------
	echo $tbl;
	echo '<br><br>';


//--------------------------------------------------
// SELECT文を変数に格納
//--------------------------------------------------
	$sql = "SELECT * FROM " .$tbl;


//--------------------------------------------------
// SQLステートメントを実行し、結果を変数に格納
//--------------------------------------------------
	$stmt = $db->query($sql);


//--------------------------------------------------
// foreach文で配列の中身を一行ずつ出力
//--------------------------------------------------
	foreach ($stmt as $row)
	{
		//--------------------------------------------------
  		// データベースのフィールド名で出力
  		//--------------------------------------------------
  		echo $row['id'] . ' ' . $row['date'] . ' ' . $row['player_x_pos'] . ' ' . $row['player_y_pos'];
  		echo '<br>';
  		
	}


//--------------------------------------------------
//表示終了
//--------------------------------------------------
	echo '<br>';
	echo 'End DB Display';
	echo '<br>';


?>
