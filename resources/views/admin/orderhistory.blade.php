@extends('admin.layouts.main')
@section('title' , 'Order History')
@section('container')

<div class="container mt-4">
    <div class="row">
        <h2 class="text-center fw-bold text-primary">ORDER HISTORY</h2>
            <div class="border rounded mt-3 p-2">
                <div class="row justify-content-end mb-2">
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="date" placeholder="DD/MM/YY">
                    </div>
                </div>
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
                                QORY
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