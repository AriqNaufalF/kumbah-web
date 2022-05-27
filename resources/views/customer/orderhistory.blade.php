@extends('customer.layouts.main')

@section('title', 'My Order History')

@section('container')
    <div class="text-center mt-4">
        <h1 class="text-uppercase fw-bold">order history</h1>
    </div>
    <div class="mt-3 p-2 border rounded">
        <div class="row mb-2">
            <div class="col">
                <label for="date" class="form-label text-primary">Order Date</label>
            </div>
            <div class="col-sm-2">
                <input type="date" class="form-control form-control-sm" id="date" placeholder="DD/MM/YYYY">
            </div>
        </div>
        <div class="table-responsive rounded">
            <table class="table table-borderless table-hover">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>#</th>
                        <th>ID Order</th>
                        <th>Order Date</th>
                        <th>Nama Toko</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->order_id }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->order_date)->format(' d M Y') }}</td>
                        <td>{{ \App\Models\Service::find($order->service_id)->store->name }}</td>
                        <td>Rp. {{ $order->total_payments }}</td>
                    </tr>
                    @empty
                    <tr class="text-center">
                        <td colspan="6">No Order History.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div> 
    </div>
@endsection