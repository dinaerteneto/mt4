<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Src\SSH\SSHConnection;
use App\Models\Dispositivos;

class SshController extends AbstractController
{
    public function send()
    {
        $id = $_REQUEST['id'];
        $model = new Dispositivos;
        $model = $model->findOneById($id);

        if(isset($_POST['Ssh'])) {
            $postSSH = $_POST['Ssh'];
            $conexaoSSH = new SSHConnection($postSSH['username'], $postSSH['password'], $postSSH['ip']);
            $return = $conexaoSSH->commandExec($postSSH['command']);

            echo $return;
            return;
        }
        $this->renderPartial('_form', compact('model'));
    }

}
