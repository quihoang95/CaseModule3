<?php

namespace App\Http\Repositories;
use App\Models\Category;

class CategoryRepository implements RepositoryInterface {
    protected $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    function getAll()
    {
       return $this->categoryModel->get();
    }

    function findById($id)
    {
        return $this->categoryModel->findOrFail($id);
    }

    function save($obj)
    {
       $obj->save();
    }

    function delete($obj)
    {
        $obj->delete();
    }
}
