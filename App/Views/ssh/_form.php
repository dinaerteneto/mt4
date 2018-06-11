<?php
use App\Src\Bootstrap\Bootstrap;

?>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" id="form-ssh">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Conexão SSH</h4>
    </div>
    <div class="modal-body">
        <div class="clearfix">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="Ssh_ip">IP</label>
                    <input type="text" name="Ssh[ip]" class="form-control" value="<?= $model->ip ?>" placeholder="ip">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Ssh_user">Usuário</label>
                    <input type="text" name="Ssh[username]" class="form-control" value="" placeholder="usuário">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Ssh_password">Senha</label>
                    <input type="password" name="Ssh[password]" class="form-control" value="">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="Ssh_command">Comando</label>
                    <textarea name="Ssh[command]" class="form-control" id="Ssh_command"></textarea>
                </div>                
            </div>

            <div class="col-md-12" id="result-ssh">

            </div>

        </div>

    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar comando</button>
    </div>

</form>