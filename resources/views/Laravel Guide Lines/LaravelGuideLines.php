<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Guide Lines</title>
</head>
<body>
    <h2>Laravel Guide Line</h2>

    class 01 (Online)
    ================
        পরিচিতি
    class 02 (Online)
    ================
        Laravel Enverment Set
        -----------------
        1. node install
        2. composer install
        3. php install
        4. chocolatey install
        5. laravel install global
        6. laravale instanll app

        * Laragon Install
    
        php install
        ---------
        https://www.youtube.com/watch?v=_aSfX5nc-gI&t=69s


        composer install
        --------------
        https://www.youtube.com/watch?v=7qvVQdAsCfk

        chocolatey install
        -------------
        https://www.youtube.com/watch?v=-5WLKu_J_AE


        laravel install
        --------------
        https://www.youtube.com/watch?v=azfcW8wI1v0

        Command line 
        ------------
        composer global require laravel/installer
        laravel new (project Name)
        php artisan serve


        1. লারাভেল কোন ফাইল কি কাজ করে তার পরিচিতি
        2. route
        3. laravel Blade
        4. velet install in mac


    class 03 (Online)
    ================
    * database Table
    * user login system 
    * auth  


    Laravel Breeze -- for authentication
    ----------------------------------
        install Laravel Breeze
        --------------
        composer require laravel/breeze --dev

        install php artisan breeze
        --------------
        php artisan breeze:install
        php artisan migrate
        npm install
        npm run dev
    
    * create a database connection
    * create a new user data for database

        migrate fresh after create a new data 
        ------------------------------------
        php artisan migrate:fresh --seed


        create a new seeder file
        ---------------------
        php artisan make:seeder SeederName


        create a new model / schema file
        --------------------------
        php artisan make:model SchemaName -m    (for migration)
        php artisan make:model SchemaName -mc   (for migration and controller and model and Schema)
        php artisan migrate     


        

    class 04 (Online)
    ================
    * MVC Practices (C R U D)
    * Database Migration
    * Dibaging  


        Create Database Table 
        -------------------
        1. create a new model --> php artisan make:model SchemaName -m
        2. create a new model+schema/migration+controller  --> php artisan make:model Name -mc 
        3. after type schema info --> php artisan migrate


    class 05  (Online)
    ================
    * Notification Package Install (https://php-flasher.io/) composer require php-flasher/flasher-laravel
    * Show error   {{var_dump($errors)}}  
    * tailwind css code-> npm run dev
    * Edit, Update & Delete


    class 06 (Online)
    ================
    * Email debugging / Notification 
    * Mailtrap
    * after update .env file --> php artisan optimize:clear
    * create a notification --> php artisan make:notification Name




    class 08 (laravel-courses project)
    ================
    * create a new laravel project
    * create a new dbdesign on -->app.dbdesigner.net
    * php artisan make:model Name -mc --> create new migration and controller and model and Schema
    * after create model --> php artisan migrate  
    * create table in migration fils 
    * create reference table in migration fils 
    * after create table --> php artisan migrate


        manual data add 
        -------------
        * data add in DatabaseSeeder.php file
        * php artisan migrate:fresh --seed

        fake data add 
        ---------------
        * create factory file --> php artisan make:factory CourseFactory
        * generate fake column
        * php artisan migrate:fresh --seed

        
        single course show
        ---------------
        * create a route with (id) in web.php file
        * this route controller return specific single $id

        Add table to table relation
        --------------------------
        * go to model file --> belongsTo attach
        * controller file --> with('')


    class 08 (Guest teacher Harun)
    ================
    *create new migration schema file --> php artisan make:migration name
    * migration schema file --> 
      ---------------------
        1. create new table --> Schema::create()
        2. add column --> Schema::table()  after --> php artisan migrate
        3. last create data delete --> php artisan migrate:rollback
    * table relation --> $table->foreignId('user_id', )->constrained();

    # relationship
    -------------
    1. One to One (one model to one model connection) --> belongsTo
    2. One to Many (one model to multiple model connection) --> belongsToMany
    3. Many to Many
    
    * fake data add factory
        1.  create factory file --> php artisan make:factory CourseFactory
        2.  generate fake column
        3.  php artisan migrate:fresh --seed


    class 09 
    ================
    * one table e multiple table add 
        1. model filer এর সাথে অন্য model class add করা ।
                one to one হলে belongdTo, one to many হলে belongdToMany হবে।
        2. DatabaseSeeder.php file e multiple table attach করে দিতে হবে।
        3. Controllers file এ গিয়ে attach হওয়া table কে চিনিয়ে দিতে হবে।
        

</body>
</html>