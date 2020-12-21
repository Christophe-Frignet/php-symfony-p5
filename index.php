<?php

require_once('vendor/autoload.php'); 

use Controller\Controller;

$controller = new Controller();

try {
    if(isset($_GET['action'])){

        if($_GET['action'] == 'displayHome'){
            $controller->displayHome();
        }

        elseif($_GET['action'] == 'displayBlog'){
            $controller->displayBlog();
        }

        elseif($_GET['action'] == 'displayPost'){
            $controller->displayPost();
        }

        elseif($_GET['action'] == 'registerUser'){
            $controller->registerUser();
        }

        elseif($_GET['action'] == 'connectUser'){
            $controller->connectUser();
        }

        elseif($_GET['action'] == 'displayAdminHome'){
            $controller->displayAdminHome();
        }

        elseif($_GET['action'] == 'updatePost'){
            $controller->updatePost();
        }

        elseif($_GET['action'] == 'createPost'){
            $controller->createPost();
        }

        elseif($_GET['action'] == 'checkComments'){
            $controller->checkComments();
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



