<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('Modernize-1.0.0/src/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('Modernize-1.0.0/src/assets/css/styles.min.css') }}" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('partials.sidebar')

        <div class="body-wrapper">
            @include('partials.header')
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('Modernize-1.0.0/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('Modernize-1.0.0/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Modernize-1.0.0/src/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('Modernize-1.0.0/src/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('Modernize-1.0.0/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>

</html>