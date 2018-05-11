<?php
/**
 * Created by PhpStorm.
 * User: gekoc
 * Date: 11.05.2018
 * Time: 9:15
 */
function init() {

    // если переменная $_GET['p'] не пуста
    if ( ! empty( $_GET['p'] ) ) {

        // определение переменной $page - в нее помещается значение из $_GET['p']
        $page = $_GET['p'];
    } else {

        // если в $_GET['p'] ничего нет(не указали),
        // в $page заносится строка определяющая имя основного файла с контентом
        $page = 'main';
    }

    // к имени файла прибавляется его расширение
    $file_path = $page . '.php';

    // если указанного файла не существует
    if ( ! file_exists( $file_path ) ) {

        // необходимо указать путь к файлу, содержащему текст об ошибке
        $file_path = '404.php';
    }

    // подключение шапки страницы
    include 'header.php';

    // подключение контента страницы
    include $file_path;

    // подключение подвала страницвы
    include 'footer.php';
}

function get_menu() {
    $list = [
        'main'     => [
            'title' => 'Главная',
        ],
        'tokio'    => [
            'title' => 'Токио',
        ],
        'kioto' => [
            'title' => 'Киото',
        ],
        'visa' => [
            'title' => 'Виза',
        ],
    ];

    $out = '';
    foreach ( $list as $slug => $item ) {
        $slug = 'index.php?p=' . $slug;
        $out  .= '<li class="menu__item"><a class="menu__link" href="' . $slug . '">' . $item['title'] . '</a></li>'."\n";
    }

    $out = '<div class="menu"><ul class="menu__list">' . $out . '</ul></div>';

    return $out;
}