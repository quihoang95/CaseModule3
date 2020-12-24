<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.list',compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.add');
    }
    public function store(Request $request)
    {
        $this->categoryService->add($request);
        $message = 'Tạo thành công!';
        return redirect()->route('categories.index')->with('success',$message);
    }
    public function edit($id)
    {
        $categories = $this->categoryService->findById($id);
        return view('admin.categories.edit',compact('categories'));
    }
    public function update(Request $request,$id)
    {
        $categories = $this->categoryService->findById($id);
        $this->categoryService->update($request,$categories);
        $message = 'Sửa thành công';
        return redirect()->route('categories.index')->with('info',$message);
    }
    public function destroy($id)
    {
        $category = $this->categoryService->findById($id);
        $category->delete();
        $message = 'Xóa thành công';
        return redirect()->route('categories.index')->with('success',$message);
    }
}
