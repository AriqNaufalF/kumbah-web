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
                        <th>Store Name</th>
                        <th>Service</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>C0001</td>
                        <td>26-04-2022</td>
                        <td>Laundry bersih</td>
                        <td>Cuci seprai</td>
                        <td>Rp20.000</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
@endsection