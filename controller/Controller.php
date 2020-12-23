<?php

namespace Controller;

class Controller {

    public function displayHome()
    {
        $title = 'Home';
        $modules = array('presentation','contact-form', 'last-posts');
        $responsive = 'home';
        
        require_once('../view/template.php');
    }

    public function displayBlog()
    {
        $title = 'Blog';
        $modules = array('blog-posts', 'presentation');
        $responsive = 'blog';
        
        require_once('../view/template.php');
    }

    public function displayPost()
    {
        $title = 'Post';
        $modules = array('post', 'last-posts');
        $responsive = 'post';
        
        require_once('../view/template.php');
    }

    public function registerUser()
    {
        $title = 'Registration';
        $modules = array('registration', 'last-posts');
        $responsive = 'registration';
        
        require_once('../view/template.php');
    }

    public function connectUser()
    {
        $title = 'Connection';
        $modules = array('connection', 'last-posts');
        $responsive = 'connection';
        
        require_once('../view/template.php');
    }

    public function displayAdminHome()
    {
        $title = 'Admin home';
        $modules = array('admin-home', 'last-pending-comments');
        $responsive = 'admin';
        
        require_once('../view/template.php');
    }

    public function updatePost()
    {
        $title = 'Update post';
        $modules = array('update-post', 'last-comments');
        $responsive = 'update-post';
        
        require_once('../view/template.php');
    }

    public function createPost()
    {
        $title = 'New post';
        $modules = array('create-post', 'last-posts');
        $responsive = 'new-post';
        
        require_once('../view/template.php');
    }

    public function checkComments()
    {
        $title = 'Comments checking';
        $modules = array('pending-comments', 'last-posts');
        $responsive = 'pending-comments';
        
        require_once('../view/template.php');
    }

}

?>