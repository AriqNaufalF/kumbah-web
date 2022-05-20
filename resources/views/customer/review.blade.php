@extends('customer.layouts.main')

@section('title', 'Leave A Review')

@push('star-style')
    <link rel="stylesheet" href="{{ asset('css/customer/star-style.css') }}">
@endpush

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
        <div class="rating-css">
            <div class="star-icon">
                <input type="radio" value="1" name="product_rating" id="rating1">
                <label for="rating1" class="bi bi-star-fill fs-2"></label>
                <input type="radio" value="2" name="product_rating" id="rating2">
                <label for="rating2" class="bi bi-star-fill fs-2"></label>
                <input type="radio" value="3" name="product_rating" id="rating3">
                <label for="rating3" class="bi bi-star-fill fs-2"></label>
                <input type="radio" value="4" name="product_rating" id="rating4">
                <label for="rating4" class="bi bi-star-fill fs-2"></label>
                <input type="radio" value="5" name="product_rating" id="rating5">
                <label for="rating5" class="bi bi-star-fill fs-2"></label>
            </div>
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