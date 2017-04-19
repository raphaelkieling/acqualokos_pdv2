function search(url){
    var word   = $('#search').val();
    var filtro = $('#filtro').val();
    var order  = $('#order').val();

    if(word.length == 0){
        $('tbody').html("<tr><td colspan='2'><img src='"+url+"src/img/comp_zoom_ui.png'></td></tr>");
        limpaInfo();
    }

    var word_en = encodeURIComponent(word);
    
    $.ajax({
        url:'bilheteria/'+filtro+'/'+word_en+'/'+order,
        success:function(data){
            $('tbody').html(data);
        }
    });
}
function limpaInfo(){
    $('#inf_revendedor').html("");
    $('#inf_responsavel').html("");
    $('#inf_lista').html("");
    $('#inf_localidade').html("");
    $('#inf_veio').html("");
    $('#inf_data').html("");
    $('.container-info > button').remove();
}
function pegaInfoPessoa(idLista,idUsuario){
    limpaInfo();
    $.ajax({
        url:'bilheteria/'+idLista+"/"+idUsuario,
        datatype:'json',
        success:function(data){
            var revendedor = data[0].nome;
            var responsavel= data[0].responsavel;
            var lista = data[0].idLista;
            var veio  = data[0].vindas;
            var date = data[0].dataCadastro;
            var localidade = data[0].localidade;

            $('#inf_revendedor').html(revendedor);
            $('#inf_responsavel').html(responsavel.substr(0,10)+"...");
            $('#inf_localidade').html(localidade);
            $('#inf_lista').html(lista);
            $('#inf_veio').html(veio);
            $('#inf_data').html(date);
            $('.container-info').append("<button class='u-full-width button-primary' onclick='pessoaVeio("+idUsuario+")'>Ele veio hoje</button>");
        },
        beforeSend:function(){
            $('span').animate({'opacity':'0'},300);
        },
        complete:function(){
            $('span').animate({'opacity':'1'},300);
        }
    })
}

function pessoaVeio(idUsuario){
    var veio = $('#inf_veio').text();
    var result = parseInt(veio)+1;

    if(confirm("Ele veio mesmo?")){
        $.ajax({
            url:'bilheteria/'+idUsuario,
            success:function(data){
                if(data == true){
                    $('#inf_veio').html(result);
                }      
            }
        });// Sai ajax
    }// Sai do if
}