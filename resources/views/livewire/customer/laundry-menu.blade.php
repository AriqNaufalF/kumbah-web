@push('button')
    <link rel="stylesheet" href="{{ asset('/css/customer/button.css') }}">
@endpush

<div>
    {{-- button --}}
    <div class="row justify-content-evenly">
        <div class="col-5 d-grid">
            <div class="buttons-outline">
                <input wire:model="select" type="radio" value="service" id="radio-one">
                <label for="radio-one">Services</label>
            </div>
        </div>
        <div class="col-5 d-grid">
            <div class="buttons-outline">
                <input wire:model="select" type="radio" value="review" id="radio-two">
                <label for="radio-two">Reviews</label>
            </div>
        </div>
    </div>
    <div class="mt-3 mb-4 p-2 border rounded d-inline-block w-100">
        {{-- table service --}}
        <div class="table-responsive rounded">
            @if ($select == 'service')
            <table class="table table-borderless table-hover" id="service">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>#</th>
                        <th>Service List</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th style="width: 15%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->price }}</td>
                        <td>{{ $service->unit }}</td>
                        <td>
                            <button class="btn btn-info text-light rounded-pill"><i class="bi bi-plus-lg"></i> <span class="d-none d-md-inline">Add</span></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
            @else 
            <table class="table table-borderless table-hover" id="review">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>Name</th>
                        <th>Reviews</th>
                        <th>Stars</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ucok</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, cum?</td>
                        <td>
                            @for ($i = 0; $i < 4; $i++)
                                <i class="bi bi-star-fill text-warning"></i>
                            @endfor
                        </td>
                    </tr>
                </tbody>
            </table>    
            @endif
        </div> 
    </div>
</div>
