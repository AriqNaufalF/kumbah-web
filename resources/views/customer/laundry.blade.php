@extends('customer.layouts.main')

@section('title', "$store->name")

@section('container')
{{-- description --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
        <div class="col">
            <img src="/img/laundry-1.jpeg" alt="..." class="image-thumbnail" style="max-width: 350px; overflow:hidden">
        </div>
        <div class="col">
            <h2 class="text-uppercase">{{ $store->name }}</h2>
            <p>{{ $store->address }}</p>
            <h6 class="text-bold">Description</h6>
            <p>{{ $store->description }}</p>
        </div>
        {{-- order button --}}
        <div class="col align-self-center">
            <div class="card border-info" style="border-radius: 15px">
                <div class="card-body text-center">
                    <div class="card-title d-flex justify-content-evenly pt-1">
                        <h4><i class="bi bi-star-fill text-warning"></i> 4.1</h4>
                        @if ($store->is_open)
                            <h4 class="text-success">OPEN</h4>  
                        @else
                            <h4 class="text-danger">CLOSE</h4>
                        @endif
                        
                    </div>
                    <hr class="bg-info border-info border-2 border-top">
                    <a href="https://wa.me/{{ $store->user->phone ?? ''}}?text=I'm%20interested%20in%20your%20services" target="_blank" class="btn btn-info px-5 my-2 text-light">Chat <i class="bi bi-whatsapp"></i></a>
                </div>
              </div>
        </div>
    </div>
    <hr class="border-secondary border-top">
    {{-- menu --}}
    <livewire:customer.laundry-menu :store="$store"/>
@endsection