<?php
namespace TUDublin;

class MainController{

    private function home(){
        require_once __DIR__ . '/../templates/home.php';
    }

    private function contact(){
        require_once __DIR__ . '/../templates/contact.php';
    }
}