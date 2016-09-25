<?php


namespace CodePress\CodeDatabase\Repository;


use CodePress\CodeDatabase\AbstractRepository;
use CodePress\CodeDatabase\Model\Category;

class CategoryRepository extends AbstractRepository
{
    public function model()
    {
        return Category::class;
    }
}