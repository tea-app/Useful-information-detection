<?php

class Database
{
    
    private $stmt;
    private $rows;
    private $pdo;
    
   //------------PDOでDB接続------------------//
   //$pdo = new PDO('mysql:host=ホスト名;dbname=データベース名;charset=utf8','ユーザ名','パスワード')
  
    
    //クラスの中に直接処理を記述できないためコンスラクトのメソッドを書くと処理が実行される
    public function __construct() {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=glasses;charset=utf8','root','root');
        } catch (PDOException $e) {
            print 'データベース接続失敗。' . $e->getMessage(); //エラーコード
        }
    }
    
    //------------データの追加：INSERT--------------//
    //$変数 = $pdo->prepare("INSERT INTO テーブル名 (カラム名,カラム名・・・) VALUES (:カラム名, :カラム名)");
    //$変数 -> bindParam('content', $カラム名, PDO::PARAM_型名);
    //上記と同じことをカラム数に応じて追加(*ただし、カラムに応じて型名を変更)
    public function content($title, $article_content){
        $stmt = $this->pdo->prepare("INSERT INTO articles (title, article_content) VALUES (:title, :article_content)");
        //$stmt -> bindParam(':genre_id', $genre_id, PDO::PARAM_INT);
        $stmt -> bindParam(':title', $title, PDO::PARAM_STR);
        $stmt -> bindParam(':article_content', $article_content, PDO::PARAM_STR);
        return $stmt ->execute();//実行
    }
    
    
    //------------代表的な型名---------------------//
    //PDO::PARAM_BOOL  (integer):ブールデータ型を表します。
    //PDO::PARAM_NULL  (integer):SQL NULL データ型を表します。 
    //PDO::PARAM_INT   (integer):SQL INTEGER データ型を表します。 
    //PDO::PARAM_STR   (integer):SQL CHAR, VARCHAR, または他の文字列データ型を表します。 
    //PDO::PARAM_LOB   (integer):SQL ラージオブジェクト型を表します。 
    //PDO::PARAM_STMT  (integer):
    //PDO::PARAM_INPUT_OUTPUT (integer)パラメータがストアドプロシージャ用の入力パラメータであることを指定します。 
    //この値はPDO::PARAM_* データ型とのビットORとして指定する必要があります。
    
    
    //-----------データの取得：ACQUISITION----------//
    //$変数 = $this->pdo -> prepare("SELECT * FROM テーブル名 WHERE カラム名=:カラム名");
    //$変数 -> bindValue(':カラム名', , PDO::PARAM_型名);
    //$stmt -> execute();//実行       
    public function Acquisition(){
        $this->stmt = $this->pdo -> prepare("SELECT * FROM articles");
        $this->stmt -> execute();//実行
        return $this->stmt -> fetchAll();
    }
    //if ($変数 = $stmt -> fetch()){
    //$変数 = $変数["取得したいデータ名??"];
    //取得したいデータをデータ数に応じて記述
    //}
    
    
    //----------データの削除：DELETE----------------//
    //$変数 = $pdo -> prepare("DELETE FROM データベース名 WHERE カラム名 = :daleteカラム名"); 
    //$stmt -> bindValue('delete_id', 初期値??, PDO::PARAM_型名);
    public function delete() {
        $stmt = $this -> $pdo -> prepare("DELETE FROM mydata WHERE id = :delete_id");
        $stmt -> bindValue(':delete_id', $myid, PDO::PARAM_INT);    
        $stmt -> execute();//実行
    }
}


?>