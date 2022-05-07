@extends('customer.layouts.main')

@section('title', 'My Profile')

@section('container')
<div class="container">
    <div class="row justify-content-center align-content-center vh-100">
        {{-- profile --}}
        <div class="col-md-6 border rounded p-2">
            <h3 class="text-info mb-4"><i class="bi bi-person-fill"></i> Username</h3>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>Cody Fisher</td>
                    </tr>
                    <tr>
                         <th scope="row">Email</th>
                        <td>User@mail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone Number</th>
                        <td>(907) 555-0101</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td>6391 Elgin St. Celina, Delaware 10299</td>
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
                <button type="submit" class="btn btn-outline-secondary">Logout</button>
            </div>
        </div>
    </div>
    {{-- profile modal --}}
    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Profiles</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">username</label>
                        <input type="text" class="form-control" id="username" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="...">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info text-white">Save changes</button>
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
                <form action="">
                    <div class="mb-3">
                        <label for="oldPassword" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="oldPassword">
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">new Password</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPass" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="confirmPass">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info text-white">Save changes</button>
            </div>
            </div>
        </div>
    </div>                     
</div>

@include('customer.layouts.footer')
@endsection