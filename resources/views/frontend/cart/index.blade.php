@extends('frontend.layout.master')
@section('content')
<h2>Giỏ hàng</h2>
<div id="cart">
    <table>
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $id => $product)
            <tr id="product_{{ $id }}">
                <td><img class="w-25" src="{{asset('/')}}frontend/img_product/{{$product['image']}}" alt=""></td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td><input type="number" min="1" value="{{ $product['quantity'] }}" data-id="{{ $id }}" onchange="updateCartItem(this)"></td>
                <td class="subtotal">{{ $product['price'] * $product['quantity'] }}</td>
                <td><button onclick="deleteCartItem({{ $id }})">Xóa</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div id="cart-summary">
    <button class="update-btn"><a href="/gio-hang">Cập nhật giỏ hàng</a></button>
    <span id="total" class="float-right" style="font-weight: bold; color: red;"></span>
</div>
<div id="cart-summary">
    <a href="{{ route('payment') }}" class="update-btn">Thanh toán</a>
    <span id="total" class="float-right" style="font-weight: bold; color: red;"></span>
</div>

<script>
    function redirectToPayment() {
        window.location.href = "{{ route('payment') }}";
    }
</script>



<style>
    /* CSS cho nút cập nhật giỏ hàng */
    .update-btn {
        background-color: #4CAF50;
        /* Màu xanh */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }

    /* CSS cho tổng tiền */
    #total {
        font-size: 18px;
    }
</style>

<script>
    function updateCartItem(input) {
        var productId = input.getAttribute('data-id');
        var quantity = input.value;
        fetch("{{ route('update.cart') }}", {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: productId,
                    quantity: quantity
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                } else {
                    updateTotal(); // Cập nhật tổng tiền sau khi cập nhật sản phẩm
                }
            });
    }

    function deleteCartItem(id) {
        fetch("{{ route('delete.cart') }}", {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    id: id
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('product_' + id).remove();
                    updateTotal(); // Cập nhật tổng tiền sau khi xóa sản phẩm
                } else if (data.error) {
                    alert(data.error);
                }
            });
    }



    function updateTotal() {
        var subtotalElements = document.getElementsByClassName('subtotal');
        var total = 0;
        for (var i = 0; i < subtotalElements.length; i++) {
            total += parseFloat(subtotalElements[i].textContent);
        }
        document.getElementById('total').textContent = "Tổng tiền: " + total;
    }

    // Gọi hàm tính tổng tiền khi trang được tải
    window.onload = updateTotal;
</script>
@endsection