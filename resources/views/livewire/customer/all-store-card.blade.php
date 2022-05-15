<div>
        {{-- search area --}}
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="input-group mb-5">
                    <input wire:model.debounce.800ms="search" type="search" class="form-control shadow-sm" placeholder="Search laundry name...">
                    <span class="input-group-text bg-info text-light"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
       {{-- card --}}
       <div class="row row-cols-1 row-cols-md-4 g-3 pb-5">
        @foreach ($stores as $store)
        <div class="col">
            <div class="card shadow mx-auto" style="max-width: 18rem;">
                <img src="/img/laundry-1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="/laundry/{{ $store->slug }}" class="text-decoration-none stretched-link  text-dark">{{ $store->name }}</a></h5>
                    <p class="card-text"><small class="text-muted">{{ $store->address }}</small></p>
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-bold"><i class="bi bi-star-fill text-warning"></i> 4.1</h6>
                        @if ($store->is_open)
                            <h5 class="text-success">OPEN</h5>
                        @else
                            <h5 class="text-danger">CLOSE</h5>
                        @endif
                    </div>
                </div>
            </div>  
        </div>
        @endforeach  
    </div>
    <div class="row ms-auto">
        <div class="col-2 mb-4">
            {{ $stores->links() }}
        </div>
    </div>
</div>
