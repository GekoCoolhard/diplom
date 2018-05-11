function open_in_modal(obj) {
    var href = jQuery(obj).attr('href');
    var element = '<img src="' + href + '">'; // <img src="face.jpg">
    var modal = jQuery('.modal');
    var modal_bg = jQuery('.modal-bg');
    modal.find('.modal__container').html(element);
    modal.addClass('active');
    modal_bg.addClass('active');
}

function close_modal() {
    var modal = jQuery('.modal');
    var modal_bg = jQuery('.modal-bg');
    modal.removeClass('active');
    modal_bg.removeClass('active');
}

jQuery('[data-event="open-in-modal"]').on('click', function (event) {
    event.preventDefault();
    var obj = this;
    open_in_modal(obj);
});

jQuery('.modal-bg, .modal__close').on('click', function () {
    close_modal();
});

