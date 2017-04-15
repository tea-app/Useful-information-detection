<?php
/*
    コメント追加
*/
require_once('./databaseComment.php');

$db = new DatabaseComment();

$article_id = 1; //記事ごとのID追加
$comment = $_POST['comment'];

$db->addComment($article_id, $comment);

header('Location: article.php');
exit;
?>