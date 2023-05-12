<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class HomeController extends BaseController
{

    public function index(): string
    {
        $db = new ArticleModel();

        $db->getArticle();

        $data['article'] = 'article';
        $data['title'] = 'This is the Title';

        return view('Views/pages/home', $data);
    }

    public function view($home = 'home'): string
    {
        $data['article'] = 'article';
        $data['title'] = 'This is the Title';

        if (!is_file(APPPATH . 'Views/pages/' . $home . '.php')) {
            throw new PageNotFoundException($home);
        }

        return view('templates/header', $data)
            . view('pages/' . $home, $data)
            . view('templates/footer');
    }
}
