function aceitaLista(idLista){
    if(confirm('Voce tem certeza absoluta que quer isso?')){
        $.ajax({
            url: "revendedor_aceita/"+idLista,
            success:function(data){
                if(data == "sucesso"){
                    $('#'+idLista+" > .row").hide();
                    $('#'+idLista+" > .lista-painel").html("<p style='text-align:center'>Esperando confirmação do Acqualokos</p>");
                }
            }
        }); //final ajax
    }//final if
};

function cancelaLista(idLista){
    if(confirm('Voce tem certeza absoluta que quer isso?')){
        $.ajax({
            url: "revendedor_cancela/"+idLista,
            success:function(data){
                if(data == "sucesso"){
                   $('#'+idLista).animate({"height":"0","opacity":"0"},"slow",()=>{
                       $('#'+idLista).hide();
                   });
                }
            }
        }); //final ajax
    }//final if
};