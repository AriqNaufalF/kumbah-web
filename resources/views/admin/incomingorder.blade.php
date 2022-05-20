@extends('admin.layouts.main')
@section('title' , 'Incoming Order')
@section('container')

<div class="container">
    <div class="row mt-4">
        <h2 class="text-center fw-bold text-primary">INCOMING ORDER</h2>
            <div class="border rounded mt-3 p-2">
    <h5 class="text-center fw-bold">Today Orders</h5>
    <div class="table-responsive rounded">
        <table class="table table-borderless table-hover">
            <thead class="bg-primary text-light text-center">
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
                    <th>
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
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
                        ODA
                    </td>
                    <td>
                        FULL CLEAN
                    </td>
                    <td>
                        1 DAY
                    </td>
                    <td>
                        4 Kg
                    </td>
                    <td>
                        -
                    </td>
                    <td>
                        <button class="btn btn-success " >
                            <i class="bi bi-check-lg"></i>
                        </button>
                        <button class="btn btn-danger " >
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>
@endsection