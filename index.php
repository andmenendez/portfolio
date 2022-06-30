<?php header( 'Location: /index.html' ) ;  ?>

<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/old' :
        require __DIR__ . '/index.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/portfolio.html';
        break;
}

?>