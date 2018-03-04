// ON SCROLL SHOW GO TO TOP BUTTON
$(window).scroll(function(){
    if( $(this).scrollTop() > 200 ) {
        $('.gototop').addClass('gototop--active')     
    } else {
        $('.gototop').removeClass('gototop--active') 
    }
})

$('body').delegate('.gototop','click', function() {
    $('html').animate({ scrollTop: 0 }, 'slow');
    return true; 
});

// END SCRIPT FOR GO TO TOP BUTTON