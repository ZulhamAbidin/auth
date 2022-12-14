<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>
        {{ Request::is('dashboard') ? 'dashboard' : '' }}
        {{ Request::is('dashboard/data') ? 'Lihat Data' : '' }}
        {{ Request::is('dashboard/data/create') ? 'Tambah Data' : '' }}
        {{ Request::is('dashboard/cetak/cetak-data-pekerja-form') ? 'Cetak' : '' }}
        {{ Request::is('dashboard/document/show') ? 'Lihat Document' : '' }}
        {{ Request::is('dashboard/document/index') ? 'Tambah Document' : '' }}
        {{ Request::is('dashboard/password/edit') ? 'Ganti Password' : '' }}
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('image/dashboardicon.png') }}">
</head>

<body>

    @include('dashboard.layouts.sidebar')
    @include('dashboard.layouts.navbar')
    @yield('container')

    <script src="{{ asset('js/main.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/js/app.js')
</body>

</html>
