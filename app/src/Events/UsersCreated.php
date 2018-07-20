<?php

namespace App\Events;

class UsersCreated
{
    public function __invoke($e)
    {
        $event = $e->getName();
        $params = $e->getParams();
        $data = sprintf('Disparado evento "%s", com parâmetros: %s', $event, json_encode($params));
    }
}
