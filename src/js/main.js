 $('#button_header_info').click(function(){
    var target = $('#main');
    $('html,body').animate({
        scrollTop:target.offset().top
    })
})

function searchMain(){
    var palavra = $('#serch_accepts').val();
    var table   = $('.table-search > table > tbody');
    if(palavra == ""){
        table.html("");
    }
    $.ajax({
        url:'principal/lista/'+palavra,
        success:function(data){
            for(var i=0;i<data.length;i++){
                var nome = data[i]['nome'];
                var documento = data[i]['documento'].substring(0,6)+"*******";

                table.html("");
                table.append("<tr><td>"+nome+"</td><td>"+documento+"</td></tr>");
            }
        }
    })
}