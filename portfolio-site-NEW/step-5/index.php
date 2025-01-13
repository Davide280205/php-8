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
    
}else{

    $fileToLoad = "home";
}

include_once "views/$fileToLoad.php";

$pageData->content .= $info;

require "templates/page.php";

echo $page

?>