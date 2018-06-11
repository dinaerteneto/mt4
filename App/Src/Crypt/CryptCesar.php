<?php

namespace App\Src\Crypt;

class CryptCesar extends Crypt
{
    private $alphabeticLength = 256;
    private $charDesloc = 4;
    private $out = 32;
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function encrypt()
    {
        $crypt = '';
        for ($i = 0; $i < strlen($this->text); $i++) {
            $key = ord(substr($this->text, $i, 1));
            $newKey = $key + $this->charDesloc;
            $newkey = $newKey % $this->alphabeticLength;
            if ($newKey >= 0 && $newKey < $this->out) {
                $newKey += $this->out;
            }
            $crypt .= chr($newKey); 
        }
        return $crypt;
    }

    public function decrypt()
    {
        $crypt = '';
        for ($i = 0; $i < strlen($this->text); $i++) {
            $key = ord(substr($this->text, $i, 1));
            $newKey = $key - $this->charDesloc;
            $newkey = $newKey % $this->alphabeticLength;
            if ($newKey >= 0 && $newKey < $this->out) {
                $newKey += $this->out;
            }
            $crypt .= chr($newKey);
        }
        return $crypt;
    }
}
