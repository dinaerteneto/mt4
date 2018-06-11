<?php

namespace App\Src\SSH;

use Net_SSH2;

include(__DIR__ . '/../phpseclib/Net/SSH2.php'); //PHPSECLIB

class SSHConnection
{
    public $user;
    public $password;
    public $ip;
    public $conn;

    public function __construct($user, $password, $ip)
    {
        $this->user = $user;
        $this->password = $password;
        $this->ip = $ip;
    }

    public function isConnected()
    {
        $this->conn = new Net_SSH2($this->ip);

        if (!$this->conn->login($this->user, $this->password)) {
            throw new \Exception('Falha na conexao com o servidor', 500);
        } else {
            return true;
        }
    }

    public function commandExec($command)
    {
        if ($this->isConnected()) {
            return $this->conn->exec($command);
        }
        return false;
    }
}