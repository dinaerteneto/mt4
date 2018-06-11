<?php if($models) : ?>

<div class="box">

    <div class="box-header with-border">
        <h3 class="box-title">Dispositivos</h3>

        <a href="/dispositivo/create" class="btn-sm btn-success pull-right" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-file-o"></i> Incluir dispositivo</a>
    </div>    

    <div class="box-body">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Hostname</th>
                <th>Ip</th>
                <th>Fabricante</th>
                <th>Tipo</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($models as $model) : ?>
            <tr>
                <td><?= $model['nome'] ?></td>
                <td><?= $model['hostname'] ?></td>
                <td><?= $model['ip'] ?></td>
                <td><?= $model['fabricante']?></td>
                <td><?= $model['tipo']?></td>
                <td>
                    <div class="btn-group">
                        <a href="/ssh/send?id=<?= $model['id'] ?>" class="btn btn-sm btn-default" title="SSH com este dispositivo" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-expeditedssl"></i></a>
                        <a href="/dispositivo/update?id=<?= $model['id'] ?>" class="btn btn-sm btn-default" title="Alterar este dispositivo" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit"></i></a>
                        <a href="/dispositivo/delete?id=<?= $model['id'] ?>" class="btn btn-sm btn-default ask-delete" title="Excluir este dispositivo"><i class="fa fa-fw fa-trash-o"></i></a>
                    </div>
                    
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Nenhum dispositivo encontrado.</p>
<?php endif ?>
    </div>
</div>