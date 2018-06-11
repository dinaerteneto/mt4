<div class="box">

    <div class="box-header with-border">
        <h3 class="box-title">Relatório</h3>
    </div>  
    <div class="box-body">
        <p>Olá, vou tentar explicar de forma resumida as decisões e dificuldades que encontrei para desenvolver o projeto.</p>

        <p>
            Durante todo o teste utilizei o servidor embutido do php.<br>
            <code>php –S localhost:8080</code><br>
            Rodando este commando no diretório raiz, todo o projeto deve funcionar.
        </p>

        <p>
            Utilizei um framework MVC de minha autoria, como foi solicitado no início do do teste.<br>
            Ao longo do projeto utilizei este “mini” framework e também uma classe para acesso ao banco de dados utilizando o padrão singleton.<br>
            Para acessa via SSH, utilizei lib phplibsec, e para este caso confesso que a escolha, foi devido a velocidade no desenvolvimento, tendo em vista o curto prazo.<br>
            Para acesso via ssh, testei com o vagrant (box homestead) que tenho instalado em minha máquina.<br>
        </p>

        <p>
            Tive dificuldades quando entrou na questão de criptografia, pois confesso que até o presente momento, a única criptografia que utilizei foi a do próprio php e somente para armazenamento seguro de senhas.
        </p>

        <p>
            Já utilizei o padrão MD5 e SHA1, entretanto, já não utilizo mais, pois sei que pode ser quebrado facilmente. <br>
            Atualmente venho utilizando o método crypt do php.
        </p>

        <p>Para a criptografia de César fixei o interval de 4 algarismo.</p>
    </div>

</div>