<?php

namespace App\Models;

use App\Src\Model\AbstractModel;

class DispositivoTipos extends AbstractModel
{
    public $table = 'dispositivo_tipos';

    public $attributes = [
        'id', 
        'name'
    ];
}