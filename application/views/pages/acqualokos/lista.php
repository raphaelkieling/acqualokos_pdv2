<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/acqualokos.css">
    <link rel="stylesheet" href="<?=base_url();?>/src/css/lista.css">
</head>
<body>
    <h3 style="text-align:center;margin-top:10px;">Olá <?= $this->session->userdata('user_logado')['nome']?>!</h3>

    <!--COMEÇO MENU BOTÕES FILTRO BILHETERIA ETC-->
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <button class="u-full-width unsee"> <img class="img-button" src="<?=base_url();?>/src/img/unsee.png" alt="Esconder listas que estão com os revendedores"></button>     
                </div>
                <div class="three columns">
                    <a href="<?=base_url()?>bilheteria">
                        <button class="u-full-width">
                            <img class="img-button" src="<?=base_url();?>/src/img/ticket.png" alt="">
                        </button>
                    </a>
                </div>
                <div class="three columns">
                    <a href="<?=base_url()?>acqualokos/relatorio">
                        <button class="u-full-width"><img class="img-button" src="<?=base_url();?>/src/img/statistic.png" alt=""></button>
                    </a>
                </div>
                <div class="three columns">
                    <button class="u-full-width"><img class="img-button" src="<?=base_url();?>/src/img/log.png" alt=""></button>
                </div>
            </div>
            <div class="row">
                <div class="three columns">
                    <a href="<?=base_url()?>chave/nova">
                        <button class="u-full-width">
                            <img class="img-button" src="<?=base_url();?>/src/img/key.png" alt="">
                        </button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- FIM BOTÕES -->

    <div class="container">
        <br>
        <!--COMEÇO DAS LISTAS-->
        <?php foreach($data as $lista){
            if($lista['situacao']!=3 && $lista['situacao']!=2){
        ?>
        <div id="<?= $lista['idLista']?>" class="lista-container situacao-<?=$lista['situacao']?>">
            <div class="lista-info">
                <p style="margin-top:10px;">Lista <?= $lista['idLista']?> - <?= $lista['pontoVenda']?> (<?= $lista['nome']?>)</p>
                <p><?=$lista['localidade']?></p>
                <p><?=$lista['responsavel']?></p>
                <p><?= dataFormatada($lista['dataCadastro']) ?></p>
            </div><!-- info final -->
            
            <div class="lista-painel">
                <?php if($lista['situacao']==1){?>
                <table>
                    <thead>
                        <th>Nome</th>
                        <th>Documento</th>
                    </thead>
                    <tbody>
                        <?php 
                            $modelo = $model->pegaPessoa($lista['idLista']);
                            foreach($modelo as $pessoa){
                        ?>
                        <!--Começo do pegaPessoa-->
                        <tr>
                            <td><?=$pessoa['nome']?></td>
                            <td><?=$pessoa['documento']?></td>
                        </tr>

                        <?php 
                            } //fim foreach
                        ?>
                    </tbody>
                </table>
                <?php
                    }else if($lista['situacao']==0){
                        echo "<p style='text-align:center'>Esperando confirmação do revendedor</p>";
                    }
                ?>
            </div> <!-- painel final -->
             <?php if($lista['situacao']==1){?>
            <div class="row">
                <div class="six columns">
                    <button onclick="aceitaLista(<?=$lista['idLista']?>)" class="button-success u-full-width accept"><img class="img-button" src="<?=base_url()?>src/img/accept_min.png" alt="aceitar lista"></button>
                </div>
                <div class="six columns">
                    <button onclick="cancelaLista(<?=$lista['idLista']?>)" class="button-danger u-full-width"><img class="img-button" src="<?=base_url()?>src/img/recuse_min.png" alt="aceitar lista"></button>
                </div>
            </div>
            <?php }//verifica se a situacao esta certa?>
        </div><!-- lista FINAL -->
        <?php 
            }//if que verifica se ta cancelada     
        }   //foreach
         ?>
    </div>

    <footer class="mobile">
        <div class="mobile-button unsee" >
            <img class="img-button-mobile" src="<?=base_url();?>/src/img/unsee.png" alt="Esconder listas que estão com os revendedores">    
        </div>
        <div class="mobile-button">
            <a href="<?=base_url()?>bilheteria"><img class="img-button-mobile" src="<?=base_url();?>/src/img/ticket.png" alt="Bilheteria"></a>
        </div>
        <div class="mobile-button">
            <a href="<?=base_url()?>acqualokos/relatorio"><img class="img-button-mobile" src="<?=base_url();?>/src/img/statistic.png" alt="Estatísticas"></a>
        </div>
        <div class="mobile-button">
            <img class="img-button-mobile" src="<?=base_url();?>/src/img/log.png" alt="Log">
        </div>
    </footer>
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/acqualokos.js"></script>
</body>
</html>
