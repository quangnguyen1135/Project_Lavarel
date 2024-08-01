<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;


class infoUserController extends Controller
{
  
    public function index()
{
    // Lấy thông tin người dùng hiện tại
    $user = Auth::user();

    // Tìm khách hàng dựa trên email của người dùng hiện tại
    $customer = Customer::where('email', $user->email)->first();

    // Kiểm tra xem có thông tin khách hàng nào tương ứng với người dùng hiện tại không
    if ($customer) {
        // Truyền thông tin khách hàng vào view để hiển thị
        return view('frontend.infoUser.index', compact('user'));
    } else {
        // Xử lý trường hợp không tìm thấy thông tin khách hàng
        return redirect()->back()->with('error', 'Không tìm thấy thông tin khách hàng.');
    }
}

}
