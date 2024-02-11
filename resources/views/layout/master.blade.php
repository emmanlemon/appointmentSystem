<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{ asset('images/logoMBP.png') }}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" style="text/css" href="{{ url('css/global.css') }}">
    @vite(['resources/js/app.js'])
</head>
<body>
    @if(Session::get('role') == 1 || Session::get('role') == 2 && Session::has('loginId')) 
        @include('components.format.sidebarNavigation')
    @elseif(Session::get('role') == 0 && !empty(Session::get('clientHeader')))
        @include('components.format.sidebarNavigationClient')
    @elseif(Session::get('role') == 0 && empty(Session::get('clientHeader')))
        @include('components.format.header')
     @endif
<main>
    @yield('content')
</main>
@if(Session::get('role') == 0 && !empty(Session::get('clientHeader')))
@elseif(Session::get('role') == 0 && empty(Session::get('clientHeader')))
@include('components.format.footer')
@endif
</body>
</html>