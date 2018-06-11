<?php
use App\Src\Bootstrap\Bootstrap;

?>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Dispositivo</h4>
    </div>
    <div class="modal-body">
        <div class="clearfix">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Dispositivo_hostname">Nome</label>
                    <input type="text" name="Dispositivos[nome]" class="form-control" value="<?= $model->nome ?>"
                        placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="Dispositivos_fabricante_id">Fabricante</label>
                    <select name="Dispositivos[fabricante_id]" class="form-control" id="Dispositivos_fabricante_id">
                        <?php if($fabricantes) : ?>
                        <?php foreach($fabricantes as $fabricante) : ?>
                        <option value="<?= $fabricante['id'] ?>" <?= $model->fabricante_id == $fabricante['id'] ? 'selected' : null ?>>
                            <?= $fabricante['nome'] ?>
                        </option>
                        <?php endforeach ?>
                        <?php endif ?>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Dispositivo_hostname">Hostname</label>
                    <input type="text" name="Dispositivos[hostname]" class="form-control" value="<?= $model->hostname ?>"
                        placeholder="Hostname">
                </div>
                <div class="form-group">
                    <label for="Dispositivos_dispositivo_tipo_id">Tipo</label>
                    <select name="Dispositivos[dispositivo_tipo_id]" class="form-control" id="Dispositivos_dispositivo_tipo_id">
                        <?php if($tipos) : ?>
                        <?php foreach($tipos as $tipo) : ?>
                        <option value="<?= $tipo['id']?>" <?= $model->dispositivo_tipo_id == $tipo['id'] ? 'selected' : null ?>>
                            <?= $tipo['nome'] ?>
                        </option>
                        <?php endforeach ?>
                        <?php endif ?>
                    </select>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="Dispositivo_ip">IP</label>
                    <input type="text" name="Dispositivos[ip]" class="form-control" value="<?= $model->ip ?>" placeholder="ip">
                </div>

            </div>

        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>

</form>