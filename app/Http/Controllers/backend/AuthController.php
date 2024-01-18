<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function index()
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }

        return view('backend.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $str_email = $request->input('email');
        $str_password = $request->input('password');
        // call model user
        $objUser = new User();
        $user = $objUser ->getUser($str_email ,$str_password);
        if(!empty($user)){
            return redirect()->route('dashboard.index')->with("success","Đăng nhập thành công");
        }
            return redirect()->route('auth.admin')->with("error","Đăng nhập thất bại");

    }

}
