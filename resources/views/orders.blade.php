@extends('layout', [
    'title' => 'Orders',
])

@section('body')
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Submitted</th>
                <th>Bartender</th>
                <th>Device ID</th>
                <th>Beverage</th>
                <th>Location</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>713</td>
                <td>03/26/2021 1:42pm</td>
                <td>John Smith</td>
                <td>Device 1</td>
                <td>Coors Light</td>
                <td>Table 4</td>
                <td>$3.00</td>
                <td><a href="{{ route('orders.cancel', ['id' => 1]) }}">Cancel</a> | <a href="{{ route('orders.fill', ['id' => 1]) }}">Fill</a></td>
            </tr>
            <tr>
                <td>713</td>
                <td>03/26/2021 1:42pm</td>
                <td>John Smith</td>
                <td>Device 1</td>
                <td>Coors Light</td>
                <td>Table 4</td>
                <td>$3.00</td>
                <td><a href="{{ route('orders.cancel', ['id' => 1]) }}">Cancel</a> | <a href="{{ route('orders.fill', ['id' => 1]) }}">Fill</a></td>
            </tr>
            <tr>
                <td>713</td>
                <td>03/26/2021 1:42pm</td>
                <td>John Smith</td>
                <td>Device 1</td>
                <td>Coors Light</td>
                <td>Table 4</td>
                <td>$3.00</td>
                <td><a href="{{ route('orders.cancel', ['id' => 1]) }}">Cancel</a> | <a href="{{ route('orders.fill', ['id' => 1]) }}">Fill</a></td>
            </tr>
            <tr>
                <td>713</td>
                <td>03/26/2021 1:42pm</td>
                <td>John Smith</td>
                <td>Device 1</td>
                <td>Coors Light</td>
                <td>Table 4</td>
                <td>$3.00</td>
                <td><a href="{{ route('orders.cancel', ['id' => 1]) }}">Cancel</a> | <a href="{{ route('orders.fill', ['id' => 1]) }}">Fill</a></td>
            </tr>
        </tbody>
    </table>
@endsection
