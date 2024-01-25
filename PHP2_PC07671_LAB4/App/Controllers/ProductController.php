<?php

namespace App\Controllers;

use App\Core\RenderBase;

class ProductController extends BaseController
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

    function ProductController()
    {
        $this->mainProduct();
    }

    function mainProduct()
    {
        $this->_renderBase->renderAside();
        $this->_renderBase->renderMainAdd();
    }

    function detail($id)
    {        // dữ liệu ở đây lấy từ responsitories hoặc model
      
    }

}