@extends('customer.layouts.main')

@section('title', 'My Order History')

@section('container')
    <div class="text-center mt-4">
        <h3 class="text-uppercase fw-bold">Transaction</h3>
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
            <table class="table table-borderless table-hover  text-center">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>#</th>
                        <th>ID Order</th>
                        <th>Order Date</th>
                        <th>Nama Toko</th>
                        <th>Total</th>
                        <th>Status</th>
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
                        @if ($order->status != 'finished')
                            <td>
                                <span class="text-uppercase badge bg-warning text-dark">{{ $order->status }}</span>
                            </td>
                        @else
                            <td>
                                <span class="text-uppercase badge bg-success">{{ $order->status }}</span>
                            </td>
                        @endif
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