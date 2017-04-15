<?php
/*
    記事追加
*/

require_once('./Database.php');

$db = new Database();


$title = $_POST['title'];

$article_content = $_POST['article_content'];


$db->content($title, $article_content);

header('Location: article.php');
exit;
?>