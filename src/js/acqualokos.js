function aceitaLista(idLista){
    if(confirm('Voce tem certeza absoluta que quer isso?')){
        $.ajax({
            url: "acqualokos_aceita/"+idLista,
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

function cancelaLista(idLista){
    if(confirm('Voce tem certeza absoluta que quer isso?')){
        $.ajax({
            url: "acqualokos_cancela/"+idLista,
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


var unsee = true;
$('.situacao-0').hide();
$('.unsee').css("background","#83D6DE");

$('.unsee').click(()=>{
    unsee = !unsee;
    if(unsee == true){
        $('.situacao-0').hide();
        $('.unsee').css("background","#83D6DE");

    }else{
        $('.situacao-0').show();
        $('.unsee').css("background","white");
    }
});