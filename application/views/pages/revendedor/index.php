<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/revendedor.css">
</head>
<body>
    <div class="container">
      <div class="img_container">
            <img src="<?=base_url();?>/src/img/person_revendedor_careca.png" alt="">
      </div>

      <br>
      <?php $message = $this->session->flashdata('message');
        if($message){
            echo "<div class='warning-message'>".$message."</div>";
        }
      ?>

      <?= form_open("Controller_login/login/Revendedor")?>
        <input type="text" placeholder="Nome" class="u-full-width" name="nome">
        <input type="password" placeholder="Senha" class="u-full-width" name="senha">

        <div class="row">
          <div class="six columns">
              <input type="checkbox" name="" value=""> Salvar nome
          </div>
          <div class="six columns" style="text-align:right">
              <a href="#">Esqueci minha senha</a>
          </div>
        </div>

         <button type="submit" class="u-full-width button-primary u-pull-right">Enviar</button>
      <?= form_close();?>
      
    </div><!--Container-->
    
</body>
</html>