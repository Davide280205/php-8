<?php

require_once __DIR__ . '/../model/Studente.php';


class StudenteController {

	// variabile per il modello Studente
	private $studenteModel;



	public function __construct(){

		// crea l'oggetto Studente 
		$this->studenteModel = new Studente();

	}

// Metodo per visualizzare lista di tutti gli studenti
	public function lista() {


		// Recupera gli studenti dal modello
		$studenti = $this->studenteModel->tutti();


		// carica la vista della lista studenti
		require __DIR__ . '/../view/lista_studenti.php';




	}


	public function dettaglio($id) {

		// recupero i dati dello studente dal modello

		$studente = $this->studenteModel->trovaPerId($id);

		require __DIR__ . '/../view/dettaglio_studente.php';

	}

	public function loadForm(){

		require __DIR__ . "/../view/aggiungi_studente.php";
	
	}

	public function store(){

		if (isset($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono'])){

			$this->studenteModel->nuovo($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono']);

		}

		header("Location: index.php");

	}

}