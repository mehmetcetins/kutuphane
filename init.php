<?php

$config = require('config.php');
$app = require('app/app.php');
$url = '/' . $_GET['route'];

$routes = [];
    try{
        $db = new PDO("mysql:
            host={$config['DATABASE']['HOST']};
            dbname={$config['DATABASE']['NAME']};
            charset={$config['DATABASE']['CHARSET']}",
            $config['DATABASE']['USER'],
            $config['DATABASE']['PASS']
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        $e->getMessage();
    }


foreach ($app['resources'] as $route => $resource) {
    preg_match('/([\/A-Za-z0-9]*)(@[a-z]*)?/', $route, $routeParts);
    
    $requested = $routeParts[1];
    $method = isset($routeParts[2]) ? $routeParts[2] : "";
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
    if ($url == $requested && (($_POST && $method == '@post') || (!$_POST && $method == '@get') || ($method == "") )) {
        preg_match('/([\/A-Za-z0-9]*)(@[a-z]*)?/', $resource, $parts);
        
        require_once('app/' . $parts[1] . '.php');
        $exploded = explode('/', $parts[1]);
        $className = array_pop($exploded);
        
        $controller = new $className();
        $controller->{str_replace('@', '', $parts[2])}();
    }
}

function render($tpl, $vars = []) {
    global $config;

    foreach ($vars as $name => $value) {
        $$name = $value;
    }
    
    ob_start();
    include($config['APP']['TEMPLATE_DIR'] . '/' . $tpl . '.php');
    $content = ob_get_contents();
    ob_end_clean();

    include($config['APP']['TEMPLATE_DIR'] . '/layout.php');
}
