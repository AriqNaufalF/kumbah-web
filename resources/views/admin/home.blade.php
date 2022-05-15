@extends('admin.layouts.main')
@section('container')
<div class="row mt-4">
    <div class="col">
        <h3 class="">Hallo,</h3>
        <h1 class="fw-bold">Admin</h1>
    </div>
    <div class="col-md-3">
        <div class="border rounded p-2 position-relative">
            <a class="text-dark text-decoration-none stretched-link" href="incoming-order" >Incoming Order </a>
            <p class="fs-3">0</p>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="d-grid">
            <a class="btn btn-primary text-light" href="/package-list" role="button">Package List</a>
        </div>
    </div>
    <div class="col">
        <div class="d-grid">
            <a class="btn btn-primary text-light" href="/order-history" role="button">Order History</a>
        </div>
    </div>
</div>
<div class="border rounded mt-3 p-2 d-inline-block w-100">
    <div class="d-flex align-items-center mb-2">
        <h5 class="text-center fw-bold">Today Orders</h5>
        <a href="/add-order" class="btn btn-info ms-auto"><i class="bi bi-plus-square text-light fs-4"></i></a>
    </div>
    <div class="table-responsive rounded">
        <table class="table table-borderless table-hover">
            <thead class="bg-primary text-light">
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        ID ORDER
                    </th>
                    <th>
                        ORDER DATE
                    </th>
                    <th>
                        COSTUMER NAME
                    </th>
                    <th>
                        SERVICE
                    </th>
                    <th>
                        ESTIMATION
                    </th>
                    <th>
                        UNIT
                    </th>
                    <th>
                        STATUS
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        CST-001
                    </td>
                    <td>
                        22-02-2022
                    </td>
                    <td>
                        SAIFUL
                    </td>
                    <td>
                        FULL CLEAN
                    </td>
                    <td>
                        2 DAY
                    </td>
                    <td>
                        2 Kg
                    </td>
                    <td>
                        -
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection