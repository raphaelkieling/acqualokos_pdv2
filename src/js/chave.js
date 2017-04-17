function cadastrarChave(){
    var chave = $('#chave').val();
    var nome  = $('#nome').val();
    var senha = $('#senha').val();
    var senha_igual = $('#senha_igual').val();
    $('.warning-message-validation').animate({'height':'0px'},"slow");
    $.ajax({
        url:"chave/cadastro",
        type:'POST',
        data:{chave:chave,nome:nome,senha:senha,senha_igual:senha_igual},
        success:function(data){
            $('.warning-message-validation').animate({'height':'100px'},"slow",function(){
                $(this).html(data);

                if(data == "<p class='p'> Cadastrado </p>"){
                    $('.container-chave').animate({'height':'0px'},"slow",function(){
                        $(this).hide();
                    });
                }
            })
            
        }
    })

}