<?php

namespace App\Src\Crypt;

class Crypt
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }
}
