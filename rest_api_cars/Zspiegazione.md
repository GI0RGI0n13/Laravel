-1  Creare un nuovo progetto intallandoci dentro sia composer che laravel. Il progetto si chiamerà rest_api_cars

-2  Aperta la cartella, lanciare dal terminale il comando: php artisan make:migration create_cars_table --create=cars
questo comando creerà in database/migrations la migrazione di cars

-3  Lanciare il comando: php artisan make:migration create_verifications_table --create=verifications
creerà sepre in database/migrations la migrazione verifications

-4  Aggiungere i campi richiesti nelle due migrazioni appena create (controllare nei due file)

-5  Eseguire le migrazioni usando: php artisan migrate

-6  creare i modelli Car e Verification usando:
php artisan make:model Car
php artisan make:model Verification
Questi comandi creeranno i due file in app/Models

-7  Aggiungere le relazioni tra i modelli nelle rispettive classi (controllare i due models appena creati)
 
-8  Creare i controllers usando per cars e verifications usando:
php artisan make:controller CarController --resource
php artisan make:controller VerificationController --resource
Questi comandi creeranno i due controllers in app/Http/Controllers

-9  Creare le rotte nel file routes/api.php   (controllare il file)

-10  testare il progetto con postman:
Avviare il server php con: php artisan serve
Inserire nell'url: http://localhost:8000/api/cars
Nel body selezionare row e specificare il tipo JSON
inserire un json esempio e inviare la richiesta

{
  "targa": "AB123CD",
  "chilometraggio": 50000
}

