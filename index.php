<?php

// This is my controller

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// Instantiate the F3 Base Class
$f3 = Base::instance();

// define default route
$f3->route('GET /', function(){
    //echo '<h1>Hello Fat-Free!</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});


$f3->route('GET|POST /order/pets', function(){
    //echo '<h1>Order</h1>';

// Render a Order view page
    $view = new Template();
    echo $view->render('views/pet-order.html');
});






// Run Fat-Free
$f3->run();

