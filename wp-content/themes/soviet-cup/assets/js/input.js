$('.plus').on('click',function(e){

    var val = parseInt($(this).prev('input').val());

    $(this).prev('input').val( val+1 );


});

$('.minus').on('click',function(e){

    var val = parseInt($(this).next('input').val());

    $(this).next('input').val( val-1 );


});