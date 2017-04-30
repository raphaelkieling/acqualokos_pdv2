<head>
    <link rel="stylesheet" href="<?= base_url()?>/src/css/bilheteria.css">
</head>
<body>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="two columns">
                <a href="<?=base_url()?>acqualokos"><button class="u-full-width button-primary"><img class="img-button" src="<?=base_url()?>src/img/back_white.png" alt=""></button></a>
            </div>
            <div class="one column">
                <img class="icon-filter" src="<?=base_url()?>src/img/search.png" alt="">
            </div>
            <div class="five columns">
                <input onkeyup="search('<?=base_url()?>');" type="text" name="search" value="" id="search" class="u-full-width" placeholder="Pesquise">
            </div>
            <div class="one column">
                <img class="icon-filter" src="<?=base_url()?>src/img/filter.png" alt="">
            </div>
            <div class="three columns">
                <select class="u-full-width" id="filtro">
                    <option value="nome">Nome</option>
                    <option value="documento">Documento</option>
                    <option value="revendedor">Revendedor</option>
                    <option value="responsavel">Responsável</option>
                    <option value="localidade">Localidade</option>
                    <option value="pontoVenda">Ponto de Venda</option>
                    <option value="data_cadastro">Data</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="seven columns container-pessoas">
                <table>
                    <thead>
                        <th>Nome</th>
                        <th>Documento</th>
                    </thead>
                    <tbody>
                       <tr>
                            <td colspan='2'>
                                <img src="<?=base_url()?>src/img/comp_zoom_ui.png">
                            </td>
                       </tr>
                    </tbody>
                </table>
            </div>
            <div class="five columns container-info">
                <div class="header-container-info">
                    <img src="<?=base_url()?>src/img/info_black.png" alt="Informações ícone"> <div style="font-size:18px;">Informações</div>
                    <br>
                    <br><b>
                </div>
                <p><b>Revendedor: </b><span id="inf_revendedor"></span></p>
                <p><b>Responsável:</b> <span id="inf_responsavel"></span></p>
                <p><b>Ponto de Venda:</b> <span id="inf_pdv"></span></p>
                <p><b>Localidade:</b> <span id="inf_localidade"></span></p>
                <p><b>Descrição:</b> <span id="inf_descricao"></span></p>
                <p><b>Lista:</b> <span id="inf_lista"></span></p>
                <p><b>Veio </b> <span id="inf_veio"></span> <span>vezes</span></p>
                <p><b>Data Cadastro:</b> <span id="inf_data"></span></p>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/bilheteria.js"></script>
</body>
</html>