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

    public function detail($id)
    {
        $comics = $this->comicsModel->where(['id' => $id])->first();
        $data = [
            'title' => 'Comic Detail',
            'comics' => $comics
        ];
        if (empty($data['comics'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic with ID ' . $id . ' not found.');
        }
        return view('comics/details', $data);
    }
}
