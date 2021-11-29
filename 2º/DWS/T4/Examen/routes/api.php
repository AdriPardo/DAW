<?php
$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $basedir = parse_url($_ENV['APP_URL'], PHP_URL_PATH);
    $r->addRoute('GET', $basedir . '/', 'main@index');
    $r->addRoute('GET', $basedir . '/equipos', 'Equipo@getAll');
    $r->addRoute('GET', $basedir . '/equipos/{id:\d+}', 'Equipo@getById');
    $r->addRoute('GET', $basedir . '/equipos/{id:\d+}/jugadores', 'Equipo@getJugadores');
    $r->addRoute('GET', $basedir . '/jugadores', 'Jugador@getAll');
    $r->addRoute('POST', $basedir . '/login', 'Login@login');
    $r->addRoute('POST', $basedir . '/protegida', 'Protegida@checkToken');
    $r->addRoute('POST', $basedir . '/admin', 'Admin@checkAdmin');
    $r->addRoute('POST', $basedir . '/logout', 'Logout@logout');
});

$httpMethod = strtoupper($_POST['_method'] ?? $_SERVER['REQUEST_METHOD']);
$uri = $_SERVER['REQUEST_URI'];


if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        $controllerName = '\\app\\controllers\\Main';
        $action = 'error';
        $controller = new $controllerName();
        $controller->$action();
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $partes = explode('@', $handler);
        $controllerName = '\\app\\controllers\\' . ucfirst($partes[0]);
        $action = $partes[1];
        $controller = new $controllerName();
        $vars = $routeInfo[2];
        $controller->$action($vars);
        break;
}
