<?php
use Leaf\App;
require __DIR__ . "/../../vendor/autoload.php";
$app = new App;
(require __DIR__ . "/Config.php")($app);
(require __DIR__ . "/../routes/Api.php")($app);
return $app;