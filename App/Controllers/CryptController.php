<?php 

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Src\Crypt\CryptCesar;
use App\Src\Crypt\CryptAES256;

class CryptController extends AbstractController
{
    public function encrypt()
    {
        $sCryptCesar = '';
        $sCryptAES256 = '';

        if (isset($_POST['Crypt'])) {
            $text = $_POST['Crypt']['text'];
            $oCryptCesar = new CryptCesar($text);
            $oCryptAES256 = new CryptAES256($text);

            $sCryptCesar = $oCryptCesar->encrypt();
            $sCryptAES256 = $oCryptAES256->encrypt();

            echo json_encode([
                'crypt_Cesar' => $sCryptCesar,
                'crypt_AES256' => utf8_encode($sCryptAES256),
            ]);

            return;
        }

        return $this->render('encrypt', compact('sCryptAES256'));
    }

    public function decrypt()
    {
        if($_POST['Decrypt']) {
            $sDecrypt = '';
            $text = utf8_decode($_POST['Decrypt']['text']);

            $type = 'AES256';
            $oCryptAES256 = new CryptAES256($text);
            $sDecrypt = ($oCryptAES256->decrypt());

            if(!$sDecrypt) {
                $type = 'Cifra de César';
                $oCryptCesar = new CryptCesar($text);
                $sDecrypt = ($oCryptCesar->decrypt());                
            }

            $aReturn = [
                'type' => $type,
                'decrypt' => $sDecrypt
            ];

            echo json_encode($aReturn);
            return;
        }

    }


}
