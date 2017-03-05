<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <!-- jQuery -->
        <link href="reset.css" type="text/css" rel="stylesheet">
        <link href="scrol.js" type="text/javascript" rel="stylesheet">
        <link href="stylesheet.css" type="text/css" rel="stylesheet">
        <link href="stylesheetSub.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="jquery.js" type="text/js" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class=container>
                <div class=header-list>
                    <a href="index.php">トップページ</a>
                </div>
                <div class=header-list>
                    <a>じゃんる</a>
                </div>
                <div class=header-list>
                    <a>ニュース</a>
                </div>
                <div class=header-list>
                    <a>おもしろ画像</a>
                </div>
                <div class=header-list>
                    <a>動画</a>
                </div>
                <div class=header-list>
                    <a>アニメ</a>
                </div>
                <div class=header-list>
                    <a>萌え</a>
                </div>
                <div class=header-list>
                    <a>政治・経済</a>
                </div>
                <div class=header-list>
                    <a href="http://kemono-friends.jp">ふれんず</a>
                </div>
                <div class=header-list>
                    <a>アダルト</a>
                </div>
            </div>
        </header>
        <div class=header-title>
            <p>Scientific Glasses 速報</p>
        </div>
        <diV class=sidebar>
            <div class=sidebar-left>
                <div class=sidebar-box>
                </div>
            </div>
            <div class=sidebar-right>
                <div class=sidebar-box>
                </div>
            </div>
        </diV>
        <div class=design>
            <div class=side-tagFirst>
                <p>＜PR＞</p>
            </div>
            <div class=side-tagSecond>
                <p>＜PR＞</p>
            </div>
            <div class=fakeAdvertisement>
                <div class=fakeAdvertisement-first>
                </div>
                <div class=fakeAdvertisement-second>
                </div>
            </div>
        </div>
        <div class=producerProfile>
            <div class=producerProfile-bar>
                <p>管理人</p>
            </div>
            <div class=producerProfile-container>
            </div>
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
        <div class=articles>
            <div class=containerArea>
                 <div class=title-box>
                    <?php echo $array["title"][$_GET['no']] ?>
                 </div>
                 <div class=article-box>
                    <?php echo $array["contents"][$_GET['no']] ?>
                 </div>
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