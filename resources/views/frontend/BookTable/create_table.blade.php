@extends('frontend.layout.master')
@section('content')
<h1>Đặt Bàn</h1>

<form action="{{ route('reservations.store') }}" method="POST">
    @csrf

    <label for="name">Tên người đặt:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="phone">Số điện thoại:</label>
    <input type="number" name="phone" id="phone" required>
    <label for="seats">Số người:</label>
    <input type="number" name="seats" id="seats" min="1" required>

    <label for="reservation_time">Thời gian:</label>
    <input type="datetime" name="reservation_time" id="reservation_time" required>

    <button type="submit">Đặt Bàn</button>
</form>
@endsection
