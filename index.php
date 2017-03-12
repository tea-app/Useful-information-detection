<?php
// jsonファイルのみを全て取得
$dbDir      = __DIR__ . '/database';
$regex      = '/[0-9]+\.json$/';
$files      = scandir($dbDir);
$jsonFiles  = preg_grep($regex, $files);

// jsonをエンコードし、配列に格納
$articles = [];
foreach($jsonFiles as $jsonFile) {
    $path       = $dbDir . '/'. $jsonFile;
    $json       = file_get_contents($path);
    $articles[] = json_decode($json);
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="assets/css/index.css" type="text/css" rel="stylesheet">
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
                    <a>声優</a>
                </div>
                <div class=header-list>
                    <a>政治・経済</a>
                </div>
                <div class=header-list>
                    <a href="http://kemono-friends.jp">ふれんず</a>
                </div>
                <div class=header-list>
                    <a>Amazon</a>
                </div>
            </div>
        </header>
        <div class=header-title>
            <p>Scientific Glasses 速報</p>
        </div>
        <div class=titles>
            <div class=title-box>
                <?php foreach(range(0, 9) as $i) { ?>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <?php } //endforeach ?>
            </div>
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
            <div class=main-bar>
                <p>＜人気記事まとめ＞</p>
            </div>
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
        <div class=articles>
            <div class=container-article>
            <?php foreach($articles as $article) { ?>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <a href="#"><?php echo $article->title; ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="#"><?php echo $article->contents; ?> </a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                                <!-- TODO: 提出時刻/終了時刻 -->
                            </div>
                        </div>
                        <span class="good btn"> <?php echo $article->good; ?>いいね</span>
                    </div>
                </div>
            <?php } //endforeach ?>
            </div>
        </div>
       	<form action="post.php" method="post">
            <div class=post>
                <div class=post-logo>
                    <p>投稿</p>
                </div>
                <div class=post-title>
                    <p>タイトル</p>
                    <input type="text" name="title" maxlength="20" placeholder="タイトル">
                </div>
                <div class=post-article>
                    <p>記事</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                        <textarea name="contents" rows="4"cols="40" placeholder="ここに記事をお書きください"></textarea>
                        <input type="submit" name="send" value="投稿">
                    </form>
                </div>
            </div>
        </form>
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>        
        <!--js読み込み-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="assets/js/pagetop.js" type="text/javascript"></script>
    </body>
</html>
