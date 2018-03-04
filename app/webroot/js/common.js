$(window).scroll(function(){
    if( $(this).scrollTop() > 200 ) {
        $('.gototop').addClass('gototop--active')     
    } else {
        $('.gototop').removeClass('gototop--active') 
    }
})

$('.gototop').click(function() {
    $('html,body').animate({ scrollTop: 0 }, 'slow');
    return true; 
});