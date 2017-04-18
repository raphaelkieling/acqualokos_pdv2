<head>
    <link rel="stylesheet" href="<?=base_url()?>src/css/chave.css">
</head>
<body>
    <div class="container">
        <br>
            <img class="img-header" src="<?=base_url()?>src/img/keys.png" alt="chave de acesso imagem">
        <br>
        <br>
        <div class='warning-message-validation'></div>
        <div id="container-chave">
            <input class="u-full-width" type="text" id="input_chave" value="<?=$chave?>" readonly>
            <div class="row">
                <div class="eight columns">
                    <strong>Permissão</strong>
                </div>
            </div>
            <div class="row">
                <div class="eight columns">
                    <select id="permissao" class="u-full-width">
                        <option value="0">Apenas cadastro</option>
                        <option value="1">Revendedor</option>
                        <option value="2">Acqualokos</option>
                    </select>
                </div>
                <div class="four columns">
                    <button onclick="novaChave();" class="u-full-width button-primary button-remove">
                        <img class="img-button " src="<?=base_url()?>src/img/key_white.png" alt="">
                    </button>
                </div>
            </div>
        </div><!--Cotainer chave final-->

        <div class="table">
            <table>
                <thead>
                    <th>Chave</th>
                    <th>Permissão</th>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div><!--container de cadastro de chave-->
    <script src="<?=base_url()?>src/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>src/js/chave.js"></script>
</body>
</html>