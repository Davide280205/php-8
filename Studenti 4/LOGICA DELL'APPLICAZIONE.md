#LOGICA DELL'APPLICAZIONE

## config/db.php
file che consente di collegarsi al db.

## model/Studente.php
per collegarsi al db il model deve includewre il file db.php, ecco perché inserisco:


```php

/// collego il file che crea la connessione al db
require_once __DIR__ . "/../config/db.php"

```

il tema princiaple della nostra app sono gli studenti. quindi èlogico creare una classe "studente" che i metodi principali legati a quello che devo ottenere

- function tutti() per mostrare tutti gli studenti
- function trovaperid($id) per mostrare il singolo studente

il controller fa da ponte tra model e view e gestisce tutta la logica.  

```php

require_once __DIR__ . "/../model/Studente.php"

```
anche qui creaiamo una classe: StudenteController con due metodi principali
- function lista() che richiama tutti()
- function dettaglio($id) che richiama -> trovaperid($id)

è importante notare che la classe StudenteController deve creare una nuova istanza della classe Studente che si trova nel file incluso Studente.php 
quindi ecco perché inserisco questo codice:
```php

public function __construct(){
		$this->studenteModel = new Studente();
	}

```
a questo punto creo le due funzioni principali

```php

public function lista(){
		//recupera gli studenti dal modello
		$studenti = $this->studenteModel->tutti();
		//carica la vista della lista studenti
		require __DIR__ . "/../view/lista_studenti.php";
	}

```
lista() richiama la funzione tutti() e contemporaneamente carica la view corretta; ecco perché il controller fa da ponte tra model e view. notare che qui la mia variabile si chiama $studenti (plurale) 

```php

public function dettaglio($id){
		$studente = $this->studenteModel->trovaPerId($id);
		require __DIR__ . "/../view/dettaglio_studente.php";
	}

```
dettaglio($id) chiama la funzione trovaperid($id) presente sul model e contemporaneamente richiama la view opportuna che si chiama dettaglio_studente.php notare CHE qui la mia variabile si chiama studentE (singolare)

## index.php
è un file fondamentale, fa partire tutta l'applicazione creando un'istanza della classe StudenteController() che si trova in StudenteController.php per far questo devo prima includere StudenteController.php
```php

require_once __DIR__ . "/controller/StudenteController.php";

```
index.php deve capire se caricare la lista di tutti gli studenti o solo il dettaglio del singolo stundente.

all'avvio dell'applicazione il browser carica semplicemente la lista con tutti gli studenti. questo perché non gli viene passato via get nessun paramentro, quindi viene attivato solo:
```php

else{
	$controller->lista()
}

```
se un utente clicca sul link "dettaglio" ecco che nell'url viene passato a index.php il parametro dettaglio e anche id. in questo caso in index.php si attiva la prima parte dell'if
```php

if ($action ==="dettaglio" && $id){
	$controller->dettaglio($id);

}

```

quindi chiamiamo la funzione dettaglio($id)	che si trova sul mio controller.

## Modifica studente

Dare la possibilita di modificare la scheda di uno studente

1 - Vista: ci vuole un nuovo form quindi una view che si chiama modifica_studente.php. La view deve avere gia i campi pre-compilati.

2 - Index: si accede alla view cliccando un link a fianco del pulsante 'dettagli'. In qualche modo index deve intercettare l'azzione della view e chiamare il controller.

3 - Controller: dirigge tutto. Deve intanto caricare la  view con i dettagli gia inseriti.

4 - Model: prende i dati che gli vengono passati dal controller via POST e gli inserisce nel DB con una funzione 'aggiorna'

## Elimina utente

Permette di eliminare uno studente

1 - Index: aggiunge il link vicino agli altri due

2 - Model: viene creata una funzione chiamata elimina che elimina dal database lo studente

3 - Controller: prende l'id da cancellare

4 - View: cliccando il link compare un popup che chiede se si vuole eliminare veramente uno studente