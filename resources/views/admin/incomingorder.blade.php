@extends('admin.layouts.main')
@section('title' , 'Incoming Order')
@section('container')

<div class="my-4">
        <h2 class="text-center fw-bold text-primary">INCOMING ORDER</h2>
</div>
<div class="border rounded mt-3 p-2">
    <h5 class="text-center fw-bold">Today Orders</h5>
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
                    <th>ACTION</th>
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
                    <td><span class="badge bg-warning text-dark text-uppercase">{{ $order->status }}</span></td>
                    <td>
                        <form action="/admin/{{ $order->id }}/process" method="POST">
                            @csrf
                            <button class="btn btn-warning" type="submit">Process <i class="bi bi-list-task"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="text-center">
                    <td colspan="8">No orders yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection