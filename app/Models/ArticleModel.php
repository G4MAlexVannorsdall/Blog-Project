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
     * @param bool $title
     * @return array
     */
    public function getArticle(bool $title = false): array
    {
        if ($title === false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }
}