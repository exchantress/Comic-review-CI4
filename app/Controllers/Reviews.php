<?php

namespace App\Controllers;

use App\Models\ReviewsModel;
use App\Models\ComicsModel;

class Reviews extends BaseController
{
    protected $reviewModel;
    protected $comicsModel;
    public function __construct()
    {
        $this->reviewModel = new ReviewsModel();
        $this->comicsModel = new ComicsModel();
    }

    public function review($id)
    {
        $comic_id = $this->request->getPost('comic_id');
        $rating = $this->request->getPost('rating');
        $review_text = $this->request->getPost('review_text');

        $this->reviewModel->insert(
            [
                'comic_id' => $comic_id,
                'rating' => $rating,
                'review_text' => $review_text
            ]
        );

        session()->setFlashdata('pesan', 'Terimakasih sudah meng ripiu');

        return redirect()->to('comiclist/' . $id);
    }

    public function delete($id)
    {
        $review = $this->reviewModel->find($id);

        $this->reviewModel->delete($id);
        $comicId = $review['comic_id']; //ID 
        session()->setFlashdata('pesan', 'Review berhasil dihapus.');
        return redirect()->to('comiclist/' . $comicId);
    }

    public function edit($id)
    {
        $review = $this->reviewModel->find($id);
        $comics = $this->comicsModel->find($review['comic_id']);

        $data = [
            'title'  => 'Edit Review',
            'review' => $review,
            'comics' => $comics
        ];

        return view('comics/edit', $data);
    }

    public function update($id)
    {
        $review = $this->reviewModel->find($id);

        $rating = $this->request->getPost('rating');
        $review_text = $this->request->getPost('review_text');

        $data = [
            'review_text' => $review_text,
            'rating' => $rating
        ];

        $this->reviewModel->update($id, $data);
        $comicId = $review['comic_id'];
        session()->setFlashdata('pesan', 'Review berhasil diupdate.');

        return redirect()->to('comiclist/' . $comicId);
    }
}
