<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use reqres\Reqres;


$Reqres = new Reqres();

echo $Reqres->world();

?>