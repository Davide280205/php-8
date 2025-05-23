<?php

// Model: si occupa di interagire con il DB

// collego il file che crea la connessione al db
require_once __DIR__ . '/../config/db.php';


class Studente {

// Costruttore: quando creo un oggetto Studente salvo la connessione PDO
	public function __construct(){

		global $pdo;		// prendo la variabile $pdo definita in db.php
		$this->pdo = $pdo;	// La salvo dentro la mia classe


	}


// Restituisce tutti gli studenti
	public function tutti(){

		$sql = 'SELECT id, nome, cognome FROM studenti'; // SQL per prendere dati
		$risultato = $this->pdo->query($sql); // esegue la query
		return $risultato->fetchAll(); // Ritorna tutti i risultati

	}


	public function trovaPerId($id){

		// query con parametro
		$sql = "SELECT * FROM studenti WHERE id = ?";
		// preparo la query
		$query = $this->pdo->prepare($sql);

		// eseguo la query con il valore di id
		$query->execute([$id]);

		//ritorno il risultato (uno solo!)
		return $query->fetch();

	}


	// aggiunge un nuovo studente
	public function nuovo($nome, $cognome, $email, $telefono){

		$sql = $this->pdo->prepare("INSERT INTO studenti (nome, cognome, email, telefono) VALUES (?, ?, ?, ?)");

		return $sql->execute([$nome, $cognome, $email, $telefono]);


	}


	// aggiornare la scheda di uno studente

	public function aggiorna($id, $dati){


		$sql = "UPDATE studenti SET nome = ?, cognome = ?, email = ?, telefono = ? WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([

			$dati['nome'],
			$dati['cognome'],
			$dati['email'],
			$dati['telefono'],
			$id


		]);


	}



// elimina uno studente

	public function cancellaId($id){

		$sql = "DELETE FROM studenti WHERE id = ?";
		$query = $this->pdo->prepare($sql);
		$query->execute([$id]);


	}




}

