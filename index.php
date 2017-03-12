<?php
$count = 2;
// JSONファイルのURL
$commentNumsonUrl = "data.json";
// JSONファイルの中身を取得
$commentNumson = file_get_contents($commentNumsonUrl);
// JSON($commentNumson)を連想配列に変換(デコード)する
$commentNumson = mb_convert_encoding($commentNumson, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$array = json_decode( $commentNumson , true ) ;
// タイトル番号（ページによって変える必要あり）
$titleNum = 0;
// コメント用番号（ページによって変える必要あり）
$commentNum = 0;
$commentNumZip = 0;
// 配列の追加
if ($_POST["title"] != null) {
    array_push($array["title"], $_POST["title"]);
    array_push($array["contents"], $_POST["contents"]);
    // 連想配列をJSONファイルに出力する
    $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
    file_put_contents("data.json" , $json);
}

// 連想配列をJSONファイルに出力する
$json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
file_put_contents("data.json" , $json);
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
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- １個目 -->
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>">
                                <?php echo $array["contents"][$titleNum];
                                   // for ($commentNum = $commentNum; $commentNum <= $array["maxComment"][$commentNum]; $commentNum++) {
                                   //     echo $array["comment"][$commentNum];
                                   // }
                                ?>
                            </a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                                <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");

                                file_get_contents('data.json');
                                $now    = Time::now();
                                $first  = true;
                                
                                /////// when run send 
                                if(isset($_POST["send"])) {
                                    $limitTime = date('H:i:s', strtotime($now ."+ ". 1 ."hour"));

                                    $key = htmlspecialchars($_POST["send"], ENT_QUOTES, "UTF-8");
                                    // JSONファイルのURL
                                    $jsonUrl = "data.json";
                                    // JSONファイルの中身を取得
                                    $json = file_get_contents($jsonUrl);
                                    // JSON($json)を連想配列に変換(デコード)する
                                    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                                    $array = json_decode( $json , true ) ;


                                    if (isset($_POST['first'])) {
                                        if ($_POST['first']) {//true or false

                                            $array = array(
                                                "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                                "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                                "goodNum" => [0, 0],
                                                "submissionTime" => [$now],
                                                "remainingTime" => [$limitTime]
                                            );

                                            // 連想配列($array)をJSONに変換(エンコード)する
                                            $json = json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES);
                                            file_put_contents("data.json", $json);
                                        }

                                        $first = false;
                                    }

                                    $url = 'data.json';
                                    $now = file_get_contents($url);
                                    $json = mb_convert_encoding($now, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                                    $obj = json_decode($json,true);
                                    $now = Time::now();

                                    switch($key) {
                                        case "更新":
                                            break;
                                        case "増加":
                                            $array["goodNum"][$titleNum]++;
                                            $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));

                                        // 連想配列をJSONファイルに出力する
                                            $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                            file_put_contents("data.json" , $json);
                                            break;
                                        default:
                                            break;
                                    } 
                                }
                                ///////
                                
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                ?>

                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
            </div>
        </div>
       	<form action="index.php" method="post">
            <div class=post>
                <div class=post-logo>
                    <p>投稿</p>
                </div>
                <div class=post-title>
                    <p>タイトル</p>
                    <input type="text" name="title" maxlength="20">
                </div>
                <div class=post-article>
                    <p>記事</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                        <textarea name="contents" rows="4"cols="40">ここに記事をお書きください</textarea>
                        <input type="submit" name="send" value="投稿">
                    </form>
                </div>
            </div>
        </form>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>        
        <!--js読み込み-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/pagetop.js" type="text/javascript"></script>
    </body>
</html>
