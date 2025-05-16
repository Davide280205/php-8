<?php 
// studente e con la prima lettera maiuscola perche tutto una classe
//model


require_once __DIR__ . '/../config/db.php';

class Studente{
	//Costruttore, quando creo l'oggetto studente salvo la connessione pdo
	public function __construct(){
		global $pdo; //prendo variabile
		$this->pdo = $pdo; //salvo variabile
	}
	//Returna tutti gli studenti
	public function tutti(){
		$sql = 'SELECT id, nome, cognome FROM studenti'; //sql per prendere i dati
		$risultato = $this->pdo->query($sql); // eseque query
		return $risultato->fetchALL(); // returna i dati
	}
	public function trovaPerId($id){
		$sql = "SELECT * FROM studenti WHERE id = ?";
		$query = $this->pdo->prepare($sql);
		$query->execute([$id]);
		return $query->fetch();

	}

	public function nuovo($nome, $cognome, $email, $telefono, $eta){

		$sql = $this->pdo->prepare("INSERT INTO studenti (nome, cognome, email, telefono, eta) VALUES (?,?,?,?,?)");

		return $sql->execute([$nome, $cognome, $email, $telefono, $eta]);

	}

	//aggiornare scheda studente

	public function aggiorna($id, $dati){

		$sql = "UPDATE studenti SET nome = ?, cognome = ?, email = ?, telefono = ?, eta = ? WHERE id =  ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([

			$dati['nome'],
			$dati['cognome'],
			$dati['email'],
			$dati['telefono'],
			$dati['eta'],
			$id

		]);

	}

	//elimina uno studente

	public function cancellaId($id){

		$sql = "DELETE FROM studenti WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([$id]);

	}

}


 ?>