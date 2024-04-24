@extends('layouts.app')
@section('title', 'Employee Profile')
@section('pageTitle', 'Employee Profile')
@section('breadcumb')
    <ol class="flex items-center mt-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
               href="#">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600"
            aria-current="page">
            Employee Profile
        </li>
    </ol>
@endsection

@section('content')



    <div class="grid gap-3 mt-5 sm:grid-cols-1 md:grid-cols-3 xl:grid-cols-3 sm:gap-6">

        @foreach($employees as $employee)
        <!-- User List  -->
        <div class="bg-white border border-gray-200 rounded-lg dark:bg-neutral-800 -800 dark:border-gray-700">
            <div class="flex justify-between px-4 pt-4">

                <div class="relative inline-flex hs-dropdown">
                    <button id="hs-dropdown-custom-icon-trigger" type="button"
                            class="flex items-center justify-center text-sm font-semibold text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm hs-dropdown-toggle size-9 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-gray-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg class="flex-none text-gray-600 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="12" cy="5" r="1" />
                            <circle cx="12" cy="19" r="1" />
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-gray-700"
                        aria-labelledby="hs-dropdown-custom-icon-trigger">

                         <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white"
                           href="#" data-hs-overlay="#edit-employee-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            View 
                        </a>
                         @if(auth()->user()->roles[0]->name !== 'staff' )
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white"
                           href="#" data-hs-overlay="#edit-employee-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Edit
                        </a>
                        @endif


                        <!-- -->
                        <!-- <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white"
                           href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-x" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                            </svg>
                            Delete
                        </a> -->
                    </div>
                </div>

            </div>
            <div class="flex flex-col items-center pb-10">
                {{-- <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                src="{{ asset('storage/app/public/profile_photos/' . $employee->profile_photo) }}"
                alt="Bonnie image" /> --}}

                <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                     src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                     alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-red-600 dark:text-red-600">{{ $employee->full_name}}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $employee->designation}}</span>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $employee->email}}</span>



                <div class="flex mt-2 md:mt-2">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 dark:bg-red-600 dark:hover:bg-red-700 hover:text-white dark:text-white">#{{ $employee->emp_id}}</a>

                </div>
            </div>
        </div>
        <!-- User List  -->
        @endforeach

    </div>



@endsection
