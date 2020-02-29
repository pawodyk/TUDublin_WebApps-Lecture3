<?php

namespace TUDublin;

class WebApplication{

    public function run(){
        $action = filter_input(INPUT_GET, 'page');
        $mc = new MainController();

        switch($action){
            case 'contact':
                $mc->contact();
                break;
            case 'home':
            default:
                $mc->home();
                break;
        }
    }
}