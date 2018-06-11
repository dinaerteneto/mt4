<?php

namespace App\Src\Route;

use App\Src\Bootstrap\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes = [
            ['route' => '/', 'controller' => 'DispositivoController', 'action' => 'index'],
            ['route' => '/dispositivo/create', 'controller' => 'DispositivoController', 'action' => 'create'],
            ['route' => '/dispositivo/update', 'controller' => 'DispositivoController', 'action' => 'update'],
            ['route' => '/dispositivo/delete', 'controller' => 'DispositivoController', 'action' => 'delete'],

            ['route' => '/ssh/send', 'controller' => 'SshController', 'action' => 'send'],

            ['route' => '/crypt/encrypt', 'controller' => 'CryptController', 'action' => 'encrypt'],
            ['route' => '/crypt/decrypt', 'controller' => 'CryptController', 'action' => 'decrypt'],

            ['route' => '/hashes', 'controller' => 'HashController', 'action' => 'index'],

            ['route' => '/relatorio', 'controller' => 'RelatorioController', 'action' => 'index'],
        ];

        $this->setRoutes($routes);
    }
}
