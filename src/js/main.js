 $('#button_header_info').click(function(){
    var target = $('#main');
    $('html,body').animate({
        scrollTop:target.offset().top
    })
})
pegaListaTudo()
function pegaListaTudo(table){
  $.ajax({
        url: 'principal/lista_total',
        success:function(data){
            table.html("");
            for(var i=0;i<data.length;i++){
                var nome = data[i]['nome'];
                var documento = data[i]['documento'].substring(0,6)+"*******";
                table.append("<tr><td>"+nome+"</td><td>"+documento+"</td></tr>");
            }
        }
    })
}

function pegaListaFiltro(table,palavra){
    $.ajax({
        url:'principal/lista/'+palavra,
        success:function(data){
            table.html("");
            for(var i=0;i<data.length;i++){
                var nome = data[i]['nome'];
                var documento = data[i]['documento'].substring(0,6)+"*******";
                table.append("<tr><td>"+nome+"</td><td>"+documento+"</td></tr>");
            }
        }
    })
}

function searchMain(table){
    var palavra = $('#serch_accepts').val();
    var table   = $('.table-search > table > tbody');

    if(palavra.trim() == ""){   
        //pega lista sem filtro
        pegaListaTudo(table);
        table.html("<tr><td colspan='2' style='color:#f2f2f2'>Nada por enquanto</td></tr>");
    }else{ 
        //pega a lista do metodo principal com filtro
        pegaListaFiltro(table,palavra);
    } // fim do else  
}