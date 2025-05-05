# LOGICA DELL'APPLICAZIONE

## config/db.php

File che consente di collegarsi al DB

## MODEL

Per collegarsi al DB il model deve includere il file db.php, ecco perché inserisco:

```php

// collego il file che crea la connessione al DB
require_once __DIR__ . '/../config/db.php';

```

Il tema principale della nostra app sono gli studenti.
Quindi è logico creare una classe 'Studente' che ha i metodi principali legati a quello che deve ottenere:

- function tutti() per mostrare tutti gli studenti
- function trovaPerId($id) per mostrare il singolo studente

## CONTROLLER

Il controller fa da ponte tra il model e view e gestisce tutta la logica.

Per collegarsi al model deve includere un file che si chiama Studente.php ecco perché prima di tutto inserisco:

```php

require_once __DIR__ . '/../model/Studente.php';

```

Anche qui dobbiamo creare una classe: StudenteController con due metodi proncipali:

- function lista() che richiama -> tutti()
- function dettaglio ($id) che richiama -> trovaPerId($id)

E' importante notare che la classe StudenteController deve creare una nuova
istanza della classe Studente che si trova nel file incluso Studente.php.
Ecco perché inserisco questo codice:

```php

public function__contruct(){

    // crea l'oggetto Studente
    $this->studenteModel = new Studente();

};

```