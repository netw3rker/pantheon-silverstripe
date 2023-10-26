<?php
use SilverStripe\Core\EnvironmentLoader;




#$env = BASE_PATH . '/app/.env';

define('SS_DATABASE_SERVER', $_ENV['DB_HOST']);
define('SS_DATABASE_USERNAME', $_ENV['DB_USER']);
define('SS_DATABASE_PASSWORD', $_ENV['DB_PASSWORD']);
define('SS_DATABASE_NAME', $_ENV['DB_NAME']);
define('SS_DATABASE_PORT', $_ENV['DB_PORT']);


$loader = new EnvironmentLoader();
$loader->loadFile($env);
