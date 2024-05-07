@extends('layouts.app')
@section('title', 'Import Summary')
@section('pageTitle', 'Import Summary')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[
        ['title'=>'Employees List', 'url'=>route('employees.index')],
        ['title'=>'Import Employees', 'url'=>route('employees.import')],
        ['title'=>'Import Summary', 'url'=>'']
    ]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <section class="flex items-center justify-center h-full p-16 dark:bg-gray-50 dark:text-gray-800">
        <div class="container flex flex-col justify-center items-center mx-auto my-8 max-w-md w-1/2 py-8 pb-12" style="height: 300px; background-color: white; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="text-center">
                <img src="" alt="Nexdecade Logo" style="width: 50px; height: 50px;" class="mx-auto mb-4">
                <p class="text-2xl font-semibold md:text-3xl">Sorry, This file is invalid.</p>
                <p class="mt-4 mb-8 dark:text-gray-600">Unfortunately the file you are looking for is not valid. But don't worry, you can find plenty of other things on our homepage.</p>
                <a href="/" class="active text-white font-semibold bg-red-600 dark:text-white active:text-white active:font-semibold active:bg-red-600 dark:active:text-white w-full py-2 px-2 text-md text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 text-center">Go Back To Home Page</a>
            </div>
        </div>
    </section>
@endsection
@include('employee.create')
@section('scripts')
    <script>

    </script>
@endsection



