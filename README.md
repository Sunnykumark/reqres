"# reqres" 
A method to retrieve a single user by ID 
A method to retrieve a paginated list of users 
The service should convert the returned data to a simple, JSON serializable user model for consumption by the user of the package. 


Installation

This project using composer.

composer require sunnykk/reqres:dev-main


** Usage ** 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
use reqres\Reqres;
$Reqres = new Reqres();
echo $getuserbyID =  $Reqres->GetUserById(2);
echo $getuserbyID =  $Reqres->PaginatedListOfUsers();
