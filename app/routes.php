<?php
// Valid Routes for site

$routes->get('/', function(){
    return App::view('root', ['pageTitle' => 'Home']);
});

$routes->get('/about', function(){
    return App::view('about', ['pageTitle' => 'About Me']);
});

$routes->get('/experience', function(){
    return App::view('experience', ['pageTitle' => 'Experience']);
});

$routes->get('/projects', [ProjectsController::class, 'index']);

$routes->get('/contact', [ContactController::class, 'index']);
$routes->post('/send-contact-email', [ContactController::class, 'sendContactEmail']);

$routes->checkRoute();
