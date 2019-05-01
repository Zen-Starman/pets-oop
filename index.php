<?php

//Start a session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Required file
require_once('vendor/autoload.php');
require_once('model/validate.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);


//Define a default route
$f3->route('GET /', function() {

    echo "<h1>My pets</h1>";
    echo "<a href='order'>Place an Order</a>";
});

//Define a summary route
$f3->route('GET /summary', function() {

    //Display summary
    $view = new Template();
    echo $view->render('views/my-pets.html');
});

//Run Fat-Free
$f3->run();