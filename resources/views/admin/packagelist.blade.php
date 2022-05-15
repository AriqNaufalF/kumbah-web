@extends('admin.layouts.main')
@section('title' , 'Package List')
@section('container')

<div class="container h-100">
    <div class="row align-items-center vh-100">
        <h2 class="text-center fw-bold text-primary">PACKAGE LIST</h2>
        <div class="border rounded d-flex p-3">
            <div class="col mx-2">
            <div class="card h-100 justify-content-center">
                <img src="https://source.unsplash.com/random" width="40" height="350" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-text text-center fw-bold">Paket 1</h3>
                    <p class="card-text text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex eveniet sapiente odio vitae commodi officiis alias facilis placeat, mollitia consequuntur inventore quos ipsum? At commodi numquam dicta beatae minus.</p>
                </div>
            </div>
            </div>
            <div class="col mx-2">
                <div class="card h-100 justify-content-center">
                    <img src="https://source.unsplash.com/random" width="40" height="350" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center fw-bold">Paket 2</h3>
                        <p class="card-text text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex eveniet sapiente odio vitae commodi officiis alias facilis placeat, mollitia consequuntur inventore quos ipsum? At commodi numquam dicta beatae minus.</p>
                    </div>
                </div>
            </div>
            <div class="col mx-2">
                <div class="card h-100 justify-content-center">
                    <img src="https://source.unsplash.com/random" width="40" height="350" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-text text-center fw-bold">Paket 3</h3>
                        <p class="card-text text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ex eveniet sapiente odio vitae commodi officiis alias facilis placeat, mollitia consequuntur inventore quos ipsum? At commodi numquam dicta beatae minus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection