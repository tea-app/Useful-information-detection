<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <!-- jQuery -->
        <link href="reset.css" type="text/css" rel="stylesheet">
        <link href="scrol.js" type="text/javascript" rel="stylesheet">
        <link href="stylesheet.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="jquery.js" type="text/js" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class=container>
                <div class=header-list>
                    <a href="index.html">トップページ</a>
                </div>
                <div class=header-list>
                    <a>じゃんる</a>
                </div>
                <div class=header-list>
                    <a>interesting</a>
                </div>
                <div class=header-list>
                    <a>mod</a>
                </div>
                <div class=header-list>
                    <a>2チャンネル</a>
                </div>
            </div>
        </header>
        <div class=header-title>
            <p>タイトル</p>
        </div>
        <?php
             // JSONファイルのURL
		    $jsonUrl = "data.json";
		    // JSONファイルの中身を取得
		    $json = file_get_contents($jsonUrl);
		    // JSON($json)を連想配列に変換(デコード)する
		    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		    $array = json_decode( $json , true ) ;
		    // 配列の追加
		    array_push($array["title"], $_POST["title"]);
		    array_push($array["contents"], $_POST["contents"]);
		    // 連想配列をJSONファイルに出力する
		    $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
		    file_put_contents("data.json" , $json);
		    // 【重要！】ここから下に記事のタイトル内容を書いて欲しい！
		?>
        <div class=post>
            <div class=post-logo>
            　　<p>投稿</p>
            </div>
            <div class=post-title>
                <p>タイトル</p>
                <input type="text" name="example1" maxlength="20">
            </div>
            <div class=post-titleBox>
            </div>
            <div class=post-article>
                <p>記事</p>
                <textarea rows="4"cols="40">ここに記事をお書きください</textarea>
                <input type="button" value="投稿">
            </div>
            <div class=post-articleBox>
            </div>
        </div>
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        
        <!--js読み込み-->
        <a href="http://jquery.com/">jQuery</a>
        <link href="jquery.js" type="text/js" rel="stylesheet">
    </body>
</html>