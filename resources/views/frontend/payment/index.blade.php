
@extends('frontend.layout.master')
@section('content')
    <h2>Thanh toán</h2>
    <div id="order-details">
        <h3>Thông tin đơn hàng</h3>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0; // Khởi tạo biến total
                @endphp
                @foreach($orderDetails as $orderDetail)
                    @php
                        $subtotal = $orderDetail->quantity * $orderDetail->price; // Tính tổng cho mỗi sản phẩm
                        $total += $subtotal; // Cập nhật tổng của đơn hàng
                    @endphp
                    <tr>
                        <td>{{ $orderDetail->name }}</td>
                        <td>{{ $orderDetail->quantity }}</td>
                        <td>{{ $orderDetail->price }}</td>
                        <td>{{ $subtotal }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Tổng tiền:</td>
                    <td>{{ $total }}</td> <!-- Hiển thị tổng của đơn hàng -->
                </tr>
            </tfoot>
        </table>
    </div>
    <div id="payment-form">
        <h3>Thông tin thanh toán</h3>
        <form action="{{ route('payment.process') }}" method="post">
            @csrf
            <!-- Add payment form fields here -->

            <button class="btn btn-primary" type="submit">Thanh toán</button>

        </form>
    </div>
@endsection
