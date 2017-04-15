<?php
require_once('./Database.php');

$db = new Database();

//var_dump($db);

$all = $db->Acquisition();


foreach($all as $one){
    echo "<pre>";
    var_dump($one[0][0]);
    echo "</pre>";
}

//echo "<pre>";
//$article_id = $all[0][0];
//echo $article_id;
////var_dump($all[0]);
//echo "</pre>";
//
//echo "<pre>";
//var_dump($all);
//echo "</pre>";
$>