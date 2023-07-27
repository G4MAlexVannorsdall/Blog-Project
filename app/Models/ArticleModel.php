<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;
use function PHPUnit\Framework\throwException;

class ArticleModel extends Model
{
    /**
     * Table's name
     * @var string
     */
    protected $table = 'article';

    /**
     * These are allowed fields within the table that data can be added to.
     * Important for the create method in
     * the article controller.
     * @var string[]
     */
    protected $allowedFields = ['title', 'keyword', 'text'];

    /**
     * @param bool $keyword
     * @return array|object|null
     */
    public function getArticle(bool $keyword = false)
    {
        if ($keyword === false) {
            return $this->findAll();
        }

        return $this->where(['Keyword' => $keyword])->first();
    }

    /**
     * @param int $id
     * @return true
     * @throws Exception
     */
    public function delete($id = null, bool $purge = false): bool
    {
        $builder = $this->db->table("article");
        $builder->get();
        $builder->where("Id", $id);

        if ($id === null) {
            throw new Exception('Id cannot be null.');
        }
        $builder->delete();
         return true;
    }
}