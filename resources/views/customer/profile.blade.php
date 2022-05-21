@extends('customer.layouts.main')

@section('title', 'My Profile')

@section('container')
<div class="container">
    <div class="row justify-content-center align-content-center vh-100">
        {{-- profile --}}
        <div class="col-md-6 border rounded p-2">
            <h3 class="text-info mb-4"><i class="bi bi-person-fill"></i> Profile</h3>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                         <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone Number</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>{{ $user->address }}</td>
                    </tr>
                </tbody>
            </table>
            {{-- buttons --}}
            <div class="d-grid gap-2 col-7 mx-auto mt-4">
                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#profileModal">
                    Change Profiles
                </button>
                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#passwordModal">
                    Change Password
                </button>
                <form action="/logout" method="get" class="d-grid">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary">Logout</button>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    {{-- profile modal --}}
    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Profiles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/profile/{{ $user->name }}" method="post">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ @old('name', $user->name) }}" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ @old('email', $user->email) }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ @old('phone', $user->phone) }}" required>
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address" required>{{ @old('name', $user->address) }}</textarea>
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info text-white">Save changes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    {{-- Password modal --}}
    <div class="modal fade" id="passwordModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/profile/change-password" method="post">
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
                    <button type="submit" class="btn btn-info text-white">Change Password</button>
                </div>
            </form>
            </div>
        </div>
    </div>                     
</div>

@include('customer.layouts.footer')
@push('sweet-alert')
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endpush
@endsection