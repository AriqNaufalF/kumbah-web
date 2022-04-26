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
    {{-- search area --}}
    <div class="row justify-content-center">
        <div class="col-md-5">
            <form action="/home">
                <div class="input-group mb-5">
                    <input type="text" class="form-control shadow-sm" placeholder="Input name/location" name="search">
                    <button class="btn btn-info text-light shadow-sm" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    {{-- card --}}
    <div class="see-all d-flex justify-content-end">
        <a href="/laundries" class="btn btn-outline-secondary">See All</a>
    </div>
    <div class="row mt-2 mb-5 row-cols-1 row-cols-md-4 g-3">
        @for ($i = 0; $i < 4; $i++)
        <div class="col">
            <div class="card mx-auto shadow" style="max-width: 18rem;">
                <img src="/img/laundry-1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/laundry/name" class="text-decoration-none stretched-link  text-dark">Nama Laundry</a></h5>
                    <p class="card-text"><small class="text-muted">Lokasi</small></p>
                    <div class="d-flex justify-content-between">
                    <h6 class="fw-bold"><i class="bi bi-star-fill text-warning"></i> 4.1</h6>
                    <h5 class="text-success">OPEN</h5>
                    </div>
                </div>
            </div>  
        </div>
        @endfor  
    </div>
@endsection