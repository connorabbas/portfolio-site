<?php
// Valid Routes for site

Route::get('/', function(){
    return App::view('root', ['pageTitle' => 'Home']);
});

Route::get('/about', function(){
    return App::view('about', ['pageTitle' => 'About Me']);
});

Route::get('/experience', function(){
    return App::view('experience', ['pageTitle' => 'Experience']);
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/send-contact-email', [ContactController::class, 'sendContactEmail']);

Route::checkRoute();
