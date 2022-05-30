
<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/' :
        require __DIR__ . "/../templates/home.html";
        break;

    case '' :
        require __DIR__ . '/../templates/home.html';
        break;

    case '/about':
        require __DIR__ . '/../templates/about.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../templates/error.html';
        break;

}

?>
