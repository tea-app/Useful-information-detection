<?php
//------------PDOでDB接続------------------//
//$pdo = new PDO('mysql:host=ホスト名;dbname=データベース名;charset=utf8','ユーザ名','パスワード')
$pdo = new PDO('mysql:host=localhost;dbname=prog24;charset=utf8','root','root');

$content = "test";

//------------データの追加：INSERT--------------//
//$変数 = $pdo->prepare("INSERT INTO テーブル名 (カラム名,カラム名・・・) VALUES (:カラム名, :カラム名)");
$stmt = $pdo->prepare("INSERT INTO test (content, test) VALUES (:content, :test)");
//$変数 -> bindParam('content', $カラム名, PDO::PARAM_型名);
$stmt -> bindParam(':content', $content, PDO::PARAM_STR);
//上記と同じことをカラム数に応じて追加(*ただし、カラムに応じて型名を変更)
$stmt -> bindParam(':test', $test, PDO::PARAM_INT);
//実行
$stmt ->execute();


//------------代表的な型名---------------------//
//PDO::PARAM_BOOL  (integer):ブールデータ型を表します。 
//PDO::PARAM_NULL  (integer):SQL NULL データ型を表します。 
//PDO::PARAM_INT   (integer):SQL INTEGER データ型を表します。 
//PDO::PARAM_STR   (integer):SQL CHAR, VARCHAR, または他の文字列データ型を表します。 
//PDO::PARAM_LOB   (integer):SQL ラージオブジェクト型を表します。 
//PDO::PARAM_STMT  (integer)
//PDO::PARAM_INPUT_OUTPUT (integer)パラメータがストアドプロシージャ用の入力パラメータであることを指定します。 この値はPDO::PARAM_* データ型とのビットORとして指定する必要があります。 


//-----------データの取得：ACQUISITION----------//
//$変数 = $pdo ->prepare("SELECT * FROM テーブル名 WHERE カラム名=:カラム名");
$stmt = $pdo -> prepare("SELECT * FROM mydata WHERE id=:id");
//$変数 -> bindValue(':カラム名', , PDO::PARAM_型名);
$stmt -> bindValue(':id', 1, PDO::PARAM_INT);
//実行
$stmt -> execute();
 
//if ($変数 = $stmt -> fetch()){
    //$変数 = $変数["取得したいデータ名??"];
    //取得したいデータをデータ数に応じて記述
//}
if ($rows = $stmt -> fetch()) {
    $name = $rows["name"];
    $age = $rows["age"];
}

//----------データの削除：DELETE----------------//
//$変数 = $pdo -> prepare("DELETE FROM データベース名 WHERE カラム名 = :daleteカラム名"); 
$stmt = $pdo -> prepare("DELETE FROM mydata WHERE id = :delete_id");
//$stmt -> bindValue('delete_id', 初期値??, PDO::PARAM_型名);
$stmt -> bindValue(':delete_id', $myid, PDO::PARAM_INT);
//実行
$stmt -> execute();

?>