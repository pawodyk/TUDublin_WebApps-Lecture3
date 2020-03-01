<?php

namespace TUDublin;

class MainController{

    const PATH_TO_TEMPLATES = __DIR__ . '/../templates';
    private $twig;

    public function __construct(){
        $this->twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
    }

    public function renderHome(){
        $page = $this->twig->render('home.html.twig');
        print $page;
    }

    public function renderContact(){
        $page = $this->twig->render('contact.html.twig');
        print $page;
    }

    public function renderForm(){
        $page = $this->twig->render('enquiryForm.html.twig');
        print $page;
    }
}