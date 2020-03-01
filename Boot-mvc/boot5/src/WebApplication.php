<?php

namespace TUDublin;

class WebApplication{

    private $mc;

    public function __construct()
    {
        $this->mc = new MainController();
    }

    public function run(){
        $action = filter_input(INPUT_GET, 'page');

        switch($action){
            case 'contact':
                $this->mc->renderContact();
                break;
            case 'form':
                $this->mc->renderForm();
                break;
            case 'home':
            default:
                $this->mc->renderHome();
                break;
        }
    }
}