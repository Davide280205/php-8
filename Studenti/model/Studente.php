<?php

    // Model: si occupa di interagire con il DB

    require_once __DIR__ . '/../config/db.php';

    class Studente {

        // Costruttore: quando creo un oggetto Studente salvo la connessione PDO

        public function __construct(){

            global $pdo;            // prendo la variabile $pdo definita in db.php
            $this->pdo = $pdo;      // la salvo dentro la mia classe

        }

    }

    // Restituisce tutti gli studenti

    public function tutti(){

        $sql = 'SELECT id, nome, cognome FROM studenti';    // SQL per prendere i dati
        $risultato = $this->pdo->query($sql);   // esegue la query
        return $risultato->fetchAll();  // ritorna tutti i risultati        

    }

?>