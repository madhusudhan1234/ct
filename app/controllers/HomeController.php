<?php

namespace App\Controllers;

/**
 * Class HomeController
 * @package App\Controllers
 */
class HomeController
{
    /**
     * @return string
     */
    public function index()
    {
        return view('index');
    }
}