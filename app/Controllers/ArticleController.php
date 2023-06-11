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
        $model = model(ArticleModel::class);

        $data = [
            'article'  => $model->getArticle(),
            'title' => 'Blog Post',
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
            throw new PageNotFoundException('Cannot find the blog post item: ' . $keyword);
        }

        $data['title'] = $data['article']['title'];

        return view('templates/header', $data)
            . view('Views/pages/article/view')
            . view('templates/footer');

    }
}