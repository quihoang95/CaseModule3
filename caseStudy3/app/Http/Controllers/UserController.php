<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Http\Services\UserService;
use App\Models\Role;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {

        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {

        $users = User::all();
        $roles = Role::all();
        return view('admin.users.add', compact('roles', 'users'));
    }

    public function store(CreateUser $request)
    {
        $this->userService->add($request);
        $message = 'Thêm người mới thành công!';
        return redirect()->route('users.index')->with('success', $message);
    }

    public function edit($id)
    {
        $roles = Role::all();

        $user = $this->userService->findById($id);
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {

        $roles = Role::all();
        $user = $this->userService->findById($id);
        $user->fill($request->all());
        $this->userService->uploadImage($user, $request);
        $user->save();
        $message = 'Sửa thành công';
        return redirect()->route('users.index', compact('roles'))->with('success', $message);
    }

    public function destroy($id)
    {
//        if(!$this->userCan('admin')){
//            abort(403);
//        }
        $user = $this->userService->findById($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function changeStatus(Request $request, $id)
    {
//        if(!$this->userCan('admin-caa')){
//            abort(403);
//        }
        $user = $this->userService->findById($id);
        $this->userService->update($request, $user);
    }


}
