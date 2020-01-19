<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use AlAminFirdows\LaravelMultiAuth\Traits\LogsoutGuard;

class LoginController extends Controller
{

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    public $redirectTo = '/admin/dashboard';


    public function __construct()
    {
        $this->middleware('admin.guest', ['except' => 'logout']);
    }


    public function showLoginForm()
    {
        return view('admin.auth.login');
    }


    protected function guard()
    {
        return Auth::guard('admin');
    }
}