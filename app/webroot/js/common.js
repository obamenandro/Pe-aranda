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
                $('.form-field__image').attr('src', e.target.result);
                $('.form-field__upload-text').text(input.files[0]['name'])
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#input-file").change(function(){
        readURL(this);
    });

    $('.form-field__upload').on('click',function() {
        $('#input-file').trigger('click');
        readURL(this);
    })
// END UPLOADING IMAGE FUNCTION


// SIDEBAR FUNCTION ON CLICK
    $('.admin-sidebar__item').on('click', function() {
        $(this).find('.admin-sidebar__submenu').slideToggle();
    });
// SIDEBAR FUNCTION ON CLICK