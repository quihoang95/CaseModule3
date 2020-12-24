<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
//    protected $studentService;
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function showDashboard()
    {
        $users = $this->userService->getAll();
        return view('admin.layout.dashboard',compact('users'));
    }
}
