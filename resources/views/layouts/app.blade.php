


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{('assets/css/datatable.css')}}" rel="stylesheet">
    <link href="{{('assets/css/extra-css.css')}}" rel="stylesheet">
</head>

<body class="dark:bg-neutral-900">
    <!-- ========== HEADER ========== -->
    @include('layouts.topnav')
    <!-- ========== END HEADER ========== -->

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
        <div class="mb-4 flex items-center justify-between">
            <div class="">
                <h3 class="font-semibold dark:text-neutral-200 text-[16px]">@yield('pageTitle')</h3>
                {{--BREADCUMB--}}
                <div class="">@yield('breadcumb')</div>
            </div>

            <div>
                <div class="">@yield('additionalButton')</div>
            </div>

        </div>
        <!-- ========== MAIN CONTENT ========== -->
        <div id="content">
            @yield('content')
        </div>
        <!-- ========== MAIN CONTENT END ========== -->
    </div>
    <!-- End Content -->
    @include('layouts.modals')
    <script src="{{asset('assets/js/theme-switcher.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="{{asset('assets/js/datatable.js')}}"></script>

    <script>
        new DataTable('#example');
    </script>

</body>

</html>
