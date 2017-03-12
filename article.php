<?php
// validate
$validate = false;
if (isset($_GET['id'])) {
    if (($_GET['id'] !== '')) {
        $validate = true;
    }
}

if ($validate) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
    exit;
}

// pass validate

// get article json file
$filename   = $id . '.json';
$path       = __DIR__ . '/database/' . $filename;
$json       = file_get_contents($path);
$article    = json_decode($json);

// not found data
if (! $article) {
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <!-- jQuery -->
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
        <link href="assets/css/index.css" type="text/css" rel="stylesheet">
        <link href="assets/css/article.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
        <div class=articles>
            <div class=containerArea>
                 <div class=title-box>
                    <?php echo $article->title; ?>
                 </div>
                 <div class=article-box>
                    <?php echo $article->contents; ?>
                 </div>
                <form action="" method="post">
                    <input type="submit" name="send" value="いいね">
                </form>
            </div>
        </div>
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        <!--js読み込み-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/pagetop.js" type="text/javascript"></script>
    </body>
</html>