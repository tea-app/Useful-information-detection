<?php

// validate
$validate = false;
if (isset($_POST['title']) && isset($_POST['contents'])) {
    if (($_POST['title'] !== '') && ($_POST['contents'] !== '')) {
        $validate = true;
    }
}

if ($validate) {
    $title      = $_POST['title'];
    $contents   = $_POST['contents'];
} else {
    header('Location: index.php');
    exit;
}

// pass validate

// jsonファイルのみを全て取得
$dbDir      = __DIR__ . '/database';
$regex      = '/[0-9]+\.json$/';
$files      = scandir($dbDir);
$jsonFiles  = preg_grep($regex, $files);

// calc latest id.
$latestId = 0;
foreach($jsonFiles as $jsonFile) {
    $id = intval(explode('.json', $jsonFile)[0]);
    $latestId = ($id > $latestId) ? $id : $latestId;
}

// configure json data.
$dateFormat = 'Y-m-d H:i:s';
$now        = date($dateFormat);
$filename   = ($latestId + 1) . '.json';
$path       = __DIR__ . '/database/' . $filename; 
$article['title']       = $title;
$article['contents']    = $contents;
$article['good']        = 0;
$article['created_at']  = $now;
$article['remained_at'] = date($dateFormat, strtotime($now. ' + 1 days'));

$json = json_encode($article , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);		
file_put_contents($path, $json);		

// return index.php
header('Location: index.php');
exit;