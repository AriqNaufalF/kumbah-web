@extends('customer.layouts.main')

@section('title', 'Leave A Review')

@push('star-style')
    <link rel="stylesheet" href="{{ asset('css/customer/star-style.css') }}">
@endpush

@section('container')
<div class="text-center mt-4">
    <h3 class="fw-bold">Leave A Review</h3>
</div>

<form action="/reviews/{{ $review->id }}" method="POST">
    @csrf
    @method('put')
    <div class="row mt-3 shadow rounded px-3">
        <div class="col-md-4 text-center border rounded p-1 my-3">
            <img src="/img/laundry-1.jpeg" width="50%">
            <h4>{{ $review->store->name }}</h4>
            <p class="text-muted mb-3">{{ $review->store->address }}</p>
            <small>How satisfied?</small>
            <div class="rating-css">
                <div class="star-icon">
                    @for ($i = 1; $i <= 5; $i++)
                    <input type="radio" value="{{ $i }}" name="rating" id="rating{{ $i }}">
                    <label for="rating{{ $i }}" class="bi bi-star-fill fs-2"></label>
                    @endfor
                </div>
            </div>
        </div>
        <div class="col-md-8 my-3">
            <div class="card-title text-center">
                <h4>Detail order</h4>
            </div>
            <div class="card-body">
                <span class="fw-bold">Customer Name</span>
                <p>{{ $review->user->name }}</p>
                <span class="fw-bold">Order ID</span>
                <p>{{ $review->order_id }}</p>
                <div class="form-floating">
                    <textarea class="form-control @error('review') is-invalid @enderror" placeholder="Give review about the services" id="floatingTextarea2" style="height: 100px" name="review" maxlength="500" required>{{ old('review') }}</textarea>
                    <label for="floatingTextarea2">Give review about the services</label>
                    @error('review')                        
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-4 text-end">
                    <a href="/reviews" class="btn btn-secondary mx-2">Cancel</a>
                    <button class="btn btn-info text-light" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection