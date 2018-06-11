<div class="nav-tabs-custom">

    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#tab1" data-toggle="tab">Criptografar</a>
        </li>
        <li class="">
            <a href="#tab2" data-toggle="tab">Descriptografar</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab1">

            <div class="clearfix">

                <form method="post" id="form-crypt">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="Crypt_text">Digite o texto que deseja criptografar</label>
                            <textarea name="Crypt[text]" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right">Criptografar</button>
                    </div>
                    
                    <div class="col-sm-12" id="Crypt_result">
                    </div>

                </form>
            </div>
            
        </div>

        <div class="tab-pane" id="tab2">
            <div class="clearfix">
                <form method="post" id="form-decrypt" action="/crypt/decrypt">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="Decrypt_text">Digite o texto que deseja descriptografar</label>
                            <textarea name="Decrypt[text]" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary pull-right">Descriptografar</button>
                    </div>
                    
                    <div class="col-sm-12" id="Decrypt_result">
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>