<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use reqres\Reqres;
$Reqres = new Reqres();
echo $getuserbyID =  $Reqres->GetUserById(2);
echo $getuserbyID =  $Reqres->PaginatedListOfUsers();
?>
