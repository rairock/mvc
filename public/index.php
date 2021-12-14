<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/functions/functions.php';
require __DIR__.'/../app/config/config.php';

use App\controller\TesteController;
use App\core\RouterCore;

$routerCore = new RouterCore;

$controller = new TesteController;

