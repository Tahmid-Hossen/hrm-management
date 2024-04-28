@extends("layouts.app")
@section("title", "Employee Details")
@section("pageTitle", "Employee Details")
@section("breadcumb")
<ol class="mr-2 mt-2 flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:focus:text-neutral-600" href="#">
            <svg class="me-3 size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Home
        </a>
        <svg class="mx-2 size-4 flex-shrink-0 overflow-visible text-gray-400 dark:text-neutral-600 dark:hover:text-red-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
        </svg>
    </li>

    <li class="inline-flex items-center truncate text-sm font-semibold text-red-600 dark:text-red-600 dark:hover:text-red-600" aria-current="page">
        Employee Details
    </li>
</ol>
@endsection

@section("additionalButton")

@endsection

@section("content")
<div class="mt-4">
    <div class="flex flex-col rounded-lg border border-neutral-200 px-4 py-6 dark:border-neutral-700 dark:bg-neutral-800">
        <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
            <div class="grid grid-cols-1 items-center gap-4 sm:grid-cols-2 lg:gap-6">
                <div class="flex justify-center">
                    <img src="{{ asset('profile_images/' . $employee->profile_photo) }}" alt="profile-images"/>
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
                <a class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md dark:border-neutral-600 dark:bg-neutral-700" href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex">
                            <svg class="mt-1 size-5 flex-shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>

                            <div class="ms-5 grow">
                                <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:text-neutral-200 dark:group-hover:text-red-600">
                                    Department
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    {{ $employee->empDepartment->name ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md dark:border-neutral-600 dark:bg-neutral-700" href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex">
                            <svg class="mt-1 size-5 flex-shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>

                            <div class="ms-5 grow">
                                <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:text-neutral-200 dark:group-hover:text-red-600">
                                    Designation
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    {{ $employee->empDesignation->name ?? '' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="group flex flex-col rounded-xl border bg-white shadow-sm transition hover:shadow-md dark:border-neutral-800 dark:bg-neutral-700" href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex">
                            <svg class="mt-1 size-5 flex-shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                            </svg>

                            <div class="ms-5 grow">
                                <h3 class="font-semibold text-gray-800 group-hover:text-red-600 dark:text-neutral-200 dark:group-hover:text-neutral-400">
                                    Joining date
                                </h3>
                                <p class="text-sm text-gray-500 dark:text-neutral-500">
                                    Reach us at
                                    <span class="font-medium text-red-600 decoration-2 group-hover:underline dark:text-red-500">
                                        {{ $employee->joining_date }}
                                    </span>
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
    <div class="flex flex-col rounded-lg border border-neutral-200 px-4 py-6 dark:border-neutral-700 dark:bg-neutral-800">
        <div class="flex">
            <div class="flex rounded-lg bg-gray-100 p-1 transition hover:bg-gray-200 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                <nav class="flex flex-wrap space-x-1" aria-label="Tabs" role="tablist">
                    <button type="button" class="active inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-1" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                        Personal Details
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-2" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                        Address Details
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-3" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                        Education
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-4" data-hs-tab="#segment-4" aria-controls="segment-4" role="tab">
                        Documents
                    </button>
                    <button type="button" class="inline-flex items-center gap-x-2 rounded-lg bg-transparent px-4 py-3 text-sm font-medium text-gray-500 hover:hover:text-red-600 hover:text-gray-700 disabled:pointer-events-none disabled:opacity-50 hs-tab-active:bg-white hs-tab-active:text-gray-700 dark:text-neutral-400 dark:hover:text-white dark:hs-tab-active:bg-gray-800 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400" id="segment-item-5" data-hs-tab="#segment-5" aria-controls="segment-5" role="tab">
                        Leave
                    </button>
                </nav>
            </div>
        </div>
        <div class="mt-3">
            <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                <div class="py-3">
                    <div class="flex justify-between">
                        <h3 class="border-b pb-3 text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                            Personal Details
                        </h3>
                        {{-- <span class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600  rounded-lg hover:bg-red-700 dark:bg-red-600 dark:hover:text-red-white dark:hover:bg-red-700 hover:text-white dark:text-white"></span> --}}
                        <span id="update-info-button" class="cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></span>
                    </div>
                    <div class="overflow-y-auto">
                        <!-- Card Section -->
                        <div class="mx-auto">
                            <!-- Card -->
                            <div class="bg-white dark:bg-neutral-800 active" id="disable-card">
                                <form action="{{ route("employees.store") }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mt-3">
                                        <div>
                                            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                                <div>
                                                    <label for="employeeFullName" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        Employee Name
                                                    </label>
                                                    <input id="employeeFullName" name="full_name" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->full_name }}" disabled />
                                                </div>
                                                <div>
                                                    <label for="employeeId" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        Employee Id
                                                    </label>
                                                    <input disabled id="employeeId" name="employee_id" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emp_id }}" disabled />
                                                </div>
                                            </div>

                                            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                                <div>
                                                    <label for="employeeEmail" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                        Email
                                                    </label>
                                                    <input id="employee_email" type="email" name="email" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->email }}" disabled />
                                                </div>

                                                <div>
                                                    <label for="employeeBloodGroup" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                        Blood Group
                                                    </label>
                                                    <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" disabled>
                                                        <option value="" selected disabled>Select Blood Group</option>
                                                        <option value="A+" {{ $employee->blood_group == 'A+' ? 'selected' : '' }}> A+ </option>
                                                        <option value="A-" {{ $employee->blood_group == 'A-' ? 'selected' : '' }}> A- </option>
                                                        <option value="B+" {{ $employee->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                                        <option value="B-" {{ $employee->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                                        <option value="O+" {{ $employee->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                                        <option value="O-" {{ $employee->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                                        <option value="AB+" {{ $employee->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                        <option value="AB-" {{ $employee->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                                    </select>
                                                </div>
                                                {{-- <div>
                                                        <label
                                                            for="employeePassword"
                                                            class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200"
                                                        >
                                                            Password
                                                        </label>
                                                        <input
                                                            id="employeePassword"
                                                            name="password"
                                                            type="password"
                                                            class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            value="{{ $employee->password }}"
                                                />
                                            </div> --}}
                                        </div>

                                        <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                            <div>
                                                <label for="employeeJoiningDate" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                    Joining Date
                                                </label>
                                                <input id="employeeJoiningDate" name="joining_date" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->joining_date }}" disabled />
                                            </div>
                                            <div>
                                                <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Select Company
                                                </label>
                                                <select id="employeeCompany" name="company_name" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" disabled>
                                                    <option value="" selected disabled>Select Company</option>
                                                    <option value="Nexdecade Technology" {{ $employee->company_name == 'Nexdecade Technology' ? 'selected' : '' }}>Nexdecade Technology</option>
                                                    <option value="M2M Communication" {{ $employee->company_name == 'M2M Communication' ? 'selected' : '' }}>M2M Communication</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                            <div>
                                                <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                    Select Designation
                                                </label>
                                                <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" disabled>
                                                    @foreach ($designations as $designation)
                                                    {{-- <option value="{{ $department->id }}"> --}}
                                                    <option value="{{ $designation->id }}" {{ $designation->id == $employee->designation ? 'selected' : '' }}>
                                                        {{ $designation->name }}
                                                    </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div> --}}
                                            {{-- <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200"> --}}
                                            {{-- Upload Photo --}}
                                            {{-- </label> --}}
                                            {{-- <input type="file" name="profile_photo" id="employee_photo" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"/> --}}
                                            {{-- </div> --}}

                                            <div>
                                                <label for="employeePhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                    Phone
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">
                                                    (Optional)
                                                </span>
                                                <input id="employeePhone" name="phone" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->phone }}" disabled />
                                            </div>
                                        </div>

                                        <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                            <div>
                                                <label for="employeeEmmergencyPhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                    Emergency Contact
                                                    Number
                                                </label>
                                                <span class="text-sm text-gray-400 dark:text-neutral-600">
                                                    (Optional)
                                                </span>
                                                <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emergency_contact }}" disabled />
                                            </div>
                                            {{-- <div>
                                                        <label
                                                            for="emergencyContactRelation"
                                                            class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200"
                                                        >
                                                            Emergency Contact
                                                            Relation
                                                        </label>
                                                        <span
                                                            class="text-sm text-gray-400 dark:text-neutral-600"
                                                        >
                                                            (Optional)
                                                        </span>
                                                        <input
                                                            id="emergencyContactRelation"
                                                            name="emergency_contact_relation"
                                                            type="text"
                                                            class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            value="{{ $employee->emergency_contact_relation }}"
                                            />
                                        </div> --}}

                                        <div>
                                            <label for="employeeBirthday" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Birthday
                                            </label>
                                            <div class="sm:flex">
                                                <input id="employeeBirthday" name="birth_year" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->birth_year }}" disabled />
                                            </div>
                                        </div>


                                    </div>

                                    <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                        <div>
                                            <label for="af-account-gender-checkbox" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Gender
                                            </label>
                                            <ul class="flex flex-col sm:flex-row">
                                                <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                                    <div class="relative flex w-full items-start">
                                                        <div class="flex h-5 items-center">
                                                            <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" checked="" disabled />
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                            Male
                                                        </label>
                                                    </div>
                                                </li>

                                                <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                                    <div class="relative flex w-full items-start">
                                                        <div class="flex h-5 items-center">
                                                            <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" disabled />
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                            Female
                                                        </label>
                                                    </div>
                                                </li>

                                                <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                                    <div class="relative flex w-full items-start">
                                                        <div class="flex h-5 items-center">
                                                            <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" disabled />
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                            Other
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div>
                                            <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Employee Profile Photo
                                            </label>
                                            <input type="file" name="profile_photo" id="employee_photo" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->profile_photo }}" disabled />
                                        </div>
                                    </div>
                            </div>
                            {{-- <div
                                                class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700"
                                            >
                                                <button
                                                    type="submit"
                                                    class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                >
                                                    Update
                                                </button>
                                            </div> --}}
                        </div>
                        </form>
                    </div>
                    <!-- End Card -->


                    <div class="bg-white dark:bg-neutral-800
                                hidden" id="edit-card">
                        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mt-3">
                                <div>
                                    <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                        <div>
                                            <label for="employeeFullName" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Employee Name
                                            </label>
                                            <input id="employeeFullName" name="full_name" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->full_name }}" disabled />
                                        </div>
                                        <div>
                                            <label for="employeeId" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Employee Id
                                            </label>
                                            <input disabled id="employeeId" name="emp_id" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emp_id }}" disabled />
                                        </div>
                                    </div>

                                    <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                        <div>
                                            <label for="employeeEmail" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                                Email
                                            </label>
                                            <input id="employee_email" type="email" name="email" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->email }}" disabled />
                                        </div>

                                        <div>
                                            <label for="employeeBloodGroup" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Blood Group
                                            </label>
                                            <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" disabled>
                                                <option value="" selected disabled>Select Blood Group</option>
                                                <option value="A+" {{ $employee->blood_group == 'A+' ? 'selected' : '' }}> A+ </option>
                                                <option value="A-" {{ $employee->blood_group == 'A-' ? 'selected' : '' }}> A- </option>
                                                <option value="B+" {{ $employee->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                                                <option value="B-" {{ $employee->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                                                <option value="O+" {{ $employee->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                                                <option value="O-" {{ $employee->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                                                <option value="AB+" {{ $employee->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                                                <option value="AB-" {{ $employee->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                                            </select>
                                        </div>
                                        {{-- <div>
                                                        <label
                                                            for="employeePassword"
                                                            class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200"
                                                        >
                                                            Password
                                                        </label>
                                                        <input
                                                            id="employeePassword"
                                                            name="password"
                                                            type="password"
                                                            class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            value="{{ $employee->password }}"
                                        />
                                    </div> --}}
                                </div>

                                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                    <div>
                                        <label for="employeeJoiningDate" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            Joining Date
                                        </label>
                                        <input id="employeeJoiningDate" name="joining_date" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->joining_date }}" disabled />
                                    </div>
                                    <div>
                                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Company
                                        </label>
                                        <select id="employeeCompany" name="company_name" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" disabled>
                                            <option value="" selected disabled>Select Company</option>
                                            <option value="Nexdecade Technology" {{ $employee->company_name == 'Nexdecade Technology' ? 'selected' : '' }}>Nexdecade Technology</option>
                                            <option value="M2M Communication" {{ $employee->company_name == 'M2M Communication' ? 'selected' : '' }}>M2M Communication</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                    <div>
                                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Designation
                                        </label>
                                        <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            @foreach ($designations as $designation)
                                            {{-- <option value="{{ $department->id }}"> --}}
                                            <option value="{{ $designation->id }}" {{ $designation->id == $employee->designation ? 'selected' : '' }}>
                                                {{ $designation->name }}
                                            </option>

                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div> --}}
                                    {{-- <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200"> --}}
                                    {{-- Upload Photo --}}
                                    {{-- </label> --}}
                                    {{-- <input type="file" name="profile_photo" id="employee_photo" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"/> --}}
                                    {{-- </div> --}}

                                    <div>
                                        <label for="employeePhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            Phone
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                                            (Optional)
                                        </span>
                                        <input id="employeePhone" name="phone" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->phone }}" disabled />
                                    </div>
                                </div>

                                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                    <div>
                                        <label for="employeeEmmergencyPhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                            Emergency Contact
                                            Number
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                                            (Optional)
                                        </span>
                                        <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emergency_contact }}" disabled />
                                    </div>
                                    {{-- <div>
                                                        <label
                                                            for="emergencyContactRelation"
                                                            class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200"
                                                        >
                                                            Emergency Contact
                                                            Relation
                                                        </label>
                                                        <span
                                                            class="text-sm text-gray-400 dark:text-neutral-600"
                                                        >
                                                            (Optional)
                                                        </span>
                                                        <input
                                                            id="emergencyContactRelation"
                                                            name="emergency_contact_relation"
                                                            type="text"
                                                            class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            value="{{ $employee->emergency_contact_relation }}"
                                    />
                                </div> --}}

                                <div>
                                    <label for="employeeBirthday" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Birthday
                                    </label>
                                    <div class="sm:flex">
                                        <input id="employeeBirthday" name="birth_year" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->birth_year }}" disabled />
                                    </div>
                                </div>


                            </div>

                            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                <div>
                                    <label for="af-account-gender-checkbox" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Gender
                                    </label>
                                    <ul class="flex flex-col sm:flex-row">
                                        <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                            <div class="relative flex w-full items-start">
                                                <div class="flex h-5 items-center">
                                                    <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" checked="" disabled />
                                                </div>
                                                <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                    Male
                                                </label>
                                            </div>
                                        </li>

                                        <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                            <div class="relative flex w-full items-start">
                                                <div class="flex h-5 items-center">
                                                    <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" disabled />
                                                </div>
                                                <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                    Female
                                                </label>
                                            </div>
                                        </li>

                                        <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                            <div class="relative flex w-full items-start">
                                                <div class="flex h-5 items-center">
                                                    <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" disabled />
                                                </div>
                                                <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                    Other
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div>
                                    <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Employee Profile Photo
                                    </label>
                                    <input type="file" name="profile_photo" id="employee_photo" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->profile_photo }}" disabled />
                                </div>
                            </div>
                    </div>
                    <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                        <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn">
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
        <!-- End Card Section -->
    </div>
</div>
</div>
<div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
    <div class="py-3">
        <div class="flex justify-between">
            <h3 class="border-b pb-3 text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
                Address Details
            </h3>
            <span id="update-info-button-segment-two" class="cursor-pointer"><i class="fa-solid fa-pen-to-square"></i></span>
        </div>
        <div class="overflow-y-auto">
            <!-- Card Section -->
            <div class="mx-auto">
                <!-- Card -->
                <div class="bg-white dark:bg-neutral-800" id="disable-card-segment-two">
                    <form
                        action="{{ route("employees.address.update", $employee->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        >
                        @csrf

                        <div class="mt-3">
                            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                <div>
                                    <label for="employeePresentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Present Address
                                    </label>
                                    <textarea disabled id="employeePresentAddress" name="present_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->present_address }}">
                                    {{ $employee->present_address }}
                                    </textarea>
                                </div>
                                <div>
                                    <label for="employeePermanentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Permanent Address
                                    </label>
                                    <textarea disabled id="employeePermanentAddress" name="permanent_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->permanent_address }}">
                                    {{ $employee->permanent_address }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white dark:bg-neutral-800" id="enable-card-segment-two">
                    <form
                        action="{{ route("employees.address.update", $employee->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                        >
                        @csrf

                        <div class="mt-3">
                            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                                <div>
                                    <label for="employeePresentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Present Address
                                    </label>
                                    <textarea id="employeePresentAddress" name="present_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->present_address }}">
                                    {{ $employee->present_address }}
                                    </textarea>
                                </div>
                                <div>
                                    <label for="employeePermanentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        Permanent Address
                                    </label>
                                    <textarea id="employeePermanentAddress" name="permanent_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->permanent_address }}">
                                    {{ $employee->permanent_address }}
                                    </textarea>
                                </div>
                            </div>

                            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                                <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn-for-address">
                                    Close
                                </button>
                                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
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
    <div class="py-3">
        <h3 class="border-b pb-3 text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
            {{-- Education Details --}}
            Coming Soon
        </h3>
        {{-- <div class="overflow-y-auto">
                            <!-- Card Section -->
                            <div class="mx-auto">
                                <!-- Card -->
                                <div class="bg-white dark:bg-neutral-800">
                                    <form
                                        action="{{ route("employees.store") }}"
        method="POST"
        enctype="multipart/form-data"
        >
        @csrf

        <div class="mt-3">
            <!-- Education -->
            <h3 class="text-sm capitalize text-gray-800 dark:text-white">
                Education - One
            </h3>
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:gap-6">
                <div>
                    <label for="institution_name_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Instituation Name
                    </label>
                    <span class="text-sm text-gray-400 dark:text-neutral-600">
                        (Optional)
                    </span>
                    <input id="institution_name_one" name="institution_name" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->institution_name }}" />
                </div>
                <div>
                    <div>
                        <label for="degree_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Select Degree Type
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                            (Optional)
                        </span>

                        <select id="degree_one" name="degree_one" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">
                                Select Degree
                            </option>
                            <option value="SSC">
                                SSC
                            </option>
                            <option value="HSC">
                                HSC
                            </option>
                            <option value="BSC">
                                BSC
                            </option>
                            <option value="MSC">
                                MSC
                            </option>
                        </select>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="department_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Department Name
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                            (Optional)
                        </span>

                        <input id="department_one" name="department_one" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->department_one }}" />
                    </div>
                </div>
            </div>
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:gap-6">
                <div>
                    <label for="passing_year_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Passing Year
                    </label>
                    <span class="text-sm text-gray-400 dark:text-neutral-600">
                        (Optional)
                    </span>
                    <input id="passing_year_one" name="passing_year_one" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->passing_year_one }}" />
                </div>
                <div>
                    <div>
                        <label for="result_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Result
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                            (Optional)
                        </span>

                        <input id="result_one" name="result_one" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->result_one }}" />
                    </div>
                </div>
            </div>

            <div id="education-fields">
                <!-- Dynamic education fields will be added here -->
            </div>

            <div class="mt-4">
                <button id="add-education-field" class="inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                        <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                    </svg>
                    Add Education
                </button>
            </div>
            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Update
                </button>
            </div>
        </div>
        </form>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->
</div> --}}
</div>
</div>
<div id="segment-4" class="hidden" role="tabpanel" aria-labelledby="segment-item-4">
    <div class="py-3">
        <h3 class="border-b pb-3 text-xl font-semibold text-gray-800 dark:border-neutral-700 dark:text-white">
            {{-- Documents --}}
            Coming Soon
        </h3>
        {{-- <div class="overflow-y-auto">
                            <!-- Card Section -->
                            <div class="mx-auto">
                                <!-- Card -->
                                <div class="bg-white dark:bg-neutral-800">
                                    <form
                                        action="{{ route("employees.store") }}"
        method="POST"
        enctype="multipart/form-data"
        >
        @csrf

        <div class="mt-3">
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                <div>
                    <label for="employeeResume" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Upload Resume
                    </label>
                    <input id="employeeResume" name="employee_resume" type="file" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" />
                </div>
            </div>
            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Update
                </button>
            </div>
        </div>
        </form>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->
</div> --}}
</div>
</div>
<div id="segment-5" class="hidden" role="tabpanel" aria-labelledby="segment-item-5">
    <h3 class="text-gray-500 dark:text-neutral-400">
        {{-- This is the
                        <em
                            class="font-semibold text-gray-800 dark:text-neutral-200"
                        >
                            Fouth
                        </em>
                        item's tab body. --}}



    </h3>
</div>
</div>
</div>
</div>


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


    $(document).ready(function() {
        // $("#edit-card").hide();
        // $("#enable-card-segment-two").hide();
        //  // Hide div-two initially
        // $("#update-info-button").click(function() {
        //     // console.log("hi");
        //     $("#edit-card").removeClass("hidden");
        //     $("#edit-card").show();
        //     $("#disable-card").hide();
        //     $("input").prop("disabled", false);
        //     $("select").prop("disabled", false);
        //     $("option").prop("disabled", false);
        // });
        // $("#close-form-btn").click(function() {
        //     $("#edit-card").addClass("hidden");
        //     $("#edit-card").hide();
        //     $("#disable-card").show();
        //     $("input").prop("disabled", true);
        //     $("select").prop("disabled", true);
        //     $("option").prop("disabled", true);
        // })

        // update-info-button-segment-two
        // $("#update-info-button-segment-two").click(function() {
        //     // console.log("hi");
        //     $("#enable-card-segment-two").removeClass("hidden");
        //     $("#enable-card-segment-two").show();
        //     $("#disable-card-segment-two").hide();
        //     $("input").prop("disabled", false);
        //     $("select").prop("disabled", false);
        //     $("option").prop("disabled", false);
        // });
        // $("#close-form-btn").click(function() {
        //     $("#enable-card-segment-two").addClass("hidden");
        //     $("#enable-card-segment-two").hide();
        //     $("#disable-card-segment-two").show();
        //     $("input").prop("disabled", true);
        //     $("select").prop("disabled", true);
        //     $("option").prop("disabled", true);
        // })
    });
</script>

@endsection
