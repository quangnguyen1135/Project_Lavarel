<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    // Phương thức để hiển thị trang thanh toán
    public function index()
    {
        // Lấy thông tin chi tiết đơn hàng từ cơ sở dữ liệu
        $orderDetails = Order_detail::all();

        // Truy vấn thông tin sản phẩm từ bảng Product
        foreach ($orderDetails as $orderDetail) {
            // Lấy thông tin sản phẩm từ cơ sở dữ liệu dựa trên product_id
            $product = Product::find($orderDetail->product_id);

            // Kiểm tra xem sản phẩm có tồn tại không
            if ($product) {
                // Gán tên sản phẩm vào orderDetail
                $orderDetail->name = $product->name;
            } else {
                // Trường hợp sản phẩm không tồn tại
                $orderDetail->name = 'Sản phẩm không tồn tại';
            }
        }

        // Truyền thông tin sản phẩm đã cập nhật vào view
        return view('frontend.payment.index', compact('orderDetails'));
    }


    public function Payment(Request $request)
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (Auth::check()) {
            // Lấy thông tin của người dùng sau khi đăng nhập
            $user = Auth::user();
            $customerId = $user->id; // Lấy ID của khách hàng
    
            // Lấy giỏ hàng từ session
            $cart = session()->get('cart');
    
            // Kiểm tra xem giỏ hàng có trống không
            if (!empty($cart)) {
                // Tạo một đơn hàng mới
                $order = new Order();
                $order->order_date = now(); // hoặc sử dụng định dạng ngày thích hợp
                $order->customer_id = $customerId; // Gán ID của khách hàng cho đơn hàng
                // Lưu đơn hàng
                $order->save();
    
                // Lưu chi tiết đơn hàng
                foreach ($cart as $productId => $product) {
                    $orderDetail = new Order_detail();
                    $orderDetail->product_id = $productId;
                    $orderDetail->order_id = $order->id; // Gán ID của đơn hàng
                    $orderDetail->quantity = $product['quantity'];
                    $orderDetail->price = $product['price'];
                    $orderDetail->save();
                }
    
                // Lưu thông tin đơn hàng vào session
                session()->put('orderDetails', $order);
    
                // Xóa giỏ hàng sau khi thanh toán thành công
                session()->forget('cart');
    
                // Chuyển hướng hoặc trả về thông báo thanh toán thành công
                return redirect()->route('payment.process')->with('message', 'Thanh toán thành công!');
              
            } else {
                // Xử lý trường hợp giỏ hàng trống
                return redirect()->route('shopping.cart')->with('error', 'Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm trước khi thanh toán.');
            }
        } else {
            // Xử lý trường hợp người dùng chưa đăng nhập
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để tiếp tục thanh toán.');
        }
    }
    

}