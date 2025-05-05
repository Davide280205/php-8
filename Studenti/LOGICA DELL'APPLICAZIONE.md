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

A questo punto creo le due funzioni principali

```php

public function lista() {

    // recupera gli studenti dal modello
    $studenti = $this->studenteModel->tutti();

    // carica la vista della lista studenti
    require __DIR__ . '/../view/lista_studenti.php';

}

```

lista() richiama la funzione tutti() e contemporaneamente carica la view corretta.
Ecco perché il controller fa da ponte tra model e view.
Notare che qui la mia variabile si chiama $studenti (plurale).

```php

public function dettaglio($id) {

    // recupera i dettagli dello studente dal modello
    $studente = $this->studenteModel->trovaPerId($id);

    require __DIR__ . '/../view/dettaglio_studente.php';

}

```

dettaglio($id) chiama la funzione trovaPerId($id) presente sul model
e comtemporaneamente richiama la view opporrtuna: dettaglio_studente.php

Notare che qui la mia variabile si chiama $studente (singolare)

## INDEX

E' un file fondamentale, fa partire tutta l'applicazione, creando un istanza della classe StudenteController() che si trova in StudenteController.php.
Per far questo devo prima includere il file comtroller:

```php

require_once __DIR__ . '/controller/StudenteController.php';

```

index.php deve capire se caricare la lista di tutti gli elementi o solo il dettaglio del singolo stuente.

All'avvio dell'applicazione il browser carica semplicemente la lista con tutti gli studenti. Questo perché npn gli viene passato
via get nessun parametro, quindi viene attivato solo:

```php

else{

    $controller->lista();

}

```

Se però un utente clicca sul link 'dettaglio' ecco che nell'URL viene passato a index.php il parametro 'dettaglio' e 'id'.
In questo caso in index.php si attiva la prima parte dell'if:

```php

if ($action === 'dettaglio' && $id) {

    $controller->dettaglio($id)

}

```
