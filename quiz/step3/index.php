<?php

include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Form with php";

// mette la navigazione nel contenuto
$pageData->content = $nav;

$pageData->content .= "<div>...ed anche un form, proprio qui.</div>";

//aggiunta

$navigationIsClicked = isset($_GET['page']);

if ($navigationIsClicked){

    $fileToLoad = $_GET['page'];

}else{

    $fileToLoad = "search";

}

    include_once "views/$fileToLoad.php";

    $pageData->content .= $info;


require "templates/page.php";
echo $page;
?>
