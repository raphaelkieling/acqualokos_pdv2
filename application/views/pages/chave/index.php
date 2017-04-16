<head>  
    <link rel="stylesheet" href="<?= base_url()?>/src/css/chave.css">
</head>
<body>
    <div class="container">
        <div class="container-chave">
            <br><br>
            <input class="u-full-width" type="text" name="chave" value="" placeholder="Chave de acesso: Exemplo HKSLLIN-dKKNLllksi2">
            <br>
            <br>
            <input class="u-full-width" type="text" name="nome" value="" placeholder="Nome">
            <div class="row">
                <div class="six columns">
                    <input class="u-full-width" type="password" name="senha" value="" placeholder="Senha">
                </div>
                <div class="six columns">
                    <input class="u-full-width" type="password" name="senha_igual" value="" placeholder="Digite novamente a senha">
                </div>
            </div>
            <button class="u-full-width button-primary">Cadastrar</button>
            <a href="">Esqueci minha senha</a><br>
            <a href="">Não tem a chave? Peça uma!</a>
        </div>
    </div>
</body>
</html>