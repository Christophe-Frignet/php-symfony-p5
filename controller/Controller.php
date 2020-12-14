<?php

namespace Controller;

class Controller {

    public function displayHome()
    {
        $title = 'home';
        $modules = array('presentation','contact-form', 'last-posts');
        
        require_once('view/template.php');
    }
}

?>