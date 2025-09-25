<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home Page'
        ];
        return view('pages/home', $data);
    }

    public function login(): string
    {
        $data = [
            'title' => 'User Login'
        ];
        return view('pages/formlogin', $data);
    }
}
