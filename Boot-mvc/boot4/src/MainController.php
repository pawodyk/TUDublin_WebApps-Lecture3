<?php

namespace TUDublin;

class MainController{

    public function home(){
        require_once __DIR__ . '/../templates/home.php';
    }

    public function contact(){
        require_once __DIR__ . '/../templates/contact.php';
    }
}