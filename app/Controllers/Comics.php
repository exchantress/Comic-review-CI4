<?php

namespace App\Controllers;

use App\Models\ComicsModel;

class Comics extends BaseController
{
    protected $comicsModel;
    public function __construct()
    {
        $this->comicsModel = new ComicsModel();
    }
    public function index(): string
    {
        $comicsModel = $this->comicsModel->findAll();
        $data = [
            'title' => 'Comic Lists',
            'comics' => $comicsModel
        ];

        return view('comics/index', $data);
    }
}
