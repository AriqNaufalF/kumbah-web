@extends('admin.layouts.main')
@section('title' , 'Package List')
@section('container')

<h2 class="text-center fw-bold text-primary my-4">PACKAGE LIST</h2>

<livewire:admin.package-list :services="$services"/>
@endsection