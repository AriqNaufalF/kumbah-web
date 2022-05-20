@extends('customer.layouts.main')

@section('title', 'My Reviews')

@section('container')
    <div class="text-center mt-4">
        <h3 class="fw-bold">Reviews</h3>
    </div>
    <div class="border rounded px-3">
        <div class="card my-3 shadow-sm">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Laundry</h5>
                  <p class="card-text text-muted">No reviews yet</p>
                </div>
              </div>
              <div class="col-md-4 my-auto">
                  <div class=" text-center">
                      <a href="/reviews/name" class="btn btn-info  text-light">Leave a review</a>
                  </div>
              </div>
            </div>
          </div>
        <div class="card my-3 shadow-sm">
            <div class="row g-0">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Nama Laundry</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="col-md-4 my-auto">
                  <div class=" text-center">
                      @for ($i = 0; $i < 4; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                        @endfor
                        <i class="bi bi-star-fill text-secondary"></i>
                  </div>
              </div>
            </div>
          </div>
    </div>
@endsection