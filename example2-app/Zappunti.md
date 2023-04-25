INSTALLARE COMPOSER NELLA CARTELLA DI LAVORO
-1 Entrare in htdocs su xampp e creare una nuova cartella
-2 Aprire il CMD, entrare nella cartella digitando cd C:\xampp\htdocs\cartella e lanciare composer init
-3 skippare le domande fino alla richiesta dei perscorsi librerie e fare N, poi premere invio al resto
-4 Se sono apparse le varie cartelle, composer è ok

INSTALLAZIONE DI LARAVEL
-1 Nel cmd entrare nella cartella di prima e lanciare il comando composer create-project laravel/laravel example2-app
-2 Se non funziona, entrare nel file php.ini e inserire la riga
[Extensions]
extension=php_zip.dll
-3 Riprovare col comando precedente e aspettare la fine dell'installazione
-4 Entrare sulla cartella example2-app da cmd e digitare code .   serve ad aprire tutti i file in vscode

---------------------------------------------------------------------------------------------------------------------------

COMANDI GENERALI
-php artisan list : appare la lista dei comandi disponibili
-php artisan serve : fa partire il server php, si ferma con ctrl C
-php artisan route:list : serve a mostrare le route attive, utile quando ne cominciamo a creare molte

---------------------------------------------------------------------------------------------------------------------------

CARTELLE
app/Http/
Controllers : qui verranno messi i controllers necessari all'applicazione
Models : dati utilizzati dal nostro progetto

database/
migrations :
seeders :

resuorces/
css : qui andranno i file css
js: qui andranno i file javascript
views : qui andranno messe le viste

routes/
web.php : file in cui si andranno a salvare le routes
.env : contiene alcune impostazioni dell'applicazione

---------------------------------------------------------------------------------------------------------------------------

CREARE LA PRIMA ROTTA
Aprire il file web.php sta tutto lì dentro

CREARE UNA VIEW 
Aprire il file web.php, creare la rotta, poi andare in resuorces/view e creare la view col nome deciso nella rotta

CREARE UN CONTROLLER
-1 Aprire il cmd e scrivere php artisan make:controller MyFirstController
Verrà creata un nuovo file con una classe dentro app/Http/Controllers
-2 Creare una root che si colleghi al controller in routes/web.php
-3 Sempre in web.php, creare il comando "use" con cui laravel troverà il controller:
use App\Http\Controllers\NomeClasse;

---------------------------------------------------------------------------------------------------------------------------

CREARE UN MODEL
-1 php artisan make:model Photo : crea il file in app/Models
-2 dopo averlo fatto, serve collegare il database a laravel, è già fatto di default usando xampp, altrimenti modificare il file .env inserendo le informazioni necessarie
-3 php artisan make:migration create_photos_table --create=photos : crea la migration in database/migrations
-4 php artisan migrate : laravel controlla se ci sono migrations da eseguire e le esegue, creando la tabella nel db
4.5 php artisan migrate:rollback : nel caso avessi sbagliato e volessi cancellare le migrations nel db
nel caso volessi modificare la migration, mettendoci colonne e righe, guardare il file



