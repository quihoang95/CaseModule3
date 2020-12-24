<?php
namespace App\Http\Repositories;

use App\Models\Slide;

class SlideRepository implements RepositoryInterface {
    protected $slideModel;

    public function __construct(Slide $slideModel)
    {
        $this->slideModel = $slideModel;
    }

    function getAll()
    {
        return $this->slideModel->get();
    }

    function findById($id)
    {
       return $this->slideModel->findOrFail($id);
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
