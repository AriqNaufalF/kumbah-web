<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kumbah | @yield('title', 'Home')</title>
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('css/customer/main.css') }}">
    @stack('star-style')

    {{-- livewire --}}
    @livewireStyles
    
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="">
    @include('customer.layouts.navbar')

    <div class="container">
        @yield('container')
    </div>

    {{-- livewire --}}
    @livewireScripts
</body>
</html>