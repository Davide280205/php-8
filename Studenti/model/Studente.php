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

	public function trovaPerId($id) {

		// query con parametro

		$sql = "SELECT * FROM studenti WHERE id = ?";

		// preparo la query

		$query = $this->pdo->prepare($sql);

		// eseguo la query con il valore di id

		$query->execute([$id]);

		// ritorno il risultato (uno solo!)

		return $query->fetch();

	}

}

