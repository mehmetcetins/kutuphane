<?php

$app = require('app/app.php');
$url = '/' . $_GET['route'];

$routes = [];

foreach ($app['resources'] as $route => $resource) {
    preg_match('/([\/A-Za-z0-9]*)(@[a-z]*)?/', $route, $routeParts);
    
    $requested = $routeParts[1];
    $method = isset($routeParts[2]) ? $routeParts[2] : '@get';
    
    if ($url == $requested && (($_POST && $method == '@post') || (!$_POST && $method == '@get'))) {
        preg_match('/([\/A-Za-z0-9]*)(@[a-z]*)?/', $resource, $parts);
        
        require_once('app/' . $parts[1] . '.php');
        $exploded = explode('/', $parts[1]);
        $className = array_pop($exploded);
        
        $controller = new $className();
        $controller->{str_replace('@', '', $parts[2])}();
    }
}

function render($tpl, $vars = []) {
    foreach ($vars as $name => $value) {
        $$name = $value;
    }
    
    ob_start();
    include('app/templates/' . $tpl . '.php');
    $content = ob_get_contents();
    ob_end_clean();

    include('app/templates/layout.php');
}