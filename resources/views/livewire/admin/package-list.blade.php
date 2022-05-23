<div>
    <div class="card p-3 bg-transparent">
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#servicemodal"><i class="bi bi-plus-square text-light fs-4" ></i></button>
        </div>  
        <div class="row">
          @forelse ($services as $service)
            <div class="col-sm-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">{{ $service->name }}</h5>
                        <p class="card-text text-center">{{ $service->price }} / {{ $service->unit }}</p>
                        <div class="d-flex justify-content-center">
                          <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#editservicemodal" wire:click="edit({{ $service->id }})"><i class="bi bi-pencil-fill"></i></button>
                          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteservicemodal" wire:click="del({{ $service->id }})"><i class="bi bi-trash-fill"></i></button>
                        </div>
                    </div>
                </div>
            </div>
          @empty
            <div class="col text-center text-muted">
              <h4>You don't have a service yet. Please add it first!</h4>
            </div>
          @endforelse
        </div>
    </div>
    
    {{-- Create MODAL --}}
    <div class="modal fade" id="servicemodal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create New Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/admin/package-list" method="post">
                @csrf
                <div class="mb-3">
                    <label for="servicename" class="form-label">Service Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="servicename" name="name" value="{{ @old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="serviceprice" class="form-label @error('price') is-invalid @enderror">Price</label>
                  <input type="number" class="form-control" id="serviceprice" name="price" value="{{ @old('price') }}" required>
                  @error('price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Unit</label>
                  <select class="form-select" name="unit">
                    <option value="kg" selected>Kg</option>
                    <option value="pcs">Pcs</option>
                  </select>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info text-white">Create</button>
                </div>
              </form>  
          </div>
        </div>
      </div>
    </div>

    {{-- Edit Modal --}}
    <div wire:ignore.self class="modal fade" id="editservicemodal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Update Service</h5>
            <button wire:click.prevent="clear()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="/admin/package-list/{{ $service_id }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="servicename" class="form-label">Service Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="servicename" name="name" value="{{ @old('name', $name) }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="serviceprice" class="form-label @error('price') is-invalid @enderror">Price</label>
                  <input type="number" class="form-control" id="serviceprice" name="price" value="{{ @old('price', $price) }}" required>
                  @error('price')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Unit</label>
                  <select class="form-select" name="unit">
                    <option value="kg" @if ($unit == 'kg') selected  @endif>Kg</option>
                    <option value="pcs" @if ($unit == 'pcs') selected  @endif>Pcs</option>
                  </select>
                </div>
                <div class="modal-footer">
                  <button wire:click.prevent="clear()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info text-white">Update</button>
                </div>
              </form>  
          </div>
        </div>
      </div>
    </div>
    
    {{-- Delete Moadal --}}
    <div wire:ignore.self class="modal fade" id="deleteservicemodal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <button wire:click.prevent="clear()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this service?</p>
            </div>
            <div class="modal-footer">
                <button wire:click.prevent="clear()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="/admin/package-list/{{ $service_id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
