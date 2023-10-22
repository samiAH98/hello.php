
<?php

require_once __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../src/Hello.php';

use App\Src;


$bonjour = new App\Src\Hello();

echo $bonjour->talk() . "Composer !";
//var_dump($bonjour);

$again = new App\Src\Hello();
echo "<br><br>" . $again->world();
