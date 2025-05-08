# LOGICA DELL'APPLICAZIONE


## Aggiungi un nuovo studente

Dare la possibilità all'utente di aggiungere un nuovo studente alla lista degli studenti.


1 - Vista: ci vuole un nuovo form quindi una view che chiamiamo aggiungi_studente.php, si accede alla view cliccando un link nella pagina della lista, appena sotto il titolo 'Studenti'.

2 - Controller: il controller deve dirigere tutto. Creiamo un nuovo metodo che si chiama loadForm() che carica semplicemente la view.

Il controller deve anche recuperare le variabili che gli vengono inviate via POST dal form ed inviarle al modello. Fa il suo lavoro di ponte tra la view w il model

3 - Modello: prende i dati che gli vengo inviati dal controller e li inserisce nel db. Fa la query al db.

4 - Index: deve intercettare l'azione del form e chiamare il controller
