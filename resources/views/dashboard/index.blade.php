@extends('layouts.app')
@section('title', 'Dashboard')
@section('pageTitle', 'Dashboard')
@section('content')

     <!-- Card Section -->
    <div class="mx-auto " >
        <!-- Grid -->
        <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-2 sm:gap-6">

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800" href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                               Good Afternoon,

                            </h3>
                            <p class="text-sm text-gray-500">
                               {{auth()->user()->name ?? ''}}
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

    <br><br>

    @if(auth()->user()->roles[0]->name !== 'staff')
    <!-- Card Section -->
    <div class="mx-auto">
        <!-- Grid -->
        <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 sm:gap-6">

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800" href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                Staff
                            </h3>
                            <p class="text-sm text-gray-500">
                                4 job positions
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800" href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                Tickets
                            </h3>
                            <p class="text-sm text-gray-500">
                                26 job positions
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800" href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                Account Balance
                            </h3>
                            <p class="text-sm text-gray-500">
                                9 job positions
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800" href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                Total App
                            </h3>
                            <p class="text-sm text-gray-500">
                                11 job positions
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->
    @endif

@endsection
