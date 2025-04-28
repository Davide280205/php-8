<?php

    require_once __DIR__ . '/../model/Studente.php';

    class StudenteController {

        // variabile per il modello studente
        // private significa che la variabile funziona solo in questa pagina per motivi di sicurezza

        private $studenteModel;

        public function __construct(){

            // creo l'oggetto studente

            $this->studenteModel = new Studente();

        }

        // è il metodo per visualizzare la lista di tutti gli studenti

        public function lista() {

            //recupera gli studenti dal modello

            $studenti = $this->studenteModel->tutti();

            // carica la vista della lista studenti

            require __DIR__ . '/../view/lista_studenti.php';

        }

    }

?>
