<?php

$page = "
<!DOCTYPE html>
<html>

<head>
$pageData->css;
$pageData->embedded;
<title>$pageData->title</title>
</head>

<body>
$pageData->content
</body>
</html>"

?>