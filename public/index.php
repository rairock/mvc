<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/functions/functions.php';

use App\controller\TesteController;

$controller = new TesteController;

dd($controller->setar());
