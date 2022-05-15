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
    </div>
</div>
@endsection