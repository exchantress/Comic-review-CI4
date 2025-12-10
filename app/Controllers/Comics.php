<?php

namespace App\Controllers;

use App\Models\ComicsModel;
use App\Models\ReviewsModel;


class Comics extends BaseController
{
    protected $comicsModel;
    protected $reviewModel;
    public function __construct()
    {
        $this->comicsModel = new ComicsModel();
        $this->reviewModel = new ReviewsModel();
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
        $reviews = $this->reviewModel->where(['comic_id' => $id])->findAll();
        $data = [
            'title' => 'Comic Detail',
            'comics' => $comics,
            'reviews' => $reviews
        ];
        if (empty($data['comics'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Comic with ID ' . $id . ' not found.');
        }
        return view('comics/details', $data);
    }

    // public function edit($id)
    // {
    //     $review = $this->reviewModel->find($id);
    //     session()->setFlashdata('editing', $review);
    //     return redirect()->to('comiclist/' . $review['comic_id']);
    // }
}
