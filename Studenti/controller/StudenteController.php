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





}