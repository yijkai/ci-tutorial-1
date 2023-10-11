<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class about extends BaseController
{
    public function index()
    {
        return "ini dari file About, dengan method index";
    }

    public function kontak($param1 = null,$param2 = null)
    {
        if(isset($param1) && isset($param2)) {
            return "ini dari file About, dengan method kontak dan ada parameters, dan data parameternya yaitu: ".$param1." dan ".$param2;
        }
        return "ini dari file About, dengan method kontak";
    }   
}