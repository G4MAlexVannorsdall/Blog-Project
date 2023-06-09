<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Database;

class ArticleController extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        $model = model(ArticleModel::class);

        $data['article'] = $model->getArticle();

        $data = [
            'article' => $model->getArticle(),
            'title' => 'Blog post',
        ];

        return view('templates/header', $data)
            . view('Views/pages/article/index')
            . view('templates/footer');
    }

    /**
     * @param $keyword
     * @return string
     */
    public function view($keyword): string
    {
        $model = model(ArticleModel::class);

        $data['article'] = $model->getArticle($keyword);

        if (empty($data['article'])) {
            throw new PageNotFoundException('Cannot find the blog post with this keyword: ' . $keyword);
        }

        $data['article'] = 'article';
        $data['title'] = 'title';

        return view('Views/pages/article/index', $data);
    }
}