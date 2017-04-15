<head>
     <link rel="stylesheet" href="<?=base_url();?>/src/css/cadastro_lista.css">
</head>
<body>
    <div class="container" style="text-align:center;">
        <!-- Imagem -->
        <img src="<?=base_url()?>src/img/rocket_flat.png" alt="Sucesso no cadastro" style="width:90%;height:auto">
        <br>
        <br>
        <br>
        <span class="success-line"></span>
        <!--Frase  -->
        <p style="color:#2ecc71;">Obrigado por cadastrar a lista! Acompanhe se seu nome foi aceito através do www.acqualokos.pdv.com.br</p>

        <!-- Dois botões de saida e continuação de cadastro -->
        <div class="row">
            <div class="six columns">
                <a href="<?=base_url()?>Controller_login/sair"><button type="" class="u-full-width"> Sair e voltar para a página principal</button></a>
            </div>
            <div class="six columns">
                <a href="<?=base_url()?>cadastro_lista"><button type="" class="u-full-width">Continuar cadastrando</button></a>
            </div>
        </div>

    </div>
</body>
</html>