<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/cadastro_lista.css">
</head>
<body>
    <div class="container">
        <div class="img_container">
            <img src="<?=base_url();?>/src/img/paper_pen.png" alt="">
        </div>

        <?= form_open('Controller_cadastro/cadastro');?>

            <h3>Cadastro de listas</h3>
            <p style="color:#e74c3c">Todos os itens são obrigatórios</p>

            <input type="text" placeholder="Ponto de Venda" class="u-full-width">
            <input type="text" placeholder="Localidade" class="u-full-width">
            <input type="text" placeholder="Responsável" class="u-full-width">
            <input type="text" placeholder="Revendedor" class="u-full-width">

            <h3>Funcionários que serão inclusos</h3>
            <div class="row">
                <div class="one column">
                    1
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