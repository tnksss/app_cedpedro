<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

       
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
          <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
        
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <!-- Scripts -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}" ></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>

        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}" ></script>
        <script src="{{ asset('js/sb-admin-2.min.js') }}" ></script>

    </body>
</html>
