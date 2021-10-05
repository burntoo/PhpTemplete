<?php
namespace Template\App\Controllers;

use Template\App\Libraries\Controller;


class Homepage extends Controller{


    public function __construct(){
        
    }

    public function index(){
        $data = [
            'title' => 'Template',
            'page' => 'homepage'
          ];

        $this->view('homepage/index', $data);
    }

}