<?php
require_once('./Database.php');
require_once('./databaseComment.php');
$dbc = new DatabaseComment();
$db = new Database();
$allc = $dbc->Acquisition();
$all = $db->Acquisition();
$article_id = $_GET['article_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>グラ速</title>
        <!-- jQuery -->
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
<!--        <link href="assets/css/index.css" type="text/css" rel="stylesheet">-->
        <link href="assets/css/article.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--ここからヘッダー-->
        <header>
            <div class = "container">
                <div class = "header-list selected"> <a href="index.php">トップページ</a> </div>
                <div class = "header-list"> <a>政治</a> </div>
                <div class = "header-list"> <a>小説</a> </div>
                <div class = "header-list"> <a>エンタメ</a> </div>
                <div class = "header-list"> <a>アニメ・漫画</a> </div>
                <div class = "header-list"> <a>ゲーム</a> </div>
                <div class = "header-list"> <a>IT</a> </div>
                <div class = "header-list"> <a>スポーツ</a> </div>
                <div class = "header-list"> <a>フレンズ</a> </div>
                <div class = "header-list"> <a>その他</a> </div>
            </div>
        </header>
        <!--ここからページタイトル-->
        <div class = "top">
            <div class = "title-box">
                <p>Scientific Glasses 速報</p> 
            </div>
        </div>
        <!--ここからメイン-->
        <div class = "main">
            <div class = "article-container">
                <!--ここからメインボックス-->
<!--
                <div class = "main-box">
                    記事ボックス
                    <div class = "article-box">
                    </div>
                </div>
-->
                <!--ここから記事欄-->
                <div class = "articles">
                    <!--ここから記事バー-->
                    <div class = "article-bar">
                        <p>＜人気記事＞</p>
                    </div>
                    <!--ここから記事-->
                    <div class = "article-list">
                        <?php foreach($all as $one) { if ($one[0] == $_GET['article_id']) { ?>
                        <!--ここから記事欄-->
                        <div class=article>
                            <div class=article-title>
                                <p> <?php echo $one[2]; // 記事タイトル ?></p>
                            </div>
                            <div class=article-content>
                                <p> <?php echo $one[3]; // 記事内容 ?></p>
                            </div>
    <!--
                                    <form action="" method="post">
                                        <input type="submit" name="send" value="いいね">
                                    </form>
    -->
                        </div>
                        <?php } }?>
                    </div>
                    <!--ここからコメント-->
                    <div class=comments>
                        <div class = "comment-logo"> <a>コメント一覧 </a></div>
                        <div class=comment-list>
                            <!--ここからコメント-->
                            <?php foreach($allc as $one) { if ($one[1] == $_GET['article_id']) { ?>

                                <div class=content-box>
                                    <p> <?php echo $one[3]; // コメント内容 ?></p>
                                </div>
                            <?php } }?>
                        </div>
                    </div>
                    <!--ここからコメント投稿-->
                    <form action="addComment.php?article_id=<?php echo $article_id ?>" method="post">
                        <div class=post>
                            <div class=post-logo>
                                <p>コメント投稿</p>
                            </div>
                            <div class=post-article>
                                <p>コメント</p>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                                    <textarea name="comment" rows="4"cols="40" placeholder="ここにコメントをお書きください"></textarea>
                                    <input type="submit" name="send" onclick="location.reload(true);" value="投稿">
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <!--ここから偽広告などなど-->
                <div class = "sideBar">
                    <div class = "tagFirst-box"> 
                        <div class = "tagFirst"> 
                            <p>＜PR＞</p> 
                        </div>
                        <div class = "fakeAdvertisement-first">
                        </div>
                    </div>
                    <div class = "tagSecond-box">
                        <div class = "tagSecond"> 
                            <p>＜PR＞</p> 
                        </div> 
                        <div class = "fakeAdvertisement-second"></div>
                    </div>
                    <div class = "profile-box">
                        <div class = "profile-bar"> 
                            <p>＜管理人＞</p> 
                        </div>
                        <div class = "profile"></div>
                    </div>
                </div>
<!--
                ここから投稿ボタン
                <div class = "post-box">
                    <div class = "post-btn"> <a>投稿ページへ</a> </div>
                </div>
-->
            </div>
        </div>
        <!--ここからフッター-->
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        <!--js読み込み-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="assets/js/pagetop.js" type="text/javascript"></script>
    </body>
</html>