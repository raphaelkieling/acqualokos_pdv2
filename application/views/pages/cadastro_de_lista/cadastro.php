<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/cadastro_lista.css">
</head>
<body>
    <div class="container">
        <div class="img_container">
            <img class="img-lista" src="<?=base_url();?>/src/img/paper_pen.png" alt="">
        </div>
        <?= form_open('Controller_cadastro/cadastro');?>

            <h3>Cadastro de listas</h3>
            <p style="color:#e74c3c">Todos os itens são obrigatórios</p>
            <?php 
                echo "<div class='warning-message-validation'>".validation_errors()."</div>";
            ?>

            <input name="pontodevenda" type="text" placeholder="Ponto de Venda" class="u-full-width" value="<?php echo set_value('pontodevenda'); ?>">
            <input name="localidade" type="text" placeholder="Localidade" class="u-full-width" value="<?php echo set_value('localidade'); ?>">
            <input name="responsavel" type="text" placeholder="Responsável" class="u-full-width" value="<?php echo set_value('responsavel'); ?>">
            <input name="descricao" type="hidden" value=" " placeholder="Descrição" class="u-full-width" value="<?php echo set_value('descricao'); ?>">
            <select name="revendedor" class="u-full-width">
            <?php
                foreach($array_revendedores as $revendedores){
                    echo "<option value='".$revendedores['idUsuario']."'>".$revendedores['nome']."</option>";
                }
            ?>
            </select>
            
            <h3>Funcionários que serão inclusos</h3>
            <div class="row">
                <div class="one column">
                    1
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width" required>
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width" required>
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    2
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    3
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    4
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    5
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    6
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    7
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    8
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    9
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    10
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    11
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    12
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    13
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    14
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <div class="row">
                <div class="one column">
                    15
                </div>
                <div class="six columns">
                   <input type="text" name="f[]" placeholder="Nome" class="u-full-width">
                </div>
                <div class="five columns">
                   <input type="text" name="d[]" placeholder="Documento" class="u-full-width">
                </div>
            </div>

            <button type="submit" class="u-full-width button-primary">Enviar</button>
        <?= form_close();?>

    </div>
</body>
</html>