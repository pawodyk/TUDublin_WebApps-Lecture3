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

    public function handleFormData(){

        $emailValidationPattern = '/\S+@\S+\.\S+/';

        $isValid = true;
        $inputErrorList = [];

        $cName = filter_input(INPUT_GET, 'customerName');
        $cEmail = filter_input(INPUT_GET, 'customerEmail');
        $enquiry = filter_input(INPUT_GET, 'enquiry');

        if(empty($cName)){
           $isValid = false;
           $inputErrorList[] = "Your name cannot be empty";
        }
        if(empty($cEmail)){
            $isValid= false;
            $inputErrorList[] = "Your email cannot be empty";
        } elseif(!preg_match($emailValidationPattern, $cEmail)){
            // is checked at front end but put for fun
            $isValid= false;
            $inputErrorList[] = "Your email format is incorrect";
        }

        if($isValid){
            $data = ['cName'=>$cName, 'cEmail'=>$cEmail, 'enquiry'=>$enquiry];
            $page = $this->twig->render('confirmData.html.twig', $data);
            print $page;
        } else {
            // temporary solution
            print 'incorrect data';
            var_dump($inputErrorList);
        }



    }
}