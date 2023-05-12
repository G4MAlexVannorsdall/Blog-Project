<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    /**
     * @return void
     */
    public function index()
    {
        $model = model(UserModel::class);

        $data['user'] = $model->getUser();
    }

    /**
     * @param $user
     * @return void
     */
    public function view($user = null)
    {
        $model = model(UserModel::class);

        $data['user'] = $model->getUser($user);
    }
}