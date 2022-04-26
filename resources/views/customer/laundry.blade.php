@extends('customer.layouts.main')

@section('container')
{{--* description --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
        <div class="col">
            <img src="/img/laundry-1.jpeg" alt="..." class="image-thumbnail" style="max-width: 350px; overflow:hidden">
        </div>
        <div class="col">
            <h2 class="text-uppercase">Nama Laundry</h2>
            <p>	Jr. Abdul No. 84, Kota Bandung</p>
            <h6 class="text-bold">Deskripsi Laundry</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptatem temporibus numquam excepturi, libero maiores ducimus praesentium omnis corrupti, possimus, aliquid officia natus! Et nam vel temporibus natus eaque, quae pariatur voluptatem corporis odio numquam officiis alias enim hic distinctio nemo. Harum adipisci accusamus hic eos explicabo eveniet qui consectetur accusantium esse.</p>
        </div>
        {{-- order button --}}
        <div class="col align-self-center">
            <div class="card border-info" style="border-radius: 15px">
                <div class="card-body text-center">
                    <div class="card-title d-flex justify-content-evenly pt-1">
                        <h4><i class="bi bi-star-fill text-warning"></i> 4.1</h4>
                        <h4 class="text-success text-uppercase">buka</h4>
                    </div>
                    <hr class="bg-info border-info border-2 border-top">
                    <a href="#" class="btn btn-info px-5 my-2 text-light">Pesan</a>
                </div>
              </div>
        </div>
    </div>
    <hr class="border-secondary border-top">
    {{-- menu button --}}
    <div class="row justify-content-evenly">
        <div class="col-5 d-grid">
            <button class="btn btn-block btn-info text-light">Layanan</button>
        </div>
        <div class="col-5 d-grid">
            <button class="btn btn-block btn-info text-light">Ulasan</button>
        </div>
    </div>
    <div class="mt-3 p-1 border rounded">
        <div class="table-responsive rounded">
            <table class="table table-borderless table-hover">
                <thead class="bg-primary text-light">
                    <tr>
                        <th>#</th>
                        <th>Service List</th>
                        <th>Price</th>
                        <th>Unit</th>
                        <th style="width: 15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Cuci Kemeja</td>
                        <td>Rp12.000</td>
                        <td>pcs</td>
                        <td>
                            <button class="btn btn-info text-light rounded-pill"><i class="bi bi-plus-lg"></i> <span class="d-none d-md-inline">Add</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
@endsection