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
    <section class="flex items-center justify-center mt-16">
        <div class="container flex flex-col justify-center items-center mx-auto  max-w-md">
            <div class="text-center">
                <p class="text-5xl p-4 dark:text-white"><i class="fa-solid fa-file-circle-exclamation"></i></p>
                <p class="text-2xl font-semibold md:text-3xl dark:text-white">Sorry, This file format is invalid.</p>
                <p class="mt-4 mb-8 dark:text-neutral-400">Unfortunately the file you are looking for is not valid. Please provide valid template.</p>
                <a href="{{route('employees.import')}}" class="active text-white font-semibold bg-red-600 dark:text-white active:text-white active:font-semibold active:bg-red-600 dark:active:text-white w-full py-2 px-2 text-md text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 text-center">Back To Import</a>
            </div>
        </div>
    </section>
@endsection
@include('employee.create')
@section('scripts')
    <script>

    </script>
@endsection



