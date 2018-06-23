<?php

$router->add('GET', '/', function () {

    return 'Estamos na Home';

}
);

$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersController::show');
