<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.headerAssets')
</head>

<body class="min-h-screen bg-white dark:bg-neutral-900">
    @include('layouts.topnav')
    @include('layouts.sidebar')
    <!-- Content -->
    <div class="w-full px-4 pt-6 bg-white sm:px-6 md:px-8 lg:ps-72 dark:bg-neutral-900">
        <div class="flex items-center justify-between mb-2">
            <div class="">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">@yield('pageTitle')</h3>
                {{-- BREADCUMB --}}
                <div class="">@yield('breadcumb')</div>
            </div>

            <div class="">
                <div class="flex items-center justify-between gap-x-2">@yield('additionalButton')</div>
            </div>

        </div>
        <!-- ========== MAIN CONTENT ========== -->
        <div id="content">
            @yield('content')
        </div>
        <!-- ========== MAIN CONTENT END ========== -->
    </div>
    <!-- End Content -->
    <div id="spinner-1" class="hidden">
        <div class="animate-spin inline-block size-12 border-[3px] border-current border-t-transparent text-gray-400 rounded-full dark:text-blue-500" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div id="spinner-small" class="hidden">
        <div class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-gray-400 rounded-full dark:text-blue-500" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    @include('layouts.modals')
    @include('layouts.footerAssets')
    @yield('moadals');
    @yield('scripts');
</body>

</html>
