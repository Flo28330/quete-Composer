
<?php
use App\AppWcs\Hello;
use HelloWorld\SayHello;
require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';
$hello = new Hello();
$sayWorld = new SayHello();
echo $hello->talk();
echo '<br>';
echo $sayWorld->world();