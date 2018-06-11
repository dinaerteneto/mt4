<?php

namespace App\Src\Model;

use App\Src\Entity\AbstractEntity;

class AbstractModel extends AbstractEntity
{
    public function __construct()
    {
        foreach ($this->attributes as $name) {
            $this->$name = null;
        }
        return parent::__construct();
    }
}
