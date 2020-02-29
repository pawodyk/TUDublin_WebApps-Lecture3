<?php

namespace TUDublin;

class WebApplication {

    public function run(){
        $action = filter_input(INPUT_GET, 'page');

        switch($action){
            case 'contact':
                $this->contact();
                break;
            case 'home':
            default:
                $this->home();
                break;
        }
    }

    private function home(){
        require_once __DIR__ . '/../templates/home.php';
    }

    private function contact(){
        require_once __DIR__ . '/../templates/contactDetails.php';
    }

}