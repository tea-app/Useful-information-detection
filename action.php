<html>
<head></head>
<body>
	<?php 
		// JSONファイルのURL
		$jsonUrl = "test.json";
		
		// JSONファイルの中身を取得
		$json = file_get_contents($jsonUrl);
		
		// JSON($json)を連想配列に変換(デコード)する
		$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$array = json_decode( $json , true ) ;
	?>
	
	<!-- 表示 -->
	<h1>タイトルやでぇ！！！</h1>
	<!-- <p><?php echo $array["title"][2]?></p> --> 
	<p><?php echo $_POST["title"]?></p>
	
	<h1>内容っぽい！？</h1>
	<!-- <p><?php echo $array["contents"][2]?></p> -->
	<p><?php echo $_POST["contents"]?></p>
</body>
</html>