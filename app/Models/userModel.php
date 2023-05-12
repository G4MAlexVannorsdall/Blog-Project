<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    /**
     * @var string
     */
    protected $table = 'user';

    /**
     * @param bool $user
     * @return array|object|null
     */
    public function getUser(bool $user = false)
    {
        if ($user === false) {
            return $this->findAll();
        }

        return $this->where(['user' => $user])->first();
    }
}