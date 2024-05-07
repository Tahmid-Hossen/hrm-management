@extends("layouts.app")
@section("title", "Employee Details")
@section("pageTitle", "Employee Profile")
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[['title'=>'Employees Profile', 'url'=>route('employees.index')],['title'=>'('.$employee->emp_id.') '.$employee->full_name, 'url'=>'']]" class=""></x-breadcumbs.breadcumb>
@endsection

@section("additionalButton")

@endsection

@section("content")

    <x-containers.container-box>
        <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
            <div class="grid grid-cols-1 items-center gap-4 sm:grid-cols-2 lg:gap-6">
                <div class="flex justify-center">
                    @php
                        $defaultProfileImage=$employee->gender=='Female' ? asset('uploads/employees/profile/default-emp-female.jpg') : asset('uploads/employees/profile/default-emp-male.jpg');
                    @endphp
                    <img class="rounded-full border-8 border-gray-800 dark:border-neutral-500 dark:hover:border-red-700 hover:border-red-700 dark:hover:shadow-lg hover:shadow-lg cursor-pointer w-48 h-48 object-cover duration-300 ease-in-out" src="{{ asset('uploads/employees/profile/' . $employee->profile_photo) }}" onerror="this.onerror=null;this.src='{{$defaultProfileImage}}';" alt="profile-images"/>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                        {{ $employee->full_name }}
                    </h3>
                    <button type="button" class="block pt-2">
                        <span class="block">
                            <span class="inline-flex items-center gap-x-1 rounded-full bg-teal-100 px-1.5 py-1 text-xs font-medium text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                Permanent
                            </span>
                        </span>
                    </button>
                    <p class="pt-2 text-sm font-semibold text-gray-800 dark:text-white">
                        {{ $employee->emp_id }}
                    </p>
                </div>
            </div>

            <div class="grid items-center gap-3 sm:grid-cols-2 sm:gap-6 lg:grid-cols-2">
                <!-- Card -->
                @php
                    $icon='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                          <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z"/>
                          <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z"/>
                        </svg>';
                @endphp
                <x-cards.small-card :data="[
                    'title' => 'Company',
                    'subtitle' => $employee->empCompany->name ?? '',
                    'icon' => $icon
                ]"></x-cards.small-card>
                @php
                    $icon='<svg class="mt-1 size-5 flex-shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>';
                @endphp
                <x-cards.small-card :data="[
                    'title' => 'Department',
                    'subtitle' => $employee->empDepartment->name ?? '',
                    'icon' => $icon
                ]"></x-cards.small-card>

                @php
                    $icon='<svg class="mt-1 size-5 flex-shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>';
                @endphp
                <x-cards.small-card :data="[
                    'title' => 'Designation',
                    'subtitle' => $employee->empDesignation->name ?? '',
                    'icon' => $icon
                ]"></x-cards.small-card>

                @php
                    $icon='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                              <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
                              <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                            </svg>';
                    $joiningDate=$employee->joining_date;
                @endphp
                <x-cards.small-card :data='[
                    "title" => "Joining date",
                    "subtitle" => "<span class=\"font-medium text-red-600 decoration-2  dark:text-red-500\">" . $joiningDate . "</span>",
                    "icon" => $icon
                ]'></x-cards.small-card>

            </div>
        </div>
    </x-containers.container-box>
    <x-containers.container-box>
        @php
            $active='personal';
            if(request()->has('active')) $active=request('active');
        @endphp
        <div class="flex">
            <div class="flex rounded-lg bg-gray-100 p-1 transition hover:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                <nav class="flex flex-wrap space-x-1" aria-label="Tabs" role="tablist">
                    <button type="button" class="{{$active=='personal' ? 'active' : ''}} inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                        Personal Details
                    </button>
                    <button type="button" class="{{$active=='address' ? 'active' : ''}} inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                        Address Details
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-3" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                        Education
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-4" data-hs-tab="#segment-4" aria-controls="segment-4" role="tab">
                        Documents
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-5" data-hs-tab="#segment-5" aria-controls="segment-5" role="tab">
                        Skills
                    </button>
                </nav>
            </div>
        </div>

        <div class="mt-3">
            <div id="segment-1" class="{{$active=='personal' ? 'active' : 'hidden'}}" role="tabpanel" aria-labelledby="segment-item-1">
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->
                        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow rounded-lg border dark:border-neutral-500">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                                    Personal Details
                                </h3>
                                <div class="inline-block hs-tooltip">
                                    <button type="button" onclick="editEmployeeForm('{{$employee->id}}', 'personal')" id="update-personal-details-button" class="btn-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit Personal Details
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div id="personal-details-wrap">
                                <div class="px-4 py-5 sm:p-0" id="personal-details-view-wrap">
                                    <dl class="sm:divide-y dark:sm:divide-neutral-500 grid grid-cols-1 sm:grid-cols-2">
                                        <div class="border-t dark:border-neutral-500 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-200">
                                                Employee Name
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->full_name ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold dark:text-neutral-300 text-gray-500">
                                                Employee Id
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->emp_id ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Email
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->email ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Blood Group
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->blood_group ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Joining Date
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->joining_date ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Company Name
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->empCompany->name ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Designation
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-800 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->designation ?  $designations->firstWhere('id', $employee->designation)->name ?? 'N/A' : 'N/A' }}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Contact No
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->phone ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Emergency Contact
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->emergency_contact ?? 'N/A'}}
                                            </dd>
                                        </div>
                                        <div class="border-b dark:border-neutral-500 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-300">
                                                Birthday
                                            </dt>
                                            <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                                {{ $employee->birth_year ?? 'N/A'}}
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                                <div id="personal-details-edit-wrap" class="px-4 py-5 sm:p-0 hidden">form</div>
                            </div>

                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>
            <div id="segment-2" class="{{$active=='address' ? 'active' : 'hidden'}}" role="tabpanel" aria-labelledby="segment-item-2">
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->
                        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow rounded-lg border dark:border-neutral-500">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                                    Address Details
                                </h3>
                                <div class="inline-block hs-tooltip">
                                    <button type="button" id="update-info-button" class="btn-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit Address Details
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="px-4 py-5 sm:p-0" id="address-details-view">
                                <dl class="sm:divide-y dark:sm:divide-neutral-500 grid grid-cols-1 sm:grid-cols-2">
                                    <div class="border-t dark:border-neutral-500 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-200">
                                            Present Address
                                        </dt>
                                        <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                            {{ $employee->present_address ?? 'N/A'}}
                                        </dd>
                                    </div>
                                    <div class="border-b dark:border-neutral-500 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-semibold dark:text-neutral-300 text-gray-500">
                                            Parmanent Address
                                        </dt>
                                        <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                            {{ $employee->permanent_address ?? 'N/A'}}
                                        </dd>
                                    </div>

                                </dl>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>
            <div id="segment-3" class="hidden" role="tabpanel" aria-labelledby="segment-item-3">
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->

                        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow rounded-lg border dark:border-neutral-500" id="disable-card-segment-three">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                                    Education Details
                                </h3>
                                <div class="inline-block hs-tooltip">
                                    <button type="button" id="update-info-button" class="btn-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit Education Details
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="px-4 py-5 sm:p-0" id="address-details-view">
                                <dl class="sm:divide-y dark:sm:divide-neutral-500 grid grid-cols-1 sm:grid-cols-1">
                                    <div class="border-t dark:border-neutral-500 py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-semibold text-gray-500 dark:text-neutral-200">
                                            B.Sc
                                        </dt>
                                        <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                            {{ $employee->present_address ?? 'N/A'}}
                                        </dd>
                                    </div>
                                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-semibold dark:text-neutral-300 text-gray-500">
                                            H.Sc
                                        </dt>
                                        <dd class="mt-1 text-sm font-medium  text-gray-900 dark:text-neutral-200 sm:mt-0 sm:col-span-2">
                                            {{ $employee->permanent_address ?? 'N/A'}}
                                        </dd>
                                    </div>

                                </dl>
                            </div>

                        </div>

                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>
            <div id="segment-4" class="hidden" role="tabpanel" aria-labelledby="segment-item-4">
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->
                        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow rounded-lg border dark:border-neutral-500" id="disable-card-segment-four">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                                    Documents Details
                                </h3>
                                <div class="inline-block hs-tooltip">
                                    <button type="button" id="update-info-button" class="btn-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit Documents Details
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-neutral-800" id="enable-card-segment-four">
                            <form
                                action="{{ route("employees.documents.update", $employee->id) }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf

                                <div class="mt-3">
                                    <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                        <div>
                                            <p><strong class="text-red-700">Previous Documents: </strong>{{$employee->employee_resume}}</p>
                                            <label for="employeeResume" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Upload Resume
                                            </label>
                                            <input id="employeeResume" name="employee_resume" type="file" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" />
                                        </div>
                                    </div>
                                    <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                                        <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn-for-documets-four">
                                            Close
                                        </button>
                                        <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="segment-5" class="hidden" role="tabpanel" aria-labelledby="segment-item-5">
                <div class="overflow-y-auto">
                    <!-- Card Section -->
                    <div class="mx-auto">
                        <!-- Card -->

                        <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow rounded-lg border dark:border-neutral-500" id="disable-card-segment-three">
                            <div class="px-4 py-5 sm:px-6 flex justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                                    Skills Details
                                </h3>
                                <div class="inline-block hs-tooltip">
                                    <button type="button" id="update-info-button" class="btn-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit Skills Details
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="px-4 py-5 sm:p-0" id="address-skills-view">

                            </div>

                        </div>

                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>
        </div>
    </x-containers.container-box>
@endsection

@section('scripts')
<script>


// For personal details
const sectionIDBasicInfo1 = document.getElementById('disable-card');
const sectionIDBasicInfo2 = document.getElementById('edit-card');
const editBtnBasicInfo1 = document.getElementById('update-info-button');
const closeBtnBasicInfo2 = document.getElementById('close-form-btn');


editBtnBasicInfo1.addEventListener('click', () => {
    sectionIDBasicInfo1.style.display = 'none'
    sectionIDBasicInfo2.style.display = 'block'
    $("input").prop("disabled", false);
    $("select").prop("disabled", false);
    $("option").prop("disabled", false);
})
closeBtnBasicInfo2.addEventListener('click', ()=> {
    sectionIDBasicInfo2.style.display = 'none'
    sectionIDBasicInfo1.style.display = 'block'
    $("input").prop("disabled", true);
    $("select").prop("disabled", true);
    $("option").prop("disabled", true);
})
// End personal Details

// For Address
const sectionIDAddress1 = document.getElementById('disable-card-segment-two');
const sectionIDAddress2 = document.getElementById('enable-card-segment-two');
const editBtnAddress1 = document.getElementById('update-info-button-segment-two');
const closeBtnAddress2 = document.getElementById('close-form-btn-for-address');
sectionIDAddress2.style.display = 'none';


editBtnAddress1.addEventListener('click', () => {
    sectionIDAddress1.style.display = 'none'
    sectionIDAddress2.style.display = 'block'
})
closeBtnAddress2.addEventListener('click', ()=> {
    sectionIDAddress2.style.display = 'none'
    sectionIDAddress1.style.display = 'block'
})
// End Address



// For personal details
const sectionIDEducationInfo1 = document.getElementById('disable-card-segment-three');
const sectionIDEducationInfo2 = document.getElementById('enable-card-segment-three');
const editBtnEducationInfo1 = document.getElementById('update-info-button-segment-three');
const closeBtnEducationInfo2 = document.getElementById('close-form-btn-for-education');
sectionIDEducationInfo2.style.display = 'none';


editBtnEducationInfo1.addEventListener('click', () => {
    sectionIDEducationInfo1.style.display = 'none'
    sectionIDEducationInfo2.style.display = 'block'
    $("input").prop("disabled", false);
    $("select").prop("disabled", false);
    $("option").prop("disabled", false);
})
closeBtnEducationInfo2.addEventListener('click', ()=> {
    sectionIDEducationInfo2.style.display = 'none'
    sectionIDEducationInfo1.style.display = 'block'
    $("input").prop("disabled", true);
    $("select").prop("disabled", true);
    $("option").prop("disabled", true);
})
// End personal Details

// For Documents
const sectionIDDocuments1 = document.getElementById('disable-card-segment-four');
const sectionIDDocuments2 = document.getElementById('enable-card-segment-four');
const editBtnDocuments1 = document.getElementById('update-info-button-segment-four');
const closeBtnDocuments2 = document.getElementById('close-form-btn-for-documets-four');
sectionIDDocuments2.style.display = 'none';


editBtnDocuments1.addEventListener('click', () => {
    sectionIDDocuments1.style.display = 'none'
    sectionIDDocuments2.style.display = 'block'
})
closeBtnDocuments2.addEventListener('click', ()=> {
    sectionIDDocuments2.style.display = 'none'
    sectionIDDocuments1.style.display = 'block'
})
// End Documents
</script>

@endsection
