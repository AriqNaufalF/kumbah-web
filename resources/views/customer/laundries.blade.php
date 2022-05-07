@extends('customer.layouts.main')

@section('title', 'Find All Laundry Vendors')
    
@section('container')
    <h3 class="fw-bold text-center my-4">All Vendors</h3>
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
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-3 pb-5">
        @for ($i = 0; $i < 15; $i++)
        <div class="col">
            <div class="card shadow mx-auto" style="max-width: 18rem;">
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
</div>
@endsection