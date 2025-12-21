<?php
declare(strict_types=1);

use App\Core\Request;
use App\Core\Router;
require __DIR__ . '/../vendor/autoloader.php';
include_once __DIR__ . '/../view/includes/header.php';
include_once __DIR__ . '/../view/includes/footer.php';
$reqRoutes = require dirname(__DIR__) . '/config/routes.php';

$router = new Router();
$reqRoutes($router);

$request = Request::fromGlobals();
$response = $router->dispatch($request);
$response->send();

