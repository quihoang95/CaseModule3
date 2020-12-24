<?php
namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;
use App\Models\Category;

class CategoryService implements ServiceInterface{

    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    function findById($id)
    {
        return $this->categoryRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        $obj = new Category();
        $obj ->id = $request ->id;
        $obj ->name = $request->name;
        $obj ->description = $request->description;
        $this->categoryRepository->save($obj);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
       $obj->fill($request->all());
       $this->categoryRepository->save($obj);
    }
}

