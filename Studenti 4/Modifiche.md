# MODIFICHE

## Aggiungi un nuovo studente
Dare la possibilita all' utente di aggiungere un nuovo studente alla lista  degli studenti.

1 - Vista: ci vuole un nuovo form quindi una view che chiamiamo "aggiungi-studente.php". Si accede alla view cliccando un link nella pagina della lista, appena sotto il titilo 'Studenti'.

2 - Controller: il controller deve dirigere tutto. Creiamo un nuovo metodo che si chiama loadForm() che carica semplicemente la vista.

Il controller deve anche recuperare le varriabili che gli vengono  inviate dal post al form ed invairli al model. Fa da ponte tra la view e il modello.

3 - Modello: prende i dati che gli vengono inviati dal controller e li inserisce nel db. Fa la query al db.

4 - Index: deve intercettare l'azzione del form e chiamare il controller. 