<?php

require_once('vendor/autoload.php');

use Controller\Controller;

$controller = new Controller();

try {
    if(isset($_GET['action'])){

        if($_GET['action'] == 'displayHome'){
            $controller->displayHome();
        }
        else {
            throw new Exception('The path doesn\'t exist');
        }
        }

    else {
        $controller->displayHome();
    }
}

catch (Exception $e) {
    echo 'Error : ' . $e->getMessage();
}



