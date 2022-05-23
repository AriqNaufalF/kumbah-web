@extends('customer.layouts.main')

@section('title', 'My Cart')

@section('container')
    <div class="mt-4">
        <h4 class="fw-bold">My Cart</h4>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-2 mt-5">
        <div class="col col-md-8">
            <h6 class="fw-bold">Shipping Address</h6>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, saepe!</p>

            <hr class="border border-top border-2 mt-4">

            <h6 class="fw-bold">Order Detail</h6>
            <div class="table-responsive">
                <table class="table table-borderless table-hover caption-top">
                    <caption>Nama Toko</caption>
                    <tr>
                        <th>Nama layanan</th>
                        <th width="100px">Jumlah</th>
                        <th width="50px">Unit</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>

                    @forelse($items as $item)
                    <tr class="align-middle">
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ url('cart/update') }}" method="POST">
                                
                                @csrf

                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="number" min="1" max="99" value="{{ $item->quantity }}" class="form-control" name="quantity">
                        </td>
                        <td>{{ $item->model->unit }}</td>
                        <td>{{ $item->getPriceSum() }}</td>
                        <td>
                                <button type="submit" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </button>

                            </form>

                            <form action="{{ url('cart/delete') }}" method="POST">

                                @csrf

                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                                
                            </form>
                            
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="4">Cart is empty.</td>
                    </tr>
                    @endforelse
                </table>
            </div>

            <form action="{{ url('cart/clear') }}" method="POST">
                @csrf
                <input type="submit" name="" value="Clear">
            </form>
        </div>

        <div class="col col-md-4">
            <div class="card rounded shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text">Subtotal Services</p>
                        <p class="card-text text-end">Rp {{ \Cart::session(Auth::id())->getSubTotal() }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">Shipping cost</p>
                        <p class="card-text text-end">Rp ---</p>
                    </div>
                    <hr class="border border-top border-2 my-3">
                    <div class="d-flex justify-content-between">
                        <p class="card-text fw-bold">Total Price</p>
                        <p class="card-text text-end fw-bold">Rp {{ \Cart::session(Auth::id())->getTotal() }}</p>
                    </div>
                    <form action="" class="text-center">
                        <select class="form-select my-3" name="payment">
                            <option selected>Choose Payment Method</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="d-grid">
                            <button class="btn btn-info text-light" type="submit">Pay</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
@endsection