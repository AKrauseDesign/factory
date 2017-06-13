<?php

ini_set("display_errors", "On");

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('TEMPLATE_ROOT', VIEW_ROOT . '/templates');
define('PAGE_ROOT', VIEW_ROOT . '/page');
define('BASE_URL', 'http://localhost:8888/factory');
define('IMPORT_ROOT', APP_ROOT . "/imports");

$db = new PDO('mysql:host=localhost;dbname=cms', 'root', 'root');

require 'functions.php';
