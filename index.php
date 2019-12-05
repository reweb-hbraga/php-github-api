
<?php

require_once('vendor/autoload.php'); //autoload do composer

use Github\Client; //usando a classe client do Github

$client = new Client(); //instanciando o client

// Variaveis
$tokengithub = '782b7a3b91ad0872ab7767c1bcfe553593a594db';
$usernameOrToken = 'reweb-hbraga';
$password = 'reweb123';
// $method = ;
$repo = 'colwagen';


$clientUser = $client->api('user');
$repositories = $clientUser->repositories($usernameOrToken);
//retornando os repositórios do usuario

foreach($repositories as $repository) //iterando os repositórios
{
    print ('Repositorio' . ' = ' . $repository['full_name'] . PHP_EOL); //exibindo os nomes dos repositórios
}


$auth = $client->authenticate('782b7a3b91ad0872ab7767c1bcfe553593a594db', null, \Github\Client::AUTH_URL_TOKEN);


var_dump($auth);



?>
