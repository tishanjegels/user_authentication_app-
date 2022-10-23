<?php

define('DB_NAME', 'libary');
define('DB_USER', 'Tishan');
define('DB_PASSWORD', '*Cecille#0306');
define('DB_HOST', 'localhost');

$connection = @mysqli_connect(DB_HOST, DB_NAME, DB_PASSWORD, DB_USER);

if(!$connection){
    die('Could not connect:'.mysqli_connect_error());
}

?>