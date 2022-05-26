@extends('admin.layouts.main')

@section('title', 'Store Profile')

@section('container')
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card p-2 shadow-sm">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="store-tab" data-bs-toggle="tab" data-bs-target="#store" type="button" role="tab" aria-controls="store" aria-selected="true">Store <i class="bi bi-shop"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab" aria-controls="account" aria-selected="false">Account <i class="bi bi-person-badge"></i></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="store" role="tabpanel" aria-labelledby="store-tab">
                        <form action="/admin/profile/{{ $store->slug }}/edit" method="post">
                            @csrf
                            <div class="my-3">
                                <label for="storeName" class="form-label">Store Name</label>
                                <input type="text" class="form-control" id="storeName" value="{{ $store->name }}" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="storeAddress" class="form-label">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="storeAddress" rows="3" name="address" required>{{ @old('address', $store->address) }}</textarea>
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="storeDescription" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="storeDescript" rows="3" name="description" required>{{ @old('description', $store->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="clearfix">
                                <button type="submit" class="btn btn-info text-light float-end">Edit <i class="bi bi-pencil-square"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="/admin/profile/{{ $user->id }}" method="post">
                            @csrf
                            <div class="my-3">
                                <label for="adminName" class="form-label">Admin Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="adminName" name="name" value="{{ @old('name', $user->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="adminEmail" name="email" value="{{ @old('email', $user->email) }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="adminPhone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="adminPhone" name="phone" value="{{ @old('phone', $user->phone) }}" required>
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="passConfirm" class="form-label">Confirm Your Password</label>
                                <input type="password" class="form-control @error('confirmed') is-invalid @enderror" id="passConfirm" name="confirmed" required>
                                @error('confirmed')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="clearfix">
                                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#passAdminModal">
                                    Change Password
                                </button>
                                <button type="submit" class="btn btn-info text-light float-end">Edit <i class="bi bi-pencil-square"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Password modal --}}
    <div class="modal fade" id="passAdminModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="oldPassword" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="oldPassword" name="oldpass">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">new Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newpass">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Change Password</button>
                </div>
            </form>
            </div>
        </div>
    </div>   
@include('customer.layouts.footer')
@endsection