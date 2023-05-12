<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ArticleController extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        $model = new ArticleModel::class;

        $data['article'] = $model->getArticle();

        $data = [
            'article' => $model->getArticle(),
            'title' => 'Blog post',
        ];

        return view('articles/index', $data);
    }

    /**
     * @param $keyword
     * @return string
     */
    public function view($keyword = null): string
    {
        $model = new ArticleModel::class;

        $data['article'] = $model->getArticle($keyword);

        if (empty($data['article'])) {
            throw new PageNotFoundException('Cannot find the blog post: ' . $keyword);
        }

        $data['article'] = 'article';
        $data['title'] = 'title';

        return view('articles/index', $data);
    }
}