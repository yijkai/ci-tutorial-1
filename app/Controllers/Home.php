<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function kontak($data1,$data2): string
    {
        return "ini adalah parameter 1 : ". $data1. " dan ini adalah parameter 2 " .$data2;
    }   
}