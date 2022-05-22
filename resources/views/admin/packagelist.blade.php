@extends('admin.layouts.main')
@section('title' , 'Package List')
@section('container')

<h2 class="text-center fw-bold text-primary my-4">PACKAGE LIST</h2>

<div class="card p-3 bg-transparent">
    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#servicemodal"><i class="bi bi-plus-square text-light fs-4" ></i></button>
    </div>  
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">Paket 1</h5>
                    <p class="card-text text-center">Harga/Unit</p>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#servicemodal"><i class="bi bi-pencil-fill"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}
<div class="modal" id="servicemodal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="servicename" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="servicename">
              </div>
              <div class="mb-3">
                <label for="serviceprice" class="form-label">Price</label>
                <input type="number" class="form-control" id="serviceprice">
              </div>
              <div class="mb-3">
                <label class="form-label">Unit</label>
                <select class="form-select">
                    <option value="1" selected>Kg</option>
                    <option value="2">Pcs</option>
                  </select>
              </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection