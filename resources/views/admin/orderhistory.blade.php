@extends('admin.layouts.main')
@section('title' , 'Order History')
@section('container')

<div class="container mt-4">
    <div class="row">
        <h2 class="text-center fw-bold text-primary">ORDER HISTORY</h2>
            <div class="border rounded mt-3 p-2">
                <div class="row justify-content-end mb-2">
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="date" placeholder="DD/MM/YY">
                    </div>
                </div>
            <div class="table-responsive rounded">
                <table class="table table-borderless table-hover text-center">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>#</th>
                            <th>ID ORDER</th>
                            <th>ORDER DATE</th>
                            <th>COSTUMER NAME</th>
                            <th>SERVICE</th>
                            <th>Total Payment</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->order_date }}</td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->service->name }}</td>
                            <td>{{ $order->total_payments }}</td>
                            <td><span class="badge bg-success text-uppercase">{{ $order->status }}</span></td>
                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="8" class="text-muted">No orders yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection