<head>
    <link rel="stylesheet" href="<?=base_url();?>/src/css/acqualokos.css">
</head>
<body>
    <div class="container">
      <div class="img_container">
            <img class="img-header" src="<?=base_url();?>/src/img/acqualokos_logo.png" alt="">
      </div>

      <br>
      <?php $message = $this->session->flashdata('message');
        if($message){
            echo "<div class='warning-message'>".$message."</div>";
        }
      ?>

      <?= form_open("Controller_login/login/Acqualokos")?>
        <input type="text" placeholder="Nome" class="u-full-width" name="nome">
        <input type="password" placeholder="Senha" class="u-full-width" name="senha">

         <button type="submit" class="u-full-width button-primary u-pull-right "><img class="img-button" src="<?=base_url()?>src/img/send_white.png" alt="botão de login"></button>
      <?= form_close();?>
      
    </div><!--Container-->
    
</body>
</html>