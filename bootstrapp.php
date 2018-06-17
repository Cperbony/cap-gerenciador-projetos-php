<?php

require __DIR__ . '/vendor/autoload.php';

$router = new CAP\Framework\Router;

$router->add('GET', '/', function () {
    return 'Estamos na Home';
});

$router->add('GET', '/projects/(\d+)', function ($params) {
/*     var_dump($params); */
    return 'Estamos em Projects de id: ' . $params[1];
});

try {
    echo $router->run();
} catch (\CAP\Framework\Exceptions\HttpException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
