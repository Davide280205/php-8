<?php
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";

$pageData = new Page_Data();

$pageData->css = "<link href='css/layout.css' rel='stylesheet'>";

$pageData->title = "Corpus Davide portfolio";
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
$pageData->embeddedStyle = $style;

require "templates/page.php";

echo $page;

?>