<?php


$controllers = array(
    'product' => ['index', 'register', 'save', 'show', 'updateshow', 'update', 'delete', 'search', 'error']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('product', 'error');
    }
} else {
    call('product', 'error');
}

function call($controller, $action)
{
    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'product':
            require_once('Model/Product.php');
            $controller = new ProductController();
            break;
        default:
            # code...
            break;
    }
    $controller->{$action}();
}

?>
