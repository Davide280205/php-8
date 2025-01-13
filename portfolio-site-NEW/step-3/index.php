<?php
include_once "views/navigation.php";
$pageData = new stdClass();
$pageData->title = "Lars Godeassi portfolio";
//mette la navigazione nel contenuto
$pageData->content = $nav;

//intercetta la variabile URL
$navigatioIsClicked = isset($_GET['page']);

if ($navigatioIsClicked) {

    $fileToLoad = $_GET['page'];
    $pageData->content .= "<p>presto caricheremo $fileToLoad</p>";
}

require "templates/page.php";

echo $page

?>