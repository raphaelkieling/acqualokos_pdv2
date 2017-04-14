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

      <br>
      
      <?= form_open('Controller_login/login');?>
        <input type="text" placeholder="Nome" class="u-full-width">
        <input type="password" placeholder="Senha" class="u-full-width">

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