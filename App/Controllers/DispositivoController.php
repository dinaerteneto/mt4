<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\Dispositivos;
use App\Models\Fabricantes;
use App\Models\DispositivoTipos;

class DispositivoController extends AbstractController
{
    public function index()
    {
        $model = new Dispositivos;
        $models = $model->fetchAll();
        
        $this->render('index', compact('models'));
    }

    public function create() 
    {
        $model = new Dispositivos;
        if(isset($_POST['Dispositivos'])) {
            $model->attributes = $_POST['Dispositivos'];
            $model->insert();
            header('location: /');
            return;
        }
        $modelFabricante = new Fabricantes();
        $fabricantes = $modelFabricante->select();

        $modelTipo = new DispositivoTipos();
        $tipos = $modelTipo->select();

        $this->renderPartial('_form', compact('model', 'fabricantes', 'tipos'));
    }

    public function update() {
        $id = $_GET['id'];
        $model = new Dispositivos;
        $model = $model->findOneById($id);
        
        if (isset($_POST['Dispositivos'])) {
            $model->attributes = $_POST['Dispositivos'];
            $model->id = $id;
            $model->update();
            header('location: /');
            return;
        }

        $modelFabricante = new Fabricantes();
        $fabricantes = $modelFabricante->select();

        $modelTipo = new DispositivoTipos();
        $tipos = $modelTipo->select();

        $this->renderPartial('_form', compact('model', 'fabricantes', 'tipos'));

    }

    public function delete() {
        $id = $_GET['id'];

        $model = new Dispositivos;
        $model->delete($id);

        echo json_encode(['success' => true]);
    }

}
