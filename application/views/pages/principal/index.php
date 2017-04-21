<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>/src/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url()?>/src/css/skeleton.css">
    <link rel="stylesheet" href="<?= base_url()?>/src/css/main.css">

    

    <title>Sistema de Revendedores</title>
</head>
<body>
    <header>
       <div class="header_container">
            <img class="header_logo" src="<?= base_url();?>src/img/ponto_de_venda.png" alt="">

            <div class="header_info">   
                <h3>Quer saber se seu nome esta na lista?</h3>
               <button id="button_header_info">Verifique</button>
            </div>
       </div>
    </header>
    <!--Final do cabeçalho, onde tem a imagem gigante-->

    <br id="main">
    <br>
    <!--Tabela de pesquisa-->
    <div class="container">
        <input class="u-full-width" type="text" id="serch_accepts" onkeyup="searchMain();" placeholder="Procure pelo nome ou documento">
        
        <div class="table-search">
             <table class="u-full-width">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Documento</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui entra o ajax do main.js -->
            </tbody>
        </table>
        </div>
       
       <!--Descricao do conteudo do main ABAIXO-->

       <p>Certifique que seu nome esteja correto. Qualquer dúvida entre em contato com seu revendedor e/ou responsável para verificar a disponibilidade do teu nome na lista! </p>
       <p>Caso queira comprar o ingresso visite o site: <a href="http://www.acqualokos.com.br">www.acqualokos.com.br</a></p>
        <div class="row">

            <div class="six columns">
                <a href="<?=base_url();?>cadastro_login">
                    <div class="box-button ">
                        <img src="<?= base_url()?>/src/img/documento.png" alt="">
                    </div>
                </a>
                <p style="text-align:center">Criar a lista</p>
            </div>
            <!--Final da primeira coluna-->
            
            <div class="six columns">
                <a href="<?=base_url();?>revendedor_login">
                    <div class="box-button">
                        <img src="<?= base_url()?>/src/img/ticket_white.png" alt="">      
                    </div>
                </a>
                <p style="text-align:center">Sou um revendedor</p>               
            </div>
            <!--Final da segunda coluna-->
        </div>
        <!--Final row-->
        <div class="row">
                <a href="<?=base_url();?>chave">
                    <div class="box-button">
                        <img src="<?= base_url()?>/src/img/info.png" alt="">      
                    </div>
                </a>
                <p style="text-align:center">Tenho uma chave de acesso</p>               
        </div>
        <!--Final row 2-->

    </div>

    <script src="<?= base_url();?>/src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url();?>/src/js/main.js"></script>
</body>
</html>