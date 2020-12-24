<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductService;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        $category = Category::all();
        $products = Product::all();
        return view('admin.products.list',compact('products','category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.products.add',compact('category'));
    }
    public function store(ProductRequest $request)
    {
        $this->productService->add($request);
        $message = 'Thêm sản phẩm thành công';
        return redirect()->route('products.index')->with('success',$message);
    }
    public function destroy($id)
    {
        $product = $this->productService->findById($id);
        $product->delete();
        $message = 'Xóa sản phẩm thành công';
        return redirect()->route('products.index')->with('success',$message);
    }
    public function edit($id)
    {
        $category = Category::all();
        $product = $this->productService->findById($id);
        return view('admin.products.edit',compact('product','category'));
    }
    public function update(Request $request,$id)
    {
        $category = Category::all();
        $product = $this->productService->findById($id);
        $this->productService->update($request,$product);
        $message = 'Sửa thành công';
        return redirect()->route('products.index',compact('category'))->with('info',$message);
    }
    public function product()
    {
        $category = Category::all();
        $products = Product::all();
        return view('web.products.products',compact('products','category'));
    }
    public function detail($id)
    {
        $product = $this->productService->findById($id);
        $categories = Product::where('category_id',$product->category_id)->get();
        return view('web.products.productsDetail',compact('product','categories'));
    }
    public function showBookByCategory($category_id) {
        $products = Product::where('category_id', $category_id)->get();
        return view('web.products.productByCategory', compact('products'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('product_name','like',"%".$search."%")->get();
        return view('web.products.products',compact('products'));
    }
}
