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
                        <th width="60px">Jumlah</th>
                        <th>Unit</th>
                        <th style="width: 15%"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <form action="{{ url('cart/add') }}" method="POST">
                                
                                @csrf
                                <input type="number" min="1" max="99" value="1" class="form-control" name="quantity">
                        </td>
                        <td>{{ $service->unit }}</td>
                        <td class="text-center">
                                <input type="hidden" name="id" value="{{ $service->id }}">
                                <input type="hidden" name="name" value="{{ $service->name }}">
                                <input type="hidden" name="price" value="{{ $service->price }}">

                                <button type="submit" class="btn btn-info text-light rounded-pill">
                                    <i class="bi bi-plus-lg"></i> <span class="d-none d-md-inline">Add</span>
                                </button>

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr class="text-center">
                        <td class="text-muted" colspan="6">There is no service yet. Find other store!</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>    
            @else 
            <table class="table table-borderless table-hover text-center" id="review">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>Name</th>
                        <th>Reviews</th>
                        <th>Stars</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reviews as $review)
                    <tr>
                        <td>{{ $review->user->name }}</td>
                        <td class="text-start">{{ $review->review }}</td>
                        <td>
                            @for ($i = 1; $i <= $review->rating; $i++)
                                <i class="bi bi-star-fill text-warning"></i>
                            @endfor
                            @if ($review->rating < 5)
                                @for ($i = $review->rating; $i < 5; $i++)
                                    <i class="bi bi-star-fill text-secondary"></i>
                                @endfor
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center text-muted">No reviews yet</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>    
            @endif
        </div> 
    </div>
</div>
