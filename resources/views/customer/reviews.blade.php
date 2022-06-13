@extends('customer.layouts.main')

@section('title', 'My Reviews')

@section('container')
    <div class="text-center mt-4">
        <h3 class="fw-bold">Reviews</h3>
    </div>
    <div class="border rounded px-3">
      @forelse ($reviews as $review)
        @if ($review->review == null)
        <div class="card my-3 shadow-sm">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $review->store->name }}</h5>
                  <p class="card-text text-muted">No reviews yet</p>
                </div>
              </div>
              <div class="col-md-4 my-auto">
                  <div class=" text-center">
                      <a href="/reviews/{{ $review->id }}" class="btn btn-info  text-light">Leave a review</a>
                  </div>
              </div>
            </div>
        </div>
        @else
        <div class="card my-3 shadow-sm">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $review->store->name }}</h5>
                  <p class="card-text">{{ $review->review }}</p>
                </div>
              </div>
              <div class="col-md-4 my-auto">
                  <div class=" text-center">
                    @for ($i = 1; $i <= $review->rating; $i++)
                      <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                    @if ($review->rating < 5)
                      @for ($i = $review->rating; $i < 5; $i++)
                        <i class="bi bi-star-fill text-secondary"></i>
                      @endfor
                    @endif
                  </div>
              </div>
            </div>
        </div>
        @endif
      @empty
        <p class="text-center mt-3 text-muted">No Reviews yet.</p>
      @endforelse    
    </div>
@endsection