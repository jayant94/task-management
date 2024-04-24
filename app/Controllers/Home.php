<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        header('Location: login');
        exit();
        return view('welcome_message');
    }
}
