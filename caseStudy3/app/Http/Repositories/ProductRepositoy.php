<?php

namespace App\Http\Repositories;

use App\Models\Product;

class ProductRepositoy implements RepositoryInterface
{

    protected $productModel;

    public function __construct(Product $productModel)
    {

        $this->productModel = $productModel;
    }

    function getAll()
    {
        return $this->productModel->get();
    }

    function findById($id)
    {
        return $this->productModel->findOrFail($id);
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
