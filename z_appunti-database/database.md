Un database è una collezione di dati organizzati, accessibile per via elettronica.
Esistono il database server che è il sistema fisico e il databse management system che è il sistema software.
Il numero nelle colonne del database (vedi pdf -> db.pdf) è la chiave principale che definisce ogni singolo record.
Una chiave principale non è necessaria che sia un numero ma deve essere unica.
In una tabella c'è un ID, un nome e un cognome (pdf database -> terza foto).
L'ID è la chiave principale.
Un principio fondamentale dei database relazionali è spezzare informazioni complesse in parti più semplici e immagazzinare separatamente le diverse parti (vedi foto 3 di db.pdf).
Come si progetta un database:
1) Dare ad ogni record (linea) un identificatore unico (Primary key);
2) Creare una tabella per ogni gruppo dati;
3) Usare la Primary key come Foreign Key nell'altra tabella per collegarle;
4) Immagazzinare solo un dato per ogni campo.
L'interfaccia grafica per dialogare con il database si chiama phpMyAdmin.
Nel database la parte finale 'ci' sta per case insensity.

Utente phpMyAdmin:
-username: pswrite;
-hostname: local;
-password: faina;

-username: psread;
-hostname: local;
-password: lupo;

CHAR -> max caratteri 255
VARCHAR -> bisogna specificare il numero di caratteri, il massimo di caratteri è 65.535

Per connettersi ad un database bisogna usare l'hostname, lo user e la password del database