<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

    <link rel="stylesheet" href="<?= base_url();?>/src/css/normalize.css">
    <link rel="stylesheet" href="<?= base_url();?>/src/css/skeleton.css">
    <link rel="stylesheet" href="<?= base_url();?>/src/css/header.css">
    <link rel="stylesheet" href="<?= base_url();?>/src/css/message.css">
    <link rel="stylesheet" href="<?= base_url();?>/src/css/button.css">

    <title>Sistema de Revendedores</title>
    <script src="<?=base_url()?>src/js/pace.min.js"></script>
</head>
<body>
    <header>
       <div class="header_container">
           <a href="<?=base_url()?>"><img class="header_logo" src="<?= base_url();?>src/img/ponto_de_venda.png" alt=""></a>
           <?php
                $tipo = $this->session->userdata('user_logado')['tipo']>=1;
                if($tipo !=0){
            ?>
                    <a href="<?=base_url()?>Controller_login/sair">
                        <button class="button-header" type="">
                            <img class="img-button" src="<?=base_url()?>src/img/logout.png" alt="">
                        </button>
                    </a>
            <?php
               }
            ?>
       </div>
    </header>