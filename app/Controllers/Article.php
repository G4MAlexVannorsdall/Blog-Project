<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Article extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        $model = model(ArticleModel::class);

        $data = [
            'article'  => $model->getArticle(),
            'Title' => 'Posts',
        ];

        return view('templates/header', $data)
            . view('article/index')
            . view('templates/footer');
    }

    /**
     * @param $keyword
     * @return string
     */
    public function view($keyword = null): string
    {
        $model = model(ArticleModel::class);

        $data['article'] = $model->getArticle($keyword);

        if (empty($data['article'])) {
            throw new PageNotFoundException('Cannot find the blog post item: ' . $keyword);
        }

        $data['Title'] = $data['article']['Title'];

        return view('templates/header', $data)
            . view('article/view')
            . view('templates/footer');

    }
}