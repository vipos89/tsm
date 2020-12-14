<?php
require_once __DIR__ . '/headers/main_header.php';

?>
<div class="container">
    <form action="" id="contact-form">
        <input type="text" name="name">
        <input type="email" name="email">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit" id="sendData">Send</button>
    </form>
    <div id="result"></div>
</div>
<script>
    $(document).ready(function () {
        // слушаем отправку формы
        $( "#contact-form" ).submit(function( event ) {
            // оборачиваем при помощи jquery  данные формы
            let form = $(this);
            // отключаем стандартное поведение формы (отправку формы)
            event.preventDefault();
            // отправляем форму
            $.ajax({
                // на этот url
                url: '?action=send_mail',
                // методом пост
                type: 'post',
                // сериализуем форму
                data: form.serialize(),
                // выводим сообщение при удачном исходе
                success: function () {
                    $("#result").html('<span>success</span>')
                }
            })
        });
    });
</script>
