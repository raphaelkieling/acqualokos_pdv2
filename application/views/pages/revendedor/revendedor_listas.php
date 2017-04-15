<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/revendedor.css">
</head>
<body>
    <div class="container">
        <br>
        <h3 style="text-align:center">Revendedor</h3>

        <?php foreach($data as $lista){?>
        <div class="lista-container">
            <div class="lista-info">
                <p style="margin-top:10px;">Lista <?= $lista['idLista']?> - <?= $lista['pontoVenda']?> (<?= $lista['revendedor']?>)</p>
                <p><?=$lista['localidade']?></p>
                <p><?=$lista['responsavel']?></p>
                <p>24/08/2016</p>
            </div><!-- info final -->
            <div class="lista-painel">
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
                        } 
                        ?>
                    </tbody>
                </table>
            </div> <!-- painel final -->
            <br>
            <div class="row">
                <div class="six columns">
                    <button class="button-success u-full-width">Aceitar</button>
                    </div>
                <div class="six columns">
                    <button class="button-danger u-full-width">Recusar</button>
                </div>
            </div>
        </div><!-- lista FINAL -->
        <?php } ?>
    </div>
</body>
</html>