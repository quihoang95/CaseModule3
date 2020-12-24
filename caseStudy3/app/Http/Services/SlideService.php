<?php
namespace App\Http\Services;

use App\Http\Repositories\SlideRepository;
use App\Models\Slide;

class SlideService implements ServiceInterface {
    protected $slideRepository;

    public function __construct(SlideRepository $slideRepository)
    {
        return $this->slideRepository = $slideRepository;
    }

    function getAll()
    {
       return $this->slideRepository->getAll();
    }

    function findById($id)
    {
        return $this->slideRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        $obj = new Slide();
        $obj->id = $request->id;
        $this->uploadFile($obj,$request);
        $this->slideRepository->save($obj);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        $obj->fill($request->all());
        $this->uploadFile($obj,$request);
        $this->slideRepository->save($obj);
    }
    function uploadFile($obj,$request)
    {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('public/slides');
            $obj->image = $path;
        }
    }
}
