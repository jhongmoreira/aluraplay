<?php 

if (!array_key_exists('PATH_INFO', $_SERVER) || ($_SERVER['PATH_INFO'] === '/')){
    require_once( __DIR__ . '/../listagem-video.php');
} elseif ($_SERVER['PATH_INFO'] === '/novo-video'){
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        require_once( __DIR__ . '/../formulario.php');
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
        require_once( __DIR__ . '/../novo-video.php');
    }
} elseif ($_SERVER['PATH_INFO'] === '/editar-video'){
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        require_once( __DIR__ . '/../formulario.php');
    }else{
        require_once( __DIR__ . '/../editar-video.php');
    }
} elseif ($_SERVER['PATH_INFO'] === '/remover-video'){
    require_once( __DIR__ . '/../remover-video.php');
} 