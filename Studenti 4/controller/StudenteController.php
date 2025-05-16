<?php 

require_once __DIR__ . "/../model/Studente.php";

class StudenteController {
	private $studenteModel;
	public function __construct(){
		$this->studenteModel = new Studente();
	}
	public function lista(){
		//recupera gli studenti dal modello
		$studenti = $this->studenteModel->tutti();
		//carica la vista della lista studenti
		require __DIR__ . "/../view/lista_studenti.php";
	}
	public function dettaglio($id){
		$studente = $this->studenteModel->trovaPerId($id);
		require __DIR__ . "/../view/dettaglio_studente.php";
	}

	public function loadForm(){

		require __DIR__ . "/../view/aggiungi_studente.php";

	}

	public function store(){
//isset controlla se la variabile esiste ed e impostata
		if(isset($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono'], $_POST['eta'])){

			$this->studenteModel->nuovo($_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['telefono'], $_POST['eta']);

		}

		header("Location: index.php");

	}


	public function modifica($id){

		if($_SERVER['REQUEST_METHOD'] === 'POST'){

			$dati = [

				'nome' => $_POST['nome'],

				'cognome' => $_POST['cognome'],

				'email' => $_POST['email'],

				'telefono' => $_POST['telefono'],

				'eta' => $_POST['eta']

			];

			$this->studenteModel-> aggiorna($id, $dati);

			header("Location: index.php");

			exit;

		}else{

			$studente = $this->studenteModel->trovaPerId($id);

			require __DIR__ . '/../view/modifica_studente.php';

		}

	}

	public function elimina($id){

		$this->studenteModel->cancellaId($id);

		header("Location: index.php");

	}

}

 ?>