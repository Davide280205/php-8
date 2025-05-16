<?php


require_once __DIR__ . "/controller/StudenteController.php";

$controller = new StudenteController();

$action = $_GET['action'] ?? "lista";
$id = $_GET["id"] ?? null;


if ($action ==="dettaglio" && $id){			// Mostra dettaglio studente
	$controller->dettaglio($id);

}elseif ($action==='modifica' && $id){		// Modifica un studente

	$controller->modifica($id);			
	
}elseif ($action==='elimina' && $id){		// Modifica un studente

	$controller->elimina($id);			
	
}elseif ($action==='loadForm'){				// Aggiunge uno studente

	$controller->loadForm();
	
}elseif ($action==='store'){				// Immagazina uno Studente

	$controller->store();
	
}else {
	
	$controller->lista();

}


 ?>