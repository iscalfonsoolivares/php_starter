<?php declare( strict_types = 1 );

define('APP_VENDOR_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor');
define('APP_DATA_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data');
define('APP_STORAGE_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'storage');

use App\Email;

// Autoload files using composer
require APP_VENDOR_PATH . DIRECTORY_SEPARATOR . 'autoload.php';

// Main block
echo 'hola mundo' . PHP_EOL;

$email = Email::fromString('hola@mundo.com');

var_dump($email);


