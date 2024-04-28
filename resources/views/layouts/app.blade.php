<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="http://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon.png">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- <script> -->


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{('assets/css/datatable.css')}}" rel="stylesheet">
    <link href="{{('assets/css/extra-css.css')}}" rel="stylesheet">
    <link href="{{('assets/css/style.css')}}" rel="stylesheet">
</head>

<body class="min-h-screen bg-white dark:bg-neutral-900">
    <!-- ========== HEADER ========== -->
    @include('layouts.topnav')
    <!-- ========== END HEADER ========== -->

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End Sidebar -->

    <!-- Content -->
    <div class="w-full px-4 pt-10 bg-white sm:px-6 md:px-8 lg:ps-72 dark:bg-neutral-900">
        <div class="flex items-center justify-between mb-4">
            <div class="">
                <h3 class="font-semibold text-gray-800 dark:text-neutral-200 text-[16px]">@yield('pageTitle')</h3>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="http://codeseven.github.io/toastr/build/toastr.min.js"></script>
    <script src="{{asset('assets/js/theme-switcher.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>

    <script src="{{asset('assets/js/datatable.js')}}"></script>

    <script>
        new DataTable('#example');

        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
        @endif
    </script>

    @yield('scripts');

</body>

</html>
