<?php

    namespace App\Http\Controllers\frontend;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\LoginRequest;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        //

        public function index()
        {
            return view('frontend.login.loginPage');
        }


        public function authenticate(LoginRequest $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/')->with("success","Đăng nhập thành công");
            }

            return redirect()->route('login')->withInput($request->only('email'))->withErrors(['error' => 'Đăng nhập thất bại. Email hoặc mật khẩu không chính xác.']);
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }

        public function infoUser()
        {
            // Lấy thông tin người dùng hiện tại
            $user = Auth::user();
    
            // Hoặc nếu bạn lưu thông tin người dùng trong một bảng khác như 'customers', bạn có thể sử dụng:
            // $customer = Customer::find(Auth::id());
    
            // Truyền thông tin người dùng vào view để hiển thị
            return view('frontend.user.info', compact('user'));
        }
    }
