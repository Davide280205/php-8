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

    public function trovaPerId($id){

		$sql = "SELECT * FROM books WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([$id]);

		return $query->fetch();

	}

    public function cancellaId($id){

		$sql = "DELETE FROM books WHERE id = ?";

		$query = $this->pdo->prepare($sql);

		$query->execute([$id]);

	}

}