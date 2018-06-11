<?php

namespace App\Models;

use App\Src\Model\AbstractModel;

class Fabricantes extends AbstractModel
{
    public $table = 'fabricantes';
    
    public $attribtues = [
        'id', 
        'name'
    ];
}
