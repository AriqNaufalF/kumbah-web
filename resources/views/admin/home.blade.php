@extends('admin.layouts.main')
@section('container')
<div class="row mt-4">
    <div class="col">
        <h3 class="">Hallo,</h3>
        <h2 class="fw-bold">{{ auth()->user()->name }}</h2>
        <h5>
            Store is currently
            @if ($store->is_open) 
                <span class="badge bg-success">OPEN</span>
            @else
                <span class="badge bg-danger">CLOSE</span>
            @endif
        </h5>
        <form action="/admin/open-store/{{ $store->id }}" method="POST">
            @csrf
            @if ($store->is_open)
                <button type="submit" class="btn btn-outline-danger btn-sm">CLOSE NOW</button>
            @else
                <button type="submit" class="btn btn-outline-success btn-sm">OPEN NOW</button>
            @endif
        </form>
    </div>
    <div class="col-md-3">
        <div class="border rounded p-2 position-relative">
            <a class="text-dark text-decoration-none stretched-link" href="/admin/incoming-order" >Incoming Order </a>
            <p class="fs-3">{{ $orderCount }}</p>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="d-grid">
            <a class="btn btn-info text-light" href="/admin/package-list" role="button">Package List</a>
        </div>
    </div>
    <div class="col">
        <div class="d-grid">
            <a class="btn btn-info text-light" href="/admin/order-history" role="button">Order History</a>
        </div>
    </div>
</div>
<div class="border rounded mt-3 p-2 d-inline-block w-100">
    <div class="d-flex align-items-center mb-2">
        <h5 class="text-center fw-bold">Processed Orders</h5>
        <a href="/admin/add-order" class="btn btn-info ms-auto"><i class="bi bi-plus-square text-light fs-4"></i></a>
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
                        <form action="/admin/{{ $order->id }}/finish" method="POST">
                            @csrf
                            <button class="btn btn-success" >Finish <i class="bi bi-check-lg"></i></button>
                        </form>
                    </td>
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

@endsection