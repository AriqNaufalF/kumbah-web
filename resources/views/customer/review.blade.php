@extends('customer.layouts.main')

@section('title', 'Leave A Review')

@section('container')
<div class="text-center mt-4">
    <h3 class="fw-bold">Leave A Review</h3>
</div>

<div class="row mt-3 shadow rounded px-3">
    <div class="col-md-4 text-center border rounded p-1 my-3">
        <img src="/img/laundry-1.jpeg" alt="..." width="50%">
        <h4>Nama Laundry</h4>
        <p class="text-muted mb-3">Jr. Abdul No. 84, Kota Bandung</p>
        <small>How satisfied?</small>
        <div class="star">
            @for ($i = 0; $i < 5; $i++)
            <i class="bi bi-star-fill text-secondary fs-2"></i>
            @endfor
        </div>
    </div>
    <div class="col-md-8 my-3">
        <div class="card-title text-center">
            <h4>Detail order</h4>
        </div>
        <div class="card-body">
            <span class="fw-bold">Customer Name</span>
            <p>Ucok</p>
            <span class="fw-bold">Order ID</span>
            <p>abcdefg</p>
            <form action="">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Give review about the services" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Give review about the services</label>
                </div>
                <div class="mt-4 text-end">
                    <a href="/reviews" class="btn btn-secondary mx-2">Cancel</a>
                    <button class="btn btn-info text-light" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection