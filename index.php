<?php

session_start();

function __autoload($class) {
    if (file_exists('Library/' . $class . '.php')) {
        require_once 'Library/' . $class . '.php';
    }
}
define("FOO",     "alguma coisa");
$url = ltrim($_SERVER["REQUEST_URI"], '/');
$url = explode('/', $url);
$single = stristr($url[0], 'single');
$single2 = explode('?', $single);
if ($single2[0] === 'single') {
    $url = 'single';
} else {
    $url = $url[0];
}if ($url === 'sistema') {
    $urlSistema = ltrim($_SERVER["REQUEST_URI"], '/');
    $urlSistema = explode('/', $urlSistema);
    $urlSistema = explode('.', $urlSistema[1]);
    $id = explode('?', $urlSistema[0]);
    date_default_timezone_set('America/Sao_Paulo');
    if ($id[1] != '') {
        $init = new App($id[0]);
        $init->dispacher();
    } else {
        $init = new App($urlSistema[0]);
        $init->dispacher();
    }
} else {
    date_default_timezone_set('America/Sao_Paulo');
    $init = new App($url);
    $init->dispacher();
}