<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'article';

    public function getArticle($keyword = false)
    {
        if ($keyword === false) {
            return $this->findAll();
        }

        return $this->where(['Keyword' => $keyword])->first();
    }
}