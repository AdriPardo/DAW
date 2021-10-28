 <?php
    $dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
        $basedir = '/DWS/T4/p4.1';
        $r->addRoute('GET', $basedir . '/', 'main@index');
        $r->addRoute('GET', $basedir . '/peliculas', 'Pelicula@getAll');
        $r->addRoute('GET', $basedir . '/peliculas/{id:\d+}', 'Pelicula@getById');
        $r->addRoute('GET', $basedir . '/directores/{id:\d+}', 'Director@getById');
        $r->addRoute('GET', $basedir . '/actores/{id:\d+}', 'Actor@getById');
    });
    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);
    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            // ... 404 Not Found
            $controllerName = '\\controllers\\Main';
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
            $controllerName = '\\controllers\\' . ucfirst($partes[0]);
            $action = $partes[1];
            $controller = new $controllerName();
            $vars = $routeInfo[2];
            $controller->$action($vars);
            break;
    }
