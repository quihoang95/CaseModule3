<?php
namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Models\Product;

class ProductService implements ServiceInterface
{

    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    function getAll()
    {
        return $this->productRepository->getAll();
    }

    function findById($id)
    {
        return $this->productRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        $obj = new Product();
        $obj->id = $request->id;
        $obj->product_name = $request->product_name;
        $obj->description = $request->description;
        $obj->stock = $request->stock;
        $obj->priceEach = $request->priceEach;
        $obj->category_id = $request ->category_id;
        $this->uploadFile($obj,$request);
        $this->productRepository->save($obj);

    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->uploadFile($obj,$request);
        $this->productRepository->save($obj);
    }
    function uploadFile($obj,$request)
    {
        if($request->hasFile('image')) {
            $img = $request->image;
            $path = $img->store('public/products');
            $obj->image = $path;
        }
        if($request->hasFile('image1')) {
            $img = $request->image1;
            $path = $img->store('public/products');
            $obj->image1 = $path;
        }
        if($request->hasFile('image2')) {
            $img = $request->image2;
            $path = $img->store('public/products');
            $obj->image2 = $path;
        }
    }

}
