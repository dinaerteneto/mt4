<?php

namespace App\Models;

use App\Src\Model\AbstractModel;
use App\Src\Connection\Connection;

class Dispositivos extends AbstractModel
{
    public $table = 'dispositivos';

    public $attributes = [
        'id', 
        'dispositivo_tipo_id', 
        'fabricante_id', 
        'nome', 
        'hostname', 
        'ip'
    ];

    public function fetchAll() {
        $sql = "
            SELECT D.*
                 , DT.nome AS tipo
                 , F.nome AS fabricante
              FROM dispositivos D
              LEFT JOIN dispositivo_tipos DT
                ON D.dispositivo_tipo_id = DT.id
             LEFT JOIN fabricantes F
               ON D.fabricante_id = F.id
        ";
        $db = Connection::getConnection();

        $sth = $db->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(\PDO::FETCH_ASSOC);

    }

}