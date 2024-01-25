<?php

namespace App\Core;

use App\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function renderAside(){
        $this->load->render('layouts/client/aside');
    }
    public function renderMain(){
        $this->load->render('layouts/client/main');
    }
    public function renderMainAdd(){
        $this->load->render('layouts/client/mainAdd');
    }
    
    


}