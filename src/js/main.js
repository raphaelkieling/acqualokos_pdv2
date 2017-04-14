 $('#button_header_info').click(function(){
    var target = $('#main');
    $('html,body').animate({
        scrollTop:target.offset().top
    })
})