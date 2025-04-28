<?php

    require_once __DIR__ . '/controller/StudenteController.php';

    $controller = new StudenteController();

    $action = $_GET['action'] ?? 'lista';

    if ($action === 'nostraAzione') {

        // fai qualcosa

    }else{

        $ontroller->lista();

    }

?>