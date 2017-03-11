<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>glasoku</title>
        <link href="assets/css/reset.css" type="text/css" rel="stylesheet">
        <link href="assets/css/stylesheet.css" type="text/css" rel="stylesheet">
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
               <?php
                $count = 2;
               
            /*  ----初期化_開始----- 
            $_POST["title"]=null;
		    $_POST["contents"]=null;
		    // 連想配列($array)
		    $array = array(
			"title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
			"contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
			"goodNum" => [100, 2],
			"submissionTime" => ["10:35:32", "12:35:21"], //提出時間
			"remainingTime" => ["11:35:32", "13:35:21"], //消去時間
			//"maxComment" => [1, 1],
			//"comment" => ["最高！", "神！！", "ゴミ", "oppai"]
		    );
		    // 連想配列($array)をJSONに変換(エンコード)する
		    $commentNumson = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES ) ;
		    file_put_contents("data.json" , $commentNumson);
		     -----初期化_終了----- */
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
       ?>
        <div class=header-title>
            <p>Scientific Glasses 速報</p>
        </div>
        <div class=titles>
            <div class=title-box>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
                <a href="indexSub.php">睡眠は必要か不要か</a>
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
                                <?php echo $array["contents"][$titleNum]
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
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;
                                $second = true;
                                $third = true;
                                $forth = true;
                                $fifth = true;
                                $sixth = true;
                                $seventh = true;
                                $eighth = true;
                                $nineth = true;
                                $tenth = true;

                                //var_dump($_POST);
                                
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
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
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
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ２個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>">
                                <?php echo $array["contents"][$titleNum]
                                    //$commentNumZip = $commentNum + $array["maxComment"]["$titleNum"]; //3
                                    //for ($commentNum = $commentNum; $commentNum <=  $commentNumZip; $commentNum++) {
                                    //    echo $array["comment"][$commentNum];
                                    //}
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
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

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


                                  if (isset($_POST['second'])) {
                                    if ($_POST['second']) {//true or false

//                                       $array = array(
//                                         "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
//                                         "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
//                                         "goodNum" => [0, 0],
//                                         "submissionTime" => [$now],
//                                         "remainingTime" => [$limitTime]
//                                       );

                                      // 連想配列($array)をJSONに変換(エンコード)する
                                      $json = json_encode($array, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES);
                                      file_put_contents("data.json", $json);
                                    }

                                    $second = false;
                                  }

                                  $url = 'data.json';
                                  $now = file_get_contents($url);
                                  $json = mb_convert_encoding($now, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                                  $obj = json_decode($json,true);
                                  $now = Time::now();

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                               echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                               echo "終了時刻".$obj["remainingTime"][$titleNum];
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ３個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                //file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==2) {
                                    $limitTime = date('H:i:s', strtotime($now ."+ ". 1 ."hour"));

                                    $key = htmlspecialchars($_POST["send"], ENT_QUOTES, "UTF-8");
                                    
                                    
                                    // JSONファイルのURL
                                    $jsonUrl = "data.json";
                                    // JSONファイルの中身を取得
                                    $json = file_get_contents($jsonUrl);
                                    // JSON($json)を連想配列に変換(デコード)する
                                    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                                    $array = json_decode( $json , true ) ;
                                    

                                    if (isset($_POST['third'])) {
                                        if ($_POST['third']) {//true or false
                                            array_push($array["submissionTime"], $now);
                                            array_push($array["remainingTime"], $limitTime);
                                        
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

                                        $third = false;
                                    }


                                  $url = 'data.json';
                                  $now = file_get_contents($url);
                                  $json = mb_convert_encoding($now, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                                  $obj = json_decode($json,true);
                                  $now = Time::now();

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);
                                    
                                    /*
                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                    */
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ４個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==3) {
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

                                        /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==2) {
                                    $count++;   
                                }
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ５個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==4) {
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
                                    
                                    /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==3) {
                                    $count++;   
                                }
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ６個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==5) {
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
                                    
                                    /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==4) {
                                    $count++;  
                                }
                                
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ７個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==6) {
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

                                    /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==5) {
                                    $count++;   
                                }
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ８個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==7) {
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
                                        
                                        /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==6) {
                                    $count++;   
                                }
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- ９個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum] ?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==8) {
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

                                    /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==7) {
                                    $count++;   
                                }
                              ?>
                            </div>
                        </div>
                        <span class="good btn"><?php echo $array["goodNum"][$titleNum]?>いいね</span>
                    </div>
                </div>
                <div class=article>
                    <div class=text-box>
                        <div class=janleImage>
                        </div>
                        <div class=article-title>
                            <!-- １０個目 -->
                            <a href="indexSub.php?no=<?php $titleNum++; echo $titleNum; ?>"><?php echo $array["title"][$titleNum] ?></a>
                        </div>
                        <div class=article-wrap>
                            <a href="indexSub.php?no=<?php echo $titleNum ?>"><?php echo $array["contents"][$titleNum];?></a>
                        </div>
                        <div class=endTime>
                            <div class=endTime-box>
                              <?php
                                date_default_timezone_set('Asia/Tokyo');

                                require_once("Time.php");
                                require_once("KeepTime.php");
                                require_once("Keep.php");
                                // require_once("test.php");

                                file_get_contents('data.json');
                                $now = Time::now();
                                $first = true;

                                //var_dump($_POST);

                                if(isset($_POST["send"]) && $count==9) {
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
                                        
                                    /*
                                      $array = array(
                                        "title" => ["合宿所で!?カメムシ大量発生!!", "男は辛いよ"],
                                        "contents" => ["合宿所でカメムシが大量発生する事件が起きました。皆様電球の穴には気をつけて下さい!", "はい。そのまんま。男は辛いよ!"],
                                        "goodNum" => [0, 0],
                                        "submissionTime" => [$now],
                                        "remainingTime" => [$limitTime]
                                      );
                                      */

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

                                  switch($key){
                                    case "更新":
                                      break;
                                    case "増加":
                                    //$array["goodNum"][$_GET['no']]++;//limitを加算
                                      $array["goodNum"][$titleNum]++;
                                      $array["remainingTime"][$titleNum] = date('H:i:s', strtotime($array["submissionTime"][$titleNum] ."+ ". $array["goodNum"][$titleNum] ." minute"));
                                      //var_dump($array["goodNum"][0]);
                                      //var_dump($array["remainingTime"][0]);

                                    // 連想配列をJSONファイルに出力する
                                      $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
                                      file_put_contents("data.json" , $json);
                                      break;
                                    default:
                                      break;
                                  }
                                  //var_dump($first);
                                }
                                echo "提出時刻".$obj["submissionTime"][$titleNum]; //提出された時間
                                echo "終了時刻".$obj["remainingTime"][$titleNum];
                                
                                if(isset($_POST["send"]) && $count==8) {
                                    $count++;   
                                }
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
                <div class=post-titleBox>
                </div>
                <div class=post-article>
                    <p>記事</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ="post">
                        <textarea name="contents" rows="4"cols="40">ここに記事をお書きください</textarea>
                        <input type="submit" name="send" value="投稿">
                    </form>
                </div>
                <div class=post-articleBox>
                </div>
            </div>
        </form>
        <?php
        /*
                // 配列の追加
	            array_push($array["title"], $_POST["title"]);
	            array_push($array["contents"], $_POST["contents"]);
                // 連想配列をJSONファイルに出力する
	            $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
	            file_put_contents("data.json" , $json);
        
	        // 配列の追加
	        array_push($array["title"], $_POST["title"]);
	        array_push($array["contents"], $_POST["contents"]);
	        */
            // 連想配列をJSONファイルに出力する
	        $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
	        file_put_contents("data.json" , $json);
		?>
        <footer>
        </footer>
        <p id="pageTop"><a href="#"><i class="fa fa-chevron-up"></i></a></p>
        
        <!--js読み込み-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/scrol.js" type="text/javascript"></script>

    </body>
</html>
