<?php

namespace App\Http\Controllers;

use App\Http\Services\SlideService;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    protected $slideService;
    public function __construct(SlideService $slideService)
    {
        $this->slideService = $slideService;
    }
    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.list',compact('slides'));
    }
    public function create()
    {
        return view('admin.slides.add');
    }
    public function store(Request $request)
    {
        $this->slideService->add($request);
        $message = 'Thêm thành công';
        return redirect()->route('slides.index')->with('success',$message);
    }
    public function edit($id)
    {
        $slide = $this->slideService->findById($id);
        return view('admin.slides.edit',compact('slide'));
    }
    public function update(Request $request,$id)
    {
        $slide = $this->slideService->findById($id);
        $this->slideService->update($request,$slide);
        $message = 'Sửa thành công';
        return redirect()->route('slides.index')->with('info',$message);
    }
    public function destroy($id)
    {
        $slide = $this->slideService->findById($id);
        $slide->delete();
        $message = 'Xóa thành công';
        return redirect()->route('slides.index')->with('success',$message);
    }


}
