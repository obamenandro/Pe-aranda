// SCROLL TO TOP SCRIPT
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
// END OF SCROLL TO TOP

// UPLOADING IMAGE FUNCTION
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.form-field__image-wrapper img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#input-file").change(function(){
    readURL(this);
});


// SIDEBAR FUNCTION ON CLICK
    $('.admin-sidebar__item').on('click', function() {
        $(this).find('.admin-sidebar__submenu').slideToggle();
        if ( $(this).find('.fa-chevron-right').hasClass('fa-chevron-right') == true ) {
            $(this).find('.fa-chevron-right').removeClass('fa-chevron-right').addClass('fa-chevron-down');
        } else {
            $(this).find('.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-right')
        }
    });
// SIDEBAR FUNCTION ON CLICK

//close button for modal
$('.modal-confirmation__close-btn').click(function() {
    $('.modal-confirmation').hide();
})

// Flash Message
setTimeout(function() {
    $('.flash-message').fadeOut();
}, 3000)
