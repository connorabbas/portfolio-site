<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ENV and global vars
require_once('./app/env.php');
require_once('./app/globals.php');

if (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on" && BASE_DIR == '/') {
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}

// Autoload Classes
spl_autoload_register(
    function ($class) {
        if (file_exists('./app/core/' . $class . '.php')) {
            require_once './app/core/' . $class . '.php';
        } else if (file_exists('./app/controllers/' . $class . '.php')) {
            require_once './app/controllers/' . $class . '.php';
        } else if (file_exists('./app/models/' . $class . '.php')) {
            require_once './app/models/' . $class . '.php';
        }
    }
);

// Invoke the site
$site = new SiteController();
$site->invoke();
