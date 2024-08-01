@extends('frontend.layout.master')
@section('content')
<h1>Thông tin về đặt bàn</h1>

<table>
    <thead>
        <tr>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Số người</th>
            <th>Thời gian</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->seats }}</td>
                <td>{{ $reservation->reservation_time }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
