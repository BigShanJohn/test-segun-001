<?php
require_once 'config.php';
require_once 'vendor/autoload.php';

use App\Core\Request;
use App\Core\Router;
use App\Controllers\PricesController;
use App\Managers\PricesManager;
use App\Repositories\PricesRepository;

$router = new Router(new Request);

$router->get('/', function () {
    return file_get_contents ('views/list.html');
});

$router->get('/list',  function () {
    $pricesController = new PricesController(new PricesManager, new PricesRepository);
    return $pricesController->list();
});


