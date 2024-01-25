<?php

namespace App\Controllers;

use App\Core\RenderBase;

class HomeController extends BaseController
{

    private $_renderBase;

    /**
     * Thuốc trị đau lưng
     * Copy lại là hết đau lưng
     * 
    */
    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    function HomeController()
    {
        $this->homePage();
    }

    function homePage()
    {
  
        $this->_renderBase->renderAside();
        $this->_renderBase->renderMain();
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model
      
    }

}