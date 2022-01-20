<?php
namespace Template\App\Controllers;

use Template\App\Libraries\Controller;


class Homepage extends Controller{


    public function __construct(){
        
    }

    public function index(){
        $data = [
            'page' => 'Name of the page',
            'title' => 'This is the home page title',
            'meta_keywords' => 'Meta key words of the page',
            'meta_description' => 'Meta description of the page',
          ];

        $this->view('homepage/index', $data);
    }

}