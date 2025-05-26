<?php

require_once __DIR__ . '/controllers/bookController.php';

$controller = new BookController();

$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;


if ($action ==='dettaglio' && $id) {

	$controller->dettaglio($id);

}elseif($action==='loadForm'){

	$controller->loadForm();

}elseif($action==='store'){

	$controller->store();

}elseif($action==='elimina'){

	$controller->elimina($id);

}else{

	$controller->lista();

}