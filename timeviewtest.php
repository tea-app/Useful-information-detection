<?php
  date_default_timezone_set('Asia/Tokyo');

  require_once("Time.php");
  require_once("KeepTime.php");
  require_once("Keep.php");
  // require_once("test.php");

  file_get_contents('data.json');
  $now = Time::now();
  $first = true;

  var_dump($_POST);

  if(isset($_POST["btn"])) {
    $limitTime = date('H:i:s', strtotime($now ."+ ". 1 ."minute"));

    $key = htmlspecialchars($_POST["btn"], ENT_QUOTES, "UTF-8");
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

    switch($key){
      case "更新":
        break;
      case "増加":
      //$array["goodNum"][$_GET['no']]++;//limitを加算
        $array["goodNum"][0]++;
        $array["remainingTime"][0] = date('H:i:s', strtotime($array["submissionTime"][0] ."+ ". $array["goodNum"][0] ." minute"));
        var_dump($array["goodNum"][0]);
        var_dump($array["remainingTime"][0]);

      // 連想配列をJSONファイルに出力する
        $json = json_encode( $array , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES ) ;
        file_put_contents("data.json" , $json);
        break;
      default:
        break;
    }

    echo "提出時刻".$obj["submissionTime"][0];//提出された時間
    echo "終了時刻".$obj["remainingTime"][0];

    var_dump($first);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ボタン</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="submit" value="更新" name="btn">
    <input type="submit" value="増加" name="btn">
    <input type="hidden" value="<?php echo $first; ?>" name="first">

  </form>
</body>
</html>
