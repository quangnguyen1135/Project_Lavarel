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

        return view('backend.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard.index')->with("success", "Đăng nhập thành công");
        }
            return redirect()->route('auth.admin')->with("error","Đăng nhập thất bại");
    }

}
