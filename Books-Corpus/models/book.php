<?php

require_once __DIR__ . '/../config/database.php';

class Book {

	public function __construct(){

		global $pdo;
		$this->pdo = $pdo;

	}

    public function tutti(){

		$sql = 'SELECT id, titolo, autore, anno, stato FROM books ORDER BY id DESC';
		$risultato = $this->pdo->query($sql);
		return $risultato->fetchAll();

	}

	public function libriLetti(){

		$sql = 'SELECT id, titolo, autore, anno, stato FROM books WHERE stato = "letto" ORDER BY id DESC';
		$risultato = $this->pdo->query($sql);
		return $risultato->fetchAll();

	}

	public function libriNonLetti(){

		$sql = 'SELECT id, titolo, autore, anno, stato FROM books WHERE stato = "non letto" ORDER BY id DESC';
		$risultato = $this->pdo->query($sql);
		return $risultato->fetchAll();

	}

    public function trovaPerId($id){

		$sql = "SELECT * FROM books WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([$id]);

		return $query->fetch();

	}

		public function nuovo($titolo, $autore, $anno, $stato){

		$sql = $this->pdo->prepare("INSERT INTO books (titolo, autore, anno, stato) VALUES (?, ?, ?, ?)");

		return $sql->execute([$titolo, $autore, $anno, $stato]);


	}

		public function aggiorna($id, $dati){


		$sql = "UPDATE books SET titolo = ?, autore = ?, anno = ?, stato = ? WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([

			$dati['titolo'],
			$dati['autore'],
			$dati['anno'],
			$dati['stato'],
			$id


		]);


	}

	public function cancellaId($id){

		$sql = "DELETE FROM books WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([$id]);

	}

}