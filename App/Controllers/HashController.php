<?php

namespace App\Controllers;

use App\Controllers\AbstractController;

class HashController extends AbstractController
{

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    } 

    public function index() {
        $hashes = [];

        if(isset($_POST['Crypt'])) {
            $textToCrypt = $_POST['Crypt']['text'];
            $textHash = $_POST['Crypt']['hash'];
            $salt = $this->random_str(8); 
            
            $sha512Crypt = crypt($textToCrypt, '$6$rounds=5000$'.$salt.'$');
            $hmacCrypt = hash_hmac('ripemd160', $textToCrypt, 'secret');

            $hash = [
                'sha512' => $sha512Crypt,
                'hmac' => utf8_encode($hmacCrypt),
                'sha512_compare' => crypt($textToCrypt, $textHash) === $textHash ? 'Igual' : 'Diferente',
                'hmac_compare' => '?'
            ];
        }

        $this->render('index', compact('hash'));
    }


/*     private function custom_hmac($algo, $data, $key, $raw_output = false)
    {
        $algo = strtolower($algo);
        $pack = 'H' . strlen($algo('test'));
        $size = 64;
        $opad = str_repeat(chr(0x5C), $size);
        $ipad = str_repeat(chr(0x36), $size);

        if (strlen($key) > $size) {
            $key = str_pad(pack($pack, $algo($key)), $size, chr(0x00));
        } else {
            $key = str_pad($key, $size, chr(0x00));
        }

        for ($i = 0; $i < strlen($key) - 1; $i++) {
            $opad[$i] = $opad[$i] ^ $key[$i];
            $ipad[$i] = $ipad[$i] ^ $key[$i];
        }

        $output = $algo($opad . pack($pack, $algo($ipad . $data)));

        return ($raw_output) ? pack($pack, $output) : $output;
    } */

}