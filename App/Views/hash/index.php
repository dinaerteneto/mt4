
<div class="box">

    <div class="box-header with-border">
        <h3 class="box-title">Hashes</h3>
    </div>    

    <div class="box-body">

    <div class="col-sm-12 form-group row">
        
        <form method="post" action="">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Crypt_text">Digite o texto a ser criptografado</label>
                    <input type="text" name="Crypt[text]" value="<?= isset($_POST['Crypt']['text']) ? $_POST['Crypt']['text'] : null ?>" class="form-control" placeholder="texto a ser critografado">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Crypt_text">Digite o hash para verificação</label>
                    <input type="text" name="Crypt[hash]" value="<?= isset($_POST['Crypt']['hash']) ? $_POST['Crypt']['hash'] : null ?>" class="form-control" placeholder="Hash para verificação">
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>



    <?php if (isset($hash) && !empty($hash)) : ?>
        <div class="col-sm-12">
            <table class="table table-striped">
                    <tr>
                        <th>SHA512</th>
                        <td><?= $hash['sha512'] ?></td>
                        <td><strong><?= $hash['sha512_compare'] ?></strong></td>
                    </tr>
                    
                    <tr>
                        <th>HMAC</th>
                        <td><?= $hash['hmac'] ?></td>
                        <td><strong><?= $hash['hmac_compare'] ?></strong></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <p class="col-sm-12">Nenhum hash criado.</p>
    <?php endif ?>
    </div>
</div>