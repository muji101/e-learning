<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepend-style')

    @include('includes.style')
    
    @stack('addon-style')
</head>
{{-- <body class="bg-gradient-to-r from-gray-700 via-gray-400 to-gray-700"> --}}
{{-- <body class="bg-gradient-to-r from-gray-900 to-blue-900"> --}}
<body class="bg-gray-100">

    {{-- navbar --}}
    @include('includes.navbar')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @stack('prepend-script')

    @include('includes.script')

    @stack('addon-script')

</body>
</html>