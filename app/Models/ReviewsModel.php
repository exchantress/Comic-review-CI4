<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewsModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'comic_id', 'rating', 'review_text', 'created_at', 'updated_at'];
    public $useTimestamps = true; // otomatis isi created_at & updated_at
}
