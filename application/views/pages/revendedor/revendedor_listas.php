<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/revendedor.css">
    <link rel="stylesheet" href="<?=base_url();?>/src/css/lista.css">
</head>
<body>
    <div class="container">
        <br>
        <h3 style="text-align:center">Olá <?= $this->session->userdata('user_logado')['nome']?>!</h3>
        <div class="row">
            <button class="u-full-width" id="button_hide">
                <img class="img-button" src="<?=base_url()?>src/img/unsee.png" alt="">
            </button>
        </div>
        <?php foreach($data as $lista){
            if($lista['situacao']!=3){
        ?>
        <div id="<?= $lista['idLista']?>" class="lista-container situacao-<?= $lista['situacao']?>">
            <div class="lista-info">
                <p style="margin-top:10px;">Lista <?= $lista['idLista']?> - <?= $lista['pontoVenda']?> (<?= $lista['nome']?>)</p>
                <p><?=$lista['localidade']?></p>
                <p><?=$lista['responsavel']?></p>
                <p><?= dataFormatada($lista['dataCadastro']) ?></p>
            </div><!-- info final -->
            <div class="lista-painel">
                <?php if($lista['situacao']==0){?>
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
                    }else if($lista['situacao']==1){
                        echo "<p style='text-align:center'>Esperando confirmação do Acqualokos</p>";
                    }else if($lista['situacao']==2){
                        echo "<p style='text-align:center'>Acqualokos já aceitou a lista</p>";
                    }
                ?>
            </div> <!-- painel final -->
             <?php if($lista['situacao']==0){?>
            <div class="row">
                <div class="six columns">
                    <button onclick="aceitaLista(<?=$lista['idLista']?>)" class="button-success u-full-width accept"><img class="img-button" src="<?=base_url()?>src/img/accept_min.png" alt="aceitar lista"></button>
                </div>
                <div class="six columns">
                    <button onclick="cancelaLista(<?=$lista['idLista']?>)" class="button-danger u-full-width"><img class="img-button" src="<?=base_url()?>src/img/recuse_min.png" alt="aceitar lista"></button>
                </div>
            </div>
            <?php } //verifica se a situacao esta certa?>
        </div><!-- lista FINAL -->
        <?php 
            }//if que verifica se ta cancelada     
        }   //foreach
         ?>
    </div>
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/revendedor.js"></script>
</body>
</html>