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
        if ( $(this).find('.fa-chevron-right').hasClass('fa-chevron-right') == true ) {
            $(this).find('.fa-chevron-right').removeClass('fa-chevron-right').addClass('fa-chevron-down');
        } else {
            $(this).find('.fa-chevron-down').removeClass('fa-chevron-down').addClass('fa-chevron-right')
        }
    });
// SIDEBAR FUNCTION ON CLICK


// ADD MORE FIELD IN GALLERY ADMIN
    $('.form-field__add-image').on('click', function() {
        $('.form-field__gallery-wrapper').append(`<div class="form-field__gallery-box">\
        <div class="form-field__list form-field__list--error">\
            <label class="form-field__label">Title :</label>\
            <div class="form-field__input-wrapper">\
                <input type="text" class="form-field__input">\
                <span class="form-field__error">error message</span>\
            </div>\ 
        </div>\ 
        <div class="form-field__list form-field__list--textarea">\
            <label class="form-field__label">Description :</label>\
            <div class="form-field__input-wrapper">\
                <textarea class="form-field__textarea"></textarea>\
            </div>\
        </div>\
        <div class="form-field__list form-field__list--textarea">\
            <label class="form-field__label">Image :</label>\
            <div class="form-field__input-wrapper">\
                <input type="file" hidden id="input-file">\
                <a class="form-field__upload">Browse Image</a>\
                <span class="form-field__upload-text">Image name</span>\
                <div class="form-field__image-wrapper">\
                    <img src="/images/placeholder/placeholder.png" class="form-field__image">\
                </div>\
            </div>\
        </div>\
    </div>\
    `)
    });
// END OF ADDING MORE FIELD IN GALLERY ADMIN