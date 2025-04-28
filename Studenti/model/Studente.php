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