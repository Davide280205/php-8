<?php
require_once __DIR__ . '/controller/OperaController.php';

$controller = new OperaController();


$action = $_GET['action'] ?? 'lista';
$id = $_GET['id'] ?? null;

// mostra dettaglio opera
if ($action === 'dettaglio' && $id) {
    
    $controller->dettaglio($id);

} 

// modifica dell'opera
elseif ($action === 'modifica' && $id) {
    $controller->modifica($id);
} 

// aggiunge opera
elseif ($action === 'loadForm') {
    $controller->loadForm();
}

//registra la nuova opera
elseif ($action === 'store') {
    $controller->store();
}


//elimina opera

elseif ($action === 'elimina') {
    $controller->elimina($id);
}

elseif ($action === 'destItalia') {
    $controller->destItalia($id);

}



// in tutti gli altri casi mostra l'elenco delle opere.
else {
    $controller->lista();
}









