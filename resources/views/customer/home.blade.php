@extends('customer.layouts.main')

@section('container')
    {{-- location area --}}
    <div class="location">
        <h5><a href="#" class="text-decoration-none text-dark"><i class="bi bi-geo-alt-fill"></i> Location</a></h5>
    </div>
    <div class="row mt-4 justify-content-center">
        <div class="col-md-5 text-center welcome">
            <h3 class="fw-bold">Hello, User</h3>
            <h4>Want to find a laundry?</h4>
        </div>
    </div>
    {{-- store and search area--}}
    <livewire:customer.store-card/>
@endsection