<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($settings) && $settings->favicon)
        <link rel="shortcut icon" href="{{ asset('storage/' . $settings->favicon) }}">
    @endif

    {{-- <link rel="shortcut icon" href="{{ asset('storage/' .$settings->favicon) }}"> --}}
    @if(isset($profil) && $profil->nama_dinas)
        <title>@yield('title') | {{  $profil->nama_dinas }}</title>
    @endif

    {{-- <title>@yield('title') | {{  $profil->nama_dinas }}</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('frontend.layouts.header')
    @include('frontend.layouts.navbar')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
