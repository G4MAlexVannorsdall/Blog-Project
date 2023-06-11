<?php

namespace App\Models;

use CodeIgniter\Database\ResultInterface;
use CodeIgniter\Model;
use Config\Database;

class ArticleModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'article';

    /**
     * @return ResultInterface|false|string
     */
    public function getArticle()
    {
        $db = Database::connect();

        $builder = $db->table('article');

        return $builder->get();
    }
}