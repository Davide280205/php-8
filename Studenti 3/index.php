<?php



require_once __DIR__ . '/controller/StudenteController.php';

$controller = new StudenteController();



$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;



if ($action ==='dettaglio' && $id) {

	$controller->dettaglio($id);

}

elseif($action==='modifica' && $id){

	$controller->modifica($id);

}

elseif($action==='loadForm'){

	$controller->loadForm();

}

elseif($action==='store'){

	$controller->store();

}

else{

	$controller->lista();

}