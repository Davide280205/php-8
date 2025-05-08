# LOGICA DELL'APPLICAZIONE

## Aggiungi un nuovo studente

Dare la possibilità all'utente di aggiungere un nuovo studente alla lista degli studenti.

1 - Vista: ci vuole un nuovo form quindi una view che chiamiamo aggiungi_studente.php. Si accede alla view cliccando un link nella pagina della lista,
appena sotto il titolo 'Studenti'.

2 - Controller: il controller deve dirigere tutto. Creiamo un nuovo metodo che si chiama loadForm() che carica semplicemente la view.

3 - Modello: prende i dati che gli vengono inviati dal controller e li inserisce nel DB. Fa la query al DB.

4 - Index: deve intercettare l'azione del form e chiamare il controller