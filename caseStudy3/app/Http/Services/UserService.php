<?php


namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserService implements ServiceInterface
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->userRepository->getAll();
    }
    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->userRepository->findById($id);
    }
    function add($request, $obj = null)
    {
        $obj = new User();

        $obj->fullName     = $request->fullName;
        $obj->user_name     = $request->user_name;
        $obj->password     = Hash::make($request->password);
        $obj->phoneNumber  = $request->phoneNumber;
        $obj->address      = $request ->address;
        $obj->role_id      = $request->role_id;
        $obj->status    = StatusConstant::ACTIVATE;
        $this->uploadImage($obj,$request);
        $this->userRepository->save($obj);
        return redirect()->route('users.index');

    }
    function delete($obj)
    {
        // TODO: Implement delete() method.
    }
    function update($request, $obj = null)
    {
        $obj->fillable($request->all());
        if($request->status=='true'){
            $obj->status = StatusConstant::ACTIVATE;
        }else{
            $obj->status = StatusConstant::DEACTIVATE;
        }
        $this->userRepository->save($obj);
    }
    function uploadImage($obj,$request)
    {
        if($request->hasFile('image')){
            $img = $request->image;
            $path = $img->store('public/images');
            $obj->image = $path;
        }


    }

}
