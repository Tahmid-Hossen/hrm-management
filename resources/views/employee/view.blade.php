@extends('layouts.app')
@section('title', 'Employee Details')
@section('pageTitle', 'Employee Details')
@section('breadcumb')
    <ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 dark:hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
               href="#">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600 dark:hover:text-red-600"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:hover:text-red-600 dark:text-red-600"
            aria-current="page">
            Employee Details
        </li>
    </ol>
@endsection
@section('additionalButton')
{{--    <div class="flex flex-wrap justify-end gap-2">--}}
{{--        <!-- export button -->--}}
{{--        <div class="inline-block hs-tooltip">--}}
{{--            <a type="button" href="/"--}}
{{--               class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">--}}
{{--                  <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>--}}
{{--                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>--}}
{{--                </svg>--}}
{{--                <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">--}}
{{--                Add Attendance--}}
{{--              </span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- import button -->--}}
{{--        <div class="inline-block hs-tooltip">--}}
{{--            <a type="button" href="/"--}}
{{--               class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">--}}
{{--                  <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>--}}
{{--                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>--}}
{{--                  <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>--}}
{{--                </svg>--}}
{{--                <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">--}}
{{--                Add Leave--}}
{{--              </span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- create button -->--}}
{{--        <div class="inline-block hs-tooltip">--}}
{{--            <button type="button" data-hs-overlay=""--}}
{{--                    class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">--}}
{{--                  <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a2 2 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43m.094 5.093h.672V7.418h-.672z"/>--}}
{{--                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>--}}
{{--                </svg>--}}
{{--                <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">--}}
{{--                Add Joining Date--}}
{{--              </span>--}}
{{--            </button>--}}
{{--        </div>--}}


{{--    </div>--}}
@endsection
@section('content')
    <div class="mt-4">
        <div class="flex flex-col px-4 py-6 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
            <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">
              <div class='grid items-center grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6'>
                <div class="flex justify-center" >
                  <img class="bg-center bg-contain rounded-full w-[200px] h-[200px]" src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250">
                </div>
                <div>
                  <h3 class='text-2xl font-semibold text-gray-800 dark:text-white'>Md. Iqbal Mahmud</h3>
                  <button type="button" class="block pt-2">
                      <span class="block">
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                          Permanent
                        </span>
                      </span>
                    </button>
                  <p class='pt-2 text-sm font-semibold text-gray-800 dark:text-white'>#EMP2024110</p>
                  <p class='pt-2 text-sm font-semibold text-gray-800 dark:text-white'>Employee</p>
                </div>
              </div>

                <div class="grid items-center gap-3 sm:grid-cols-2 lg:grid-cols-2 sm:gap-6">
                  <!-- Card -->
                  <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-700 dark:border-neutral-600" href="#">
                    <div class="p-4 md:p-5">
                      <div class="flex">
                        <svg class="flex-shrink-0 mt-1 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>

                        <div class="grow ms-5">
                          <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-neutral-200">
                            Department
                          </h3>
                          <p class="text-sm text-gray-500 dark:text-neutral-500">
                            UI & UX
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->

                  <!-- Card -->
                  <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-700 dark:border-neutral-600" href="#">
                    <div class="p-4 md:p-5">
                      <div class="flex">
                        <svg class="flex-shrink-0 mt-1 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>

                        <div class="grow ms-5">
                          <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-neutral-200">
                            Designation
                          </h3>
                          <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Technical lead engineer
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->

                  <!-- Card -->
                  <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-700 dark:border-neutral-600" href="#">
                    <div class="p-4 md:p-5">
                      <div class="flex">
                        <svg class="flex-shrink-0 mt-1 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>

                        <div class="grow ms-5">
                          <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-neutral-200">
                            Work Shift
                          </h3>
                          <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Reach us at <span class="font-medium text-red-600 decoration-2 group-hover:underline dark:text-red-500">Regular work shift</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                  <!-- Card -->
                  <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-700 dark:border-neutral-800" href="#">
                    <div class="p-4 md:p-5">
                      <div class="flex">
                        <svg class="flex-shrink-0 mt-1 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>

                        <div class="grow ms-5">
                          <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                            Joining date
                          </h3>
                          <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Reach us at <span class="font-medium text-red-600 decoration-2 group-hover:underline dark:text-red-500">Not added yet</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Card -->
                </div>

            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="flex flex-col px-4 py-6 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
          <div class="flex">
            <div class="flex p-1 transition bg-gray-100 rounded-lg hover:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600">
              <nav class="flex flex-wrap space-x-1" aria-label="Tabs" role="tablist">
                <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-500 bg-transparent rounded-lg hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 gap-x-2 hover:text-gray-700 hover:hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white active" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                    Personal Details
                </button>
                <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-500 bg-transparent rounded-lg hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 gap-x-2 hover:text-gray-700 hover:hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white" id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                    Address Details
                </button>
                <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-500 bg-transparent rounded-lg hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 gap-x-2 hover:text-gray-700 hover:hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white" id="segment-item-3" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                    Education
                </button>
                <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-500 bg-transparent rounded-lg hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 gap-x-2 hover:text-gray-700 hover:hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white" id="segment-item-4" data-hs-tab="#segment-4" aria-controls="segment-4" role="tab">
                    Documents
                </button>
                <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-gray-500 bg-transparent rounded-lg hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 gap-x-2 hover:text-gray-700 hover:hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white" id="segment-item-5" data-hs-tab="#segment-5" aria-controls="segment-5" role="tab">
                    Leave
                </button>
              </nav>
            </div>
          </div>
          <div class="mt-3">
            <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
              <div class='py-3'>
                <h3 class='pb-3 text-xl font-semibold  text-gray-800 dark:text-white border-b dark:border-neutral-700'>Personal Details</h3>
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->
                        <div class="bg-white dark:bg-neutral-800">
                            <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mt-3">
                                    <div>
                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">
                                            <div>
                                                <label for="employeeFullName" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">Employee Name</label>
                                                <input id="employeeFullName" name="full_name" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Maria">
                                            </div>
                                            <div>
                                                <label for="employeeId" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Employee Id
                                                </label>
                                                <input disabled id="employeeId" name="employee_id" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">

                                            <div>
                                                <label for="employeeEmail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Email
                                                </label>
                                                <input id="employee_email" type="email" name="email" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com">
                                            </div>
                                            <div>
                                                <label for="employeePassword" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Password
                                                </label>
                                                <input id="employeePassword" name="password" type="password" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter password">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">

                                            <div>
                                                <label for="employeeJoiningDate" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Joining Date
                                                </label>
                                                <input id="employeeJoiningDate" name="joining_date" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                            </div>
                                            <div>
                                                <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Company
                                                </label>
                                                <select disabled id="employeeCompany" name="company_name" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    <option disabled selected="">Nexdecade Technology</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">

                                            <div>
                                                <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Select Designation
                                                </label>
                                                <select disabled id="employeeDesignation" name="designation" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                    <option disabled selected="">Web Developer</option>

                                                </select>
                                            </div>
{{--                                            <div>--}}
{{--                                                <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">--}}
{{--                                                    Upload Photo--}}
{{--                                                </label>--}}
{{--                                                <input type="file" name="profile_photo" id="employee_photo" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"/>--}}
{{--                                            </div>--}}

                                            <div>
                                                <label for="employeePhone" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Phone
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                                <input id="employeePhone" name="phone" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
                                            </div>

                                        </div>

                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">
                                            <div>
                                                <label for="employeeEmmergencyPhone" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Emergency Contact Number
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                                <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
                                            </div>
                                            <div>
                                                <label for="emergencyContactRelation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Emergency Contact Relation
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                                <input id="emergencyContactRelation" name="emergency_contact_relation" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Name">
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">

                                            <div>
                                                <label for="employeeBirthday" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Birthday
                                                </label>
                                                <div class="sm:flex">
                                                    <input id="employeeBirthday" name="birth_year" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                                </div>
                                            </div>

                                            <div>
                                                <label for="af-account-gender-checkbox" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Gender
                                                </label>
                                                <ul class="flex flex-col sm:flex-row">
                                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                        <div class="relative flex items-start w-full">
                                                            <div class="flex items-center h-5">
                                                                <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="text-red-600 border-gray-300 rounded-full focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" checked="">
                                                            </div>
                                                            <label for="hs-horizontal-list-group-item-radio-1" class="block w-full text-sm text-gray-600 ms-3 dark:text-neutral-300">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                        <div class="relative flex items-start w-full">
                                                            <div class="flex items-center h-5">
                                                                <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="text-red-600 border-gray-300 rounded-full focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                                            </div>
                                                            <label for="hs-horizontal-list-group-item-radio-2" class="block w-full text-sm text-gray-600 ms-3 dark:text-neutral-300">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                        <div class="relative flex items-start w-full">
                                                            <div class="flex items-center h-5">
                                                                <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="text-red-600 border-gray-300 rounded-full focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                                            </div>
                                                            <label for="hs-horizontal-list-group-item-radio-3" class="block w-full text-sm text-gray-600 ms-3 dark:text-neutral-300">
                                                                Other
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>


                                    </div>
                                    <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Update
                                        </button>
                                    </div>
                              </div>
                            </form>

                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </div>

              </div>
            </div>
            <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                <div class='py-3'>
                    <h3 class='pb-3 text-xl font-semibold  text-gray-800 dark:text-white border-b dark:border-neutral-700'>Address Details</h3>
                    <div class="overflow-y-auto">
                        <!-- Card Section -->
                        <div class="mx-auto">
                            <!-- Card -->
                            <div class="bg-white dark:bg-neutral-800">
                                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mt-3">
                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">

                                            <div>
                                                <label for="employeePresentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Present Address
                                                </label>
                                                <textarea id="employeePresentAddress" name="present_address" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                                            </div>
                                            <div>
                                                <label for="employeePermanentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Permanent Address
                                                </label>
                                                <textarea id="employeePermanentAddress" name="permanent_address" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                                            </div>
                                        </div>



                                        <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">

                                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Card Section -->
                    </div>

                </div>
            </div>
            <div id="segment-3" class="hidden" role="tabpanel" aria-labelledby="segment-item-3">
                <div class='py-3'>
                    <h3 class='pb-3 text-xl font-semibold  text-gray-800 dark:text-white border-b dark:border-neutral-700'>Education Details</h3>
                    <div class="overflow-y-auto">
                        <!-- Card Section -->
                        <div class="mx-auto">
                            <!-- Card -->
                            <div class="bg-white dark:bg-neutral-800">
                                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mt-3">

                                        <!-- Education -->
                                        <h3 class="text-sm text-gray-800 capitalize dark:text-white">Education - One</h3>
                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-3 lg:gap-6">
                                            <div>
                                                <label for="institution_name_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Instituation Name
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                                <input id="institution_name_one" name="institution_name_one" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter institution name">
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="degree_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                        Select Degree Type
                                                    </label>
                                                    <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                                    <select id="degree_one" name="degree_one" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                        <option selected="">Select Degree</option>
                                                        <option value="SSC">SSC</option>
                                                        <option value="HSC">HSC</option>
                                                        <option value="BSC">BSC</option>
                                                        <option value="MSC">MSC</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="department_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                        Department Name
                                                    </label>
                                                    <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                                    <input id="department_one" name="department_one" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter department">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-3 lg:gap-6">
                                            <div>
                                                <label for="passing_year_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Passing Year
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                                <input id="passing_year_one" name="passing_year_one" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                                            </div>
                                            <div>
                                                <div>
                                                    <label for="result_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                        Result
                                                    </label>
                                                    <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                                    <input id="result_one" name="result_one" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                                                </div>
                                            </div>

                                        </div>

                                        <div id="education-fields">
                                            <!-- Dynamic education fields will be added here -->

                                        </div>

                                        <div class="mt-4">
                                            <button id="add-education-field" class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                     class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                                </svg>Add Education</button>
                                        </div>
                                        <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Card Section -->
                    </div>

                </div>
            </div>
            <div id="segment-4" class="hidden" role="tabpanel" aria-labelledby="segment-item-4">
                <div class='py-3'>
                    <h3 class='pb-3 text-xl font-semibold  text-gray-800 dark:text-white border-b dark:border-neutral-700'>Documents</h3>
                    <div class="overflow-y-auto">
                        <!-- Card Section -->
                        <div class="mx-auto">
                            <!-- Card -->
                            <div class="bg-white dark:bg-neutral-800">
                                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mt-3">
                                            <div class="grid grid-cols-1 gap-4 mt-2 sm:grid-cols-2 lg:gap-6">
                                                <div>
                                                    <label for="employeeResume" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200 font-medium">
                                                        Upload Resume
                                                    </label>
                                                    <input id="employeeResume" name="employee_resume" type="file" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
                                                </div>
                                            </div>
                                        <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Card Section -->
                    </div>

                </div>
            </div>
            <div id="segment-5" class="hidden" role="tabpanel" aria-labelledby="segment-item-5">
              <p class="text-gray-500 dark:text-neutral-400">
                This is the <em class="font-semibold text-gray-800 dark:text-neutral-200">Fouth</em> item's tab body.
              </p>
            </div>
          </div>
        </div>
    </div>

@endsection


