<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kumbah | @yield('title', 'Home')</title>
    <!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/logo-kumbah.svg') }}">

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/customer/main.css') }}">
    @stack('star-style')
    @stack('button')

    {{-- livewire --}}
    @livewireStyles
    
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    {{-- navbar --}}
    @include('customer.layouts.navbar')

    {{-- sweetalert --}}
	@include('sweetalert::alert')
    
    {{-- Container start --}}
    <div class="container">
        @yield('container')
    </div>
    {{-- Container end --}}

    {{-- livewire --}}
    @livewireScripts

    <!-- Sweetalert Js -->
	<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
</body>
</html>