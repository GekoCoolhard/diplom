<?php
/**
 * Created by PhpStorm.
 * User: gekoc
 * Date: 19.09.2017
 * Time: 1:18
 */
?>
<hr color="black">
<div class="footer">
    <div class="footer_left">IT-Step Academy. All rights reserved.</div>
    <div class="footer_right">Created by Geko</div>
</div>
</div>

<div class="modal-bg"></div>
<div class="modal">
    <div class="modal__container">
    </div>
</div>


<script>function open_in_modal(obj) {
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
    });</script>
</body>
</html>