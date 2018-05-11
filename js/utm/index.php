<?php
/**
 * Created by PhpStorm.
 * User: gekoc
 * Date: 11.05.2018
 * Time: 4:17
 */?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="head">
            <h1>UTM ГЕНЕРАТОР</h1>
            <h2>Здесь Вы сможете создать свою ссылку c UTM метками </h2>
        </div>
        <div class="description">
            <h3>Что такое UTM метка?</h3>
            UTM-метка (от англ. Urchin Tracking Module — Модуль отслеживания Urchin) — специальная переменная, добавляемая к ссылке в формате GET-параметра (или проще «хвоста» вида site.ru/?utm=content), созданная для отслеживания информации об источниках переходов, с которых приходит пользователь.
        </div>
        <div class="generator">
            <h2>Генератор</h2>

                <label for="target_page_address">Введите адрес целевой страницы <span class="red_star">*</span></label>
                <div class="target_page_address form-control">
                    <div class="http">http://
                    <input data-required="required" type="text" name="target_page" id="target_page" placeholder="site.com" value="mysite.ru">
                    <div class="alert"></div>
                    </div>
                </div>


                Выберите источник трафика

                <div id="traffic_source" class="form-control">
                    <input name="traffic_source" type="radio" value="Произвольно">Произвольно
                    <input name="traffic_source" type="radio" value="Google Adwords">Google Adwords
                    <input name="traffic_source" type="radio" value="Яндекс.Директ">Яндекс.Директ
                    <input name="traffic_source" type="radio" value="Вконтакте">Вконтакте
                    <input name="traffic_source" type="radio" value="Таргет@Mail.ru">Таргет@Mail.ru
                </div>

            <div class="inputs">

                    <label for="utm_source">Источник кампании <span class="red_bg">utm_source *</span></label>
                    <div class="form-control">
                        <input placeholder="Google, yandex, VK" data-required="required" type="text" name="utm_source" id="utm_source">
                        <div class="alert"></div>
                    </div>


                    <label for="utm_medium">Тип трафика <span class="red_bg">utm_medium *</span></label>
                    <div class="form-control">
                        <input placeholder="banner, email" data-required="required" type="text" name="utm_medium" id="utm_medium">
                        <div class="alert"></div>
                    </div>


                    <label for="utm_campaign">Название кампании <span class="red_bg">utm_campaign *</span></label>
                    <div class="form-control">
                        <input placeholder="Название рекламной компании" required="required" type="text" name="utm_campaign" id="utm_campaign">
                        <div class="alert"></div>
                    </div>


                    <label for="utm_content">Идентификатор объявления <span class="grey_bg">utm_content</span></label>
                    <div class="form-control">
                        <input type="text" name="utm_content" id="utm_content">
                    </div>


                    <label for="utm_term">Ключевое слово <span class="grey_bg">utm_term</span></label>
                    <div class="form-control">
                        <input placeholder="Например: пластиковые окна..." type="text" name="utm_term" id="utm_term">
                    </div>
                <div class="form-control result"><input placeholder="Здесь появится Ваша ссылка"></div>


            </div>
            <div class="button"><button class="generate">Сгенерировать ссылку с UTM-метками</button></div>
    </div>
        <script>
            $(document).ready(function() {
                $('.generate').on( 'click', function() {
                    var a = [];
                    var target_page = '';

                    $('input[type=text]').each(function(i) {
                        if ($(this).val().length == 0 && $('input').attr('data-required') == 'required') {
                            $(this).next().text('Заполните это поле.');
                            return false;
                        } else {
                            $(this).next().text('');
                        }
                        if ($(this).attr('id') == 'target_page' && $(this).val().length != 0) {
                            target_page = 'http://' + $('#target_page').val() + '?';
                        } else {
                            a.push( $(this).attr('name') + '=' + $(this).val() );
                        }
                    });

                    var result = target_page + a.join('&');
                    $('.result').text(result);
                });
            });
        </script>
</body>
</html>
