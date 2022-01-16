# Prenotazione-Hotel
Piattaforma online di booking fatta in PHP,SQL,Html,JS,jQuery,Ajax,CSS

COM'E' FATTO E COS'E' IN GRADO DI FARE?
																
	1.Si e' fatto uso di html5,css,bootstrap,php,sql,javascript,jquery,ajax
	2.Bootstrap e jquery si sono prese da altre fonti
	3. Controlla se l'email contiene @ oppure no
	4. Contiene campi obbligatori
	5.Se un campo rimane vuoto, viene mostrato un errore con testo diverso dal default!
	6.Il check-in e check-out non possono essere scelti per date preccedenti a quella corrente
	7.Funzione di controllo che check-out sia maggiore di check-in
	8.Codice captcha
	9.Generazione immagini della camera con i servizi offerti
	10.Generazione automatico di: prezzo camera | numero camere | numero giorni  |  prezzo totale
	11.Usati i SESSION in php
	12. Usato header (reindirect in php)
	13. Si manda un email sia all hotel che all'utente
	14. Si controlla via email se l'utente esiste gia oppure no
	15.Si mostrano i risultati di prenotazione dopo aver prenotato
	16. Filtro direct-link per evitare di accedere direttamente alla pagina test-finale.php
	17. Funzione stampa per stampare il file
 
 COSA AGGIUNGERE/MODIFICARE?
																
	1. L'input  cellulare===> Si consiglia di creare una funzione che controlla se i valori inseriti sono dei numeri oppure no(se noti nel mio caso accetta anche lettere il che non avrebbe senso)
	2. SQLi ===> Il sito molto probabilmente sara' vulnerabile ad un attacco SQLi
	3. Il print===> ho notato che quando cercho di stampare la prenotazione, me lo fa stampare insieme al tasto stesso il che mi sembra poco professionale, quindi consiglio di mettere i dati dentro un div e di stampare solo il div e non l'intera pagina
	4. Le foto delle camere===> Non che siano orrende ma sono inserite come external source e quindi temo che forse verranno eliminate(meglio se si salvano e poi richiamate dentro la cartella o fuori).
	5. Il design della homepage===> Orrendo. Bisogna mettere qualche layout piu dinamico!!!!
  
  ISTRUZIONI
																
	1===> Prima di partire con i file bisogna prendere una decisione e apportare delle modifiche.
	Bisogna sapere se si vuole caricare il progetto su un webhost (gratuito/premium) oppure su localhost.
	In tutti e due i casi bisognera' modificare i quattro parametri LOCALHOST, USERNAME, ROOT, PASSWORD.
	
	Primo file da aprire e' test-prezzo5.php e nella riga 301
	
	$con=mysqli_connect("localhost","id3747614_root","noidea11","id3747614_hotel");

	modificare i dati sopra con i tuoi (LOCALHOST, ROOT USERNAME, PASSWORD, DB USERNAME)
	
	Poi, il secondo file, db.php  nella riga numero 2:
	
	$con = mysqli_connect("localhost","id3747614_root","noidea11","id3747614_hotel") or die(mysql_error());

	modificare i dati sopra!!!!!
	
	2===> Se si sceglie di operare usando il localhost (con programmi tipo XAMPP), faccio notare che per fare uso dell'invio email, bisogna tenere aperto il tool (lo trovi dentro la cartella) smtp4dev , perche in questo modo si possono mandare email via php.
  
  
  Ok, una volta apportato le seguenti modifiche, iniziamo ad analizzare il codice e perche ho fatto queste strane scelte.

Apriamo prima il file test-prezzo5.php:

Righe 1-4: Ho dovuto mettere il seguente codice perche ho notato che usando la funzione header(Location: ) una volta che facevo submit, non mi indirizzava alla pagina di prenotazione. Quindi si consiglia di usare quasi sempre la funzione ob_start() per prevenire certe situazioni

Righe 60-62: Per farlo sembrare un po piu interessante l'input, nella riga 60, ho usato l'attributo placeholder (Riferimento qua: https://www.w3schools.com/tags/att_input_placeholder.asp )
Nelle righe 61-62 ho usato l'evento onInvalid e l'elemento DOM setCustomValidity . Funzionano nel caso di un input per controllare se ci sono valori ammisibili oppure no e in caso contrario, stampano una stringa (o un alert in Javascript)

Riga 88: Ho solo messo un minimo e un massimo in modo tale da prevenire che i minoreni si registrano sul sito...e anche i morti viventi(i nonni di 100 anni in su)

Righe 95-163: Volevo mettere anche delle immagini delle camere e di cosa esse offrissero quindi, per metterle nello stesso padding con la colonna a sinistra, ho pensato di inserirle come tabella con 3 righe e 1 colonna!!!! (Da notare i tag <th> , <td> e <tr>)   (A queste righe torneremo dopo perche come puoi vedere, c'e anche l'attributo display:none )

Righe 176-177: Ho usato l'attributo value per stampare usando echo in php, la data di oggi(o meglio, la data corrente quando si apre la pagina)
Ho messo anche un minimo per evitare che qualche simpaticone rompiscatole(specialmente il prof) , metta come data di check-in, una data precedente a quella corrente, il che non avrebbe senso. In piu ho usato l'evento onchange per richiamare la funzione cal(). Tutte le funzioni verranno spiegato alla fine!!!!

Righe 182-183: Quasi lo stesso ragionamento come sopra, solo che qua ho usato la funzione strtotime. E' una funzione di default in php che io onestamente manco sapevo esistesse!Serve per convertire un testo-data in numeri.Qua trovi un esempio per capire meglio:
https://www.w3schools.com/PhP/showphp.asp?filename=demo_func_strtotime

Righe 186-192: Ho solo fatto un dropdown menu con la tipologia delle camere e i loro prezzi (Attenzione! I prezzi sono solo come testo non come variabile, quindi cambiando qua i loro prezzi non portera il loro cambiamento come valore...e' solo testo alla fine!). Ho chiamato poi alla fine la funzione cal() per la quale ne parleremo alla fine.

Riga 205: Chiamata la funzione getRooms per la quale ne riparleremo dopo.

Righe 218-237: Vabbe, ho solo messo i label solo per vedere, mentre scrivevo il codice, se funzionavano oppure no. Volendo puoi toglierle (tranne il prezzo finale) ma io ti consiglio di lasciarle perche cosi si capisce cosa sta succedendo per ogni scelta effettuata! I colori usati per il testo finale sono dati in HEXADECIMAL e sono Crayon se non sbaglio.


Righe 245-250: Codice di verificazione! Suggerito da un mio amico e visto in diversi siti che lo utilizzano. Anche la funzione e' stata creata un po cosi a caso.
  
  
  
  Si inizia con l'apertura del tag <?php e poi si usa session_start().
Perche ho usato session_start() ???? Perche era nel mio interesse, salvare gli unput come session(come ho fatto in seguito) per poi parsarli(mostrarli) nel prossimo file(quello di indirizzamento) , il file test-finale.php. Quindi io ho usato i session in questo caso!

Righe 262-274: Come detto sopra, ho salvato i valori inseriti dopo che si verifica il submit (if(isset($_POST['submit']))), in session, per poi richiamarli!!!!

Righe 280-290: Converto il check-in e check-out in numeri (usando la funzione strtotime) e poi gli confronto per evitare che check-out sia piu piccolo di check-in

Righe 292-295: Controllo se il valore inserito nel captcha box sia uguale a quello mostrato!

Righe 301-313: Qua i dati si salvano nel database! Prende tutti i valori di input, e gli salva uno per uno nel database. In piu c'e' anche un controllo che vede se si e' usato lo stesso email, per evitare che lo stesso utente prenoti 2 volte usando la stessa email!!!!

Righe 314-336: Ora, ti ricordi dell'app che ti ho parlato prima? SMTP4dev ?! Ok, queste righe hanno a che fare un po con quello. Praticamente queste righe, mandano un email della prenotazione, includendo i dati come: data di nascita, check-in,check-out,prezzo e cosi via. L'email come puoi notare, viene mandato sia all'utente (come copia) ma anche all'hotel (per avvisarli della prenotazione ovviamente). Nella riga 316 c'e' la mia email (che nel mio caso, era quella del hotel, quindi la devi cambiare con la tua.) Se usi pero' un webhost, quindi non in locale, non ti serve aprire smtp4dev.

Riga 339: Serve, una volta fatto la prenotazione, per mandare l'utente alla pagina dove gli viene mostrato la prenotazione effettuata!
exit() l'ho aggiunto a causa del problema menzionato all'inizio di questo documento. Se non lo mettevo, non andava bene il redirect!!!!




LA PARTE PIU IMPORTANTE: LE FUNZIONI USATE!!!!
														
Funzione totalCam() : Righe 377-404:
Come funziona: 
Riga 378: Prende l'emento di nome troom (sarebbe il nome dell'input della Tipologia di Camera) e lo salva nella variabile input.
Riga 379: Inizializza la variabile total a 0.
382-396: Al variare della scelta nel dropdown(tipologia di camera) viene cambiato sia il prezzo della variabile total che l'attributo display delle camere, quelle menzionate sopra nelle righe 95-163. 
Il resto: Salva il valore del prezzo della camera ma anche quello finale.
Quello finale e' dato dal prodotto tra la tipologia della camera,numero delle stanze(rooms) e dalla funzione GetGiorni()

Funzione GetRooms() : Righe 407-420:
Come funziona:
Vabbe, qua al variare della scelta del numero delle camere, assegno un valore numerico e poi lo cambio ogni volta che cambia la scelta.

Funzione getGiorni() 
Come funziona:
Prende il valore di check-in e check-out e poi usa la funzione parseInt per convertire in numero intero la differenza tra le due date!

Funzione cal()
Serve solo per prendere il valore della data scelta per poi restituire questo valore alla funzione getGiorni.

Da notare: Le righe    403  |  419   |  436 sono identiche!
Perche? Perche se lo lascio solo su di una di esse, succede che poi cambiando il numero delle camere, o la tipologia di camera, i valori non vengono rigenerati!!!!!

Ultime righe: Chiama file javascript/jquery che si trovano all'esterno.





Secondo file: db.php

Vabbe...qua non serve dire nulla. E' solo il file php che serve per fare la connessione con il database.


Terzo file: test-finale.php

Righe 1-2: Inizio con il tag <?php nella prima riga, e nella seconda, come ti avevo gia detto, RICHIAMO i SESSION!!!!!! Quelli salvati in precedenza dopo aver fatoo submit!

Righe 3-5: Ora, questa e' stata un idea del tutto personale, visto che mi occupo di sicurezza dei siti, ho pensato di evitare agli utenti del sito, di andare su questa pagina se prima non hanno compilato la prenotazione!
Infatti, se cerchi di andare subito, seguendo il seguente link:
http://vertigohotel.000webhostapp.com/admin/test-finale.php
verrai reindirezzato sulla pagina di prenotazione, proprio per prevenire un attacco sul sito(non che serva a molto ma solo per dire che ti sei occuppato anche della sicurezza)

Righe 31-33: Come vedi, qua richiamiamo i session per ottenere i valori salvati in precendeza!

Riga 140: vabbe...qua ho pensato di aggiungere un tasto di print. quindi ho chiamato l'evento onClick per realizzare la stampa.


  
