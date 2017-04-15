<?php
require_once('./Database.php');

$db = new Database();

$all = $db->Acquisition();
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
                    <a>政治</a>
                </div>
                <div class=header-list>
                    <a>小説</a>
                </div>
                <div class=header-list>
                    <a>エンタメ</a>
                </div>
                <div class=header-list>
                    <a>アニメ・漫画</a>
                </div>
                <div class=header-list>
                    <a>ゲーム</a>
                </div>
                <div class=header-list>
                    <a>IT</a>
                </div>
                <div class=header-list>
                    <a>スポーツ</a>
                </div>
                <div class=header-list>
                    <a href="http://kemono-friends.jp">ふれんず</a>
                </div>
                <div class=header-list>
                    <a>その他</a>
                </div>
            </div>
        </header>
        <div class=header-title>
            <p>Scientific Glasses 速報</p>
        </div>
        <div class=titles>
            <div class=title-box>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                
            </div>
        </div>
        <div class=sidebar>
            <div class=sidebar-left>
                <div class=sidebar-box>
                </div>
            </div>
            <div class=sidebar-right>
                <div class=sidebar-box>
                </div>
            </div>
        </div>
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
            <?php foreach($all as $one) { ?>
                <div class=article>
                    <div class=text-box>
                        <div class=genreImage>
                        </div>
                        <div class=article-title>
                            <a href="article.php?article_id=<?php echo $one[0]//ID ?>"><?php echo $one[2]//タイトル; ?></a>
                        </div>
                        <div class=article-wrap>
                            <?
                                echo $one[3]; // 内容
                            ?>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                            </div>
                        </div>
                        <span class="good btn"> <?php?>いいね</span>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
       	<form action="add.php" method="post">
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
                        <textarea name="article_content" rows="4"cols="40" placeholder="ここに記事をお書きください"></textarea>
                        <input type="submit" name="send" href="article.php" value="投稿">
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
