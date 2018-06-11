<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\Dispositivos;
use App\Models\Fabricantes;
use App\Models\DispositivoTipos;

class RelatorioController extends AbstractController
{
    public function index()
    {
        $this->render('index');
    }

}
