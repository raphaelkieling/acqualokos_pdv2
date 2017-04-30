<head>  
    <link rel="stylesheet" href="<?= base_url()?>/src/css/chave.css">
</head>
<body>
    <div class="container">
        <br>
        <h1>Cadastro</h1>
        <div class='warning-message-validation'></div>
        <div class="container-chave">        
            <br>
            <input id="chave" class="u-full-width" type="text" name="chave" value="" placeholder="Chave de acesso: Exemplo HKSLLIN-dKKNLllksi2">
            <br>
            <br>
            <input id="nome" class="u-full-width" type="text" name="nome" value="" placeholder="Nome">
            <div class="row">
                <div class="six columns">
                    <input id="senha" class="u-full-width" type="password" name="senha" value="" placeholder="Senha">
                </div>
                <div class="six columns">
                    <input id="senha_igual" class="u-full-width" type="password" name="senha_igual" value="" placeholder="Digite novamente a senha">
                </div>
            </div>
            <button onclick="cadastrarChave()" class="u-full-width button-primary">Cadastrar</button>
        </div>
        <div class="container-buttons">
            <a href="<?=base_url()?>"><button class="u-full-width">Voltar</button></a>
        </div>
    </div>
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/chave.js"></script>
</body>
</html>