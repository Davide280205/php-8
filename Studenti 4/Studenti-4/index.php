<?php



require_once __DIR__ . '/controller/StudenteController.php';

$controller = new StudenteController();



$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;


// mostra dettaglio studente
if ($action ==='dettaglio' && $id) {

	$controller->dettaglio($id);

} 

// modifica uno studente
elseif($action==='modifica' && $id){

	$controller->modifica($id);

}

// aggiunge nuovo studente
elseif($action==='loadForm'){

	$controller->loadForm();

}

// registra il nuovo studente
elseif($action==='store'){

	$controller->store();

}// elimina uno studente
elseif($action==='elimina'){

	$controller->elimina($id);

}else{

	$controller->lista();

}