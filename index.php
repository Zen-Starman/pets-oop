<?php

//Start a session
session_start();

//Turn on error reporting

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Required file
require_once('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);


//Define a default route
$f3->route('GET /', function($f3) {

    //instantiate pet class
    $pet1 = new Pet();
    $f3->set('pet1', $pet1);


    $pet2 = new Pet("Roofus");
    $f3->set('pet2', $pet2);

    $pet3 = new Pet("Charles", "gray");
    $f3->set('pet3', $pet3);

    $view = new Template();
    echo 'heyyy';
    echo $view->render('views/my-pets.html');
});

//Run Fat-Free
$f3->run();