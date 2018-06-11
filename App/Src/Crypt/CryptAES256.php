<?php

namespace App\Src\Crypt;

include(__DIR__ . '/../phpseclib/Crypt/AES.php'); //PHPSECLIB
include(__DIR__ . '/../phpseclib/Crypt/Random.php'); //PHPSECLIB

class CryptAES256 extends Crypt
{
    private $text;
    private $crypt;

    public function __construct($text)
    {
        $this->text = $text;
        $this->crypt = new \Crypt_AES();
        $this->createKey();
    }

    private function createKey()
    {
        $this->crypt->setKey('abcdefghijklmnopqrstuvwxyz123456');
        // $this->crypt->setIV(crypt_random_string($this->crypt->getBlockLength() >> 3));
    }

    public function encrypt()
    {
        return $this->crypt->encrypt($this->text);
        
    }

    public function decrypt()
    {
        return $this->crypt->decrypt($this->text);
    }
}
