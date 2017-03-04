<!DOCTYPE html>
<html>
<head></head>
<body>
 	<?php
 		/*-----初期化_開始-----*/
		
		// 連想配列($array)
		$array = array(
			"title" => ["タイトル1", "タイトル2"],
			"contents" => ["内容1", "内容2"]
		);

		// 連想配列($array)をJSONに変換(エンコード)する
		$json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
		
		// JSONファイルの出力
		file_put_contents("test.json" , $json);
		

		
		/*-----初期化_終了-----*/
 	
 		// JSONファイルのURL
		$jsonUrl = "test.json";
		
		// JSONファイルの中身を取得
		$json = file_get_contents($jsonUrl);
		
		// JSON($json)を連想配列に変換(デコード)する
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$array = json_decode( $json , true ) ;
    ?>
    
	<!-- 入力欄 -->
	<h1>タイトルを入力するんやでぇ！</h1>
	<form action="action.php" method="post">
    	<input type="text" name="title">
    <h1>内容を入力するさかい！はよぉ！</h1>
    	<textarea name="contents" cols="30" rows="5"></textarea>
    	<input type="submit" name="send" value="送信">
    </form>
    
    <?php
    	// 配列の追加
		array_push($array["title"], $_POST["title"]);
		array_push($array["contents"], $_POST["contents"]);
		
		
		// 連想配列をJSONファイルに出力する
		$json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
		file_put_contents("test.json" , $json);
    ?>	
        
    <p><?php echo $i ?></p>
    	
</body>
</html>