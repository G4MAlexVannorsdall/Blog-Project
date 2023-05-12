<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'article';

    /**
     * @param bool $keyword
     * @return array|object|null
     */
    public function getArticle(bool $keyword = false)
    {
        if ($keyword === false) {
            return $this->findAll();
        }

        return $this->where(['keyword' => $keyword])->first();
    }
}