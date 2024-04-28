

{{--03 Reset User Password Modal--}}
<div id="update-user-password-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
<div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <!-- Header -->
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Reset User Password
        </h3>
        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#update-user-password-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <!-- End Header -->

    <!-- Body -->
    <div class="p-4 overflow-y-auto">

        <div class="space-y-5" data-hs-toggle-password-group="">
            <!-- Form Group -->
            <div class="max-w-full">
                <label for="hs-toggle-password-multi-toggle-np" class="block text-sm mb-2 dark:text-white">New password</label>
                <div class="relative">
                    <input id="hs-toggle-password-multi-toggle-np" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter new password">
                    <button type="button" data-hs-toggle-password='{
      "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
    }' class="absolute top-0 end-0 p-3.5 rounded-e-md">
                        <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="max-w-full mb-5">
                <label for="hs-toggle-password-multi-toggle" class="block text-sm mb-2 dark:text-white">Current password</label>
                <div class="relative">
                    <input id="hs-toggle-password-multi-toggle" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter current password" value="12345qwerty">
                    <button type="button" data-hs-toggle-password='{
      "target": ["#hs-toggle-password-multi-toggle", "#hs-toggle-password-multi-toggle-np"]
    }' class="absolute top-0 end-0 p-3.5 rounded-e-md">
                        <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Form Group -->
        </div>
    </div>
    <!-- End Body -->

    <!-- Footer -->
    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#update-user-password-modal">
            Cancel
        </button>

        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#update-user-password-modal">
            Reset Password
        </button>
    </div>
    <!-- End Footer -->
</div>
</div>
</div>
{{--03 Reset User Password Modal--}}





{{--04 Delete roles Modal--}}
<div id="delete-role-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
      <div class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
        <div class="absolute top-2 end-2">
          <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#delete-role-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>

        <div class="p-4 sm:p-10 overflow-y-auto">
          <div class="flex gap-x-4 md:gap-x-7">
            <!-- Icon -->
            <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
              <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </span>
            <!-- End Icon -->

            <div class="grow">
              <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                Are you sure?
              </h3>
              <p class="text-gray-500 dark:text-neutral-500">
                This data will be deleted.
              </p>
            </div>
          </div>
        </div>

        <div class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-neutral-950 dark:border-neutral-800">
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#delete-role-modal">
            Cancel
          </button>
          <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
            Confirm
          </a>
        </div>
      </div>
    </div>
  </div>

{{--04 Delete User Modal--}}



{{--05 Create Employee Modal--}}
<div id="create-new-employee-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-4xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Create Employee
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#create-new-employee-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="p-4 overflow-y-auto">
            <!-- Card Section -->
            <div class="mx-auto">
                <!-- Card -->
                <div class="bg-white px-4 dark:bg-neutral-800">

                    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-neutral-700" aria-label="Tabs" role="tablist">
                            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 active" id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1" aria-controls="bar-with-underline-1" role="tab">
                                Basic Information
                            </button>
                            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400" id="bar-with-underline-item-2" data-hs-tab="#bar-with-underline-2" aria-controls="bar-with-underline-2" role="tab">
                                Additional Information
                            </button>
                            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400" id="bar-with-underline-item-3" data-hs-tab="#bar-with-underline-3" aria-controls="bar-with-underline-3" role="tab">
                                Academic Information
                            </button>
                        </nav>

                        <div class="mt-3">
                            <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                                    <div>
                                        <label for="employeeFullName" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">Employee Name</label>
                                        <input id="employeeFullName" name="full_name" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Maria" required>
                                    </div>
                                    <div>
                                        <label for="employeeId" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Employee Id
                                        </label>
                                        <input id="employeeId" name="emp_id" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001" required>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeeEmail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Email
                                        </label>
                                        <input id="employee_email" type="email" name="email" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com" required>
                                    </div>

                                    <div>
                                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Enter Blood Group
                                        </label>
                                        <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option selected="">Select Blood Group</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </div>
                                    {{-- <div>
                                        <label for="employeePassword" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Password
                                        </label>
                                        <input id="employeePassword" name="password" type="password" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter password">
                                    </div> --}}
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeeJoiningDate" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Joining Date
                                        </label>
                                        <input id="employeeJoiningDate" name="joining_date" type="date" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                    </div>
                                    <div>
                                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Company
                                        </label>
                                        <select id="employeeCompany" name="company_name" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option selected="">Select Company</option>
                                            <option>Nexdecade Technology</option>
                                            <option>M2M Communication</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Designation
                                        </label>
                                        <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            @if(isset($designations))
                                            @foreach ($designations as $designation)
                                                    <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>

                                    {{-- <div>
                                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Enter Blood Group
                                        </label>
                                        <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option selected="">Select Blood Group</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </div> --}}


                                    <div>
                                        <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Employee Profile Photo
                                        </label>
                                        <input type="file" name="profile_photo" id="employee_photo" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"/>
                                    </div>
                                </div>

                            </div>
                            <div id="bar-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-2">

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                                    <div>
                                        <label for="employeePhone" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Phone
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                        <input id="employeePhone" name="phone" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
                                    </div>
                                    <div>
                                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Department
                                        </label>
                                        <select id="employeeDesignation" name="emp_department" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            @if(isset($departments))
                                            @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Designation
                                        </label>
                                        <select id="employeeDesignation" name="emp_department" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            @if(isset($designations))
                                            @foreach ($designations as $designation)
                                                    <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div>
                                        <label for="employeeBirthday" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Birthday
                                        </label>
                                        <div class="sm:flex">
                                            <input id="employeeBirthday" name="birth_year" type="date" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="af-account-gender-checkbox" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Gender
                                        </label>
                                        <ul class="flex flex-col sm:flex-row">
                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" checked="">
                                                    </div>
                                                    <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                        Male
                                                    </label>
                                                </div>
                                            </li>

                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                        Female
                                                    </label>
                                                </div>
                                            </li>

                                            <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                                <div class="relative flex items-start w-full">
                                                    <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                                    </div>
                                                    <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                                        Other
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <label for="employeeResume" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200 font-medium">
                                            Upload Resume
                                        </label>
                                        <input id="employeeResume" name="employee_resume" type="file" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeePresentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Present Address
                                        </label>
                                        <textarea id="employeePresentAddress" name="present_address" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                                    </div>
                                    <div>
                                        <label for="employeePermanentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Permanent Address
                                        </label>
                                        <textarea id="employeePermanentAddress" name="permanent_address" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                                    </div>
                                </div>

                            </div>
                            <div id="bar-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-3">

                                <h3 class="text-sm text-gray-800 dark:text-white capitalize">Education - One</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                                    <div>
                                        <label for="institution_name_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Instituation Name
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                        <input id="institution_name_one" name="institution_name[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter institution name">
                                    </div>
                                    <div>
                                        <div>
                                            <label for="degree_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Select Degree Type
                                            </label>
                                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                            <select id="degree_one" name="degree[]" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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

                                            <input id="department_one" name="department[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter department">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                                    <div>
                                        <label for="passing_year_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Passing Year
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                        <input id="passing_year_one" name="passing_year[]" type="number" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                                    </div>
                                    <div>
                                        <div>
                                            <label for="result_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Result
                                            </label>
                                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                            <input id="result_one" name="result[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
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

                            </div>
                        </div>

                        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-employee-modal">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Card Section -->
        </div>
        <!-- End Body -->
    </div>
</div>
</div>
{{--04 Create Employee Modal--}}



{{--06 update Employee Modal--}}
{{-- @isset($employee)

 else
<p>No employee data found.</p>
@endisset --}}


{{--06 update Employee Modal--}}


{{-- assign-role-modal --}}

<div id="assign-role-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-4xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <!-- Header -->
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    {{-- Assign Role --}}
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#assign-role-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- End Header -->
            <!-- Body -->
            <div class="p-4 overflow-y-auto">
                <!-- Card Section -->
                <div class="mx-auto">
                <!-- Card -->
                    <div class="bg-white px-4 dark:bg-neutral-800">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- End Col -->
                            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                                <div class="sm:col-span-3">
                                    <label for="employeeDesignation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Create as user
                                    </label>
                                    </div>
                                    <!-- End Col -->
                                    <div class="sm:col-span-9">
                                    <div class="space-y-2">
                                        <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option selected="">Select type</option>
                                            <option value="Super Admin">Yes</option>
                                            <option value="Manager">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- End Col -->
                            <!-- End Grid -->
                            <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                    Cancel
                                </button>
                                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- End Card -->
                    </div>
                </div>
                <!-- End Card Section -->
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>

{{-- end role modal --}}



<!-- 07 Create Leave Modal -->
<div id="create-new-leave-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-4xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Create New Leave
            </h3>
            <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#create-new-leave-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="p-4 overflow-y-auto">
            <!-- Card Section -->
            <div class="mx-auto"><!-- Card -->
                <div class="px-4 bg-white dark:bg-neutral-800">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                            Leave
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Manage your leave
                        </p>
                    </div>
                    <form>
                        <!-- Grid -->
                        <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

                            <div class="sm:col-span-3">
                                <label for="employeeLeave" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Select Employee
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="relative" id="employee-leave">
                                    <div class="relative hs-select">
                                        <select data-hs-select="{
                                        &quot;placeholder&quot;: &quot;Select Employee&quot;,
                                        &quot;hasSearch&quot;: true,
                                        &quot;searchPlaceholder&quot;: &quot;Search Employee&quot;,
                                        &quot;searchClasses&quot;: &quot;block w-full tvwcs sdjrs q8xeg border-neutral-500 focus:border-neutral-500 focus:ring-neutral-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 a5fil etaom&quot;,
                                        &quot;searchWrapperClasses&quot;: &quot;nf52k w30jw -mx-1 cbvwz vhz8h dark:bg-neutral-800&quot;,
                                        &quot;toggleTag&quot;: &quot;<button type=\&quot;button\&quot;><span data-icon></span><span class=\&quot;q9f8h dark:text-neutral-200 \&quot; data-title></span></button>&quot;,
                                        &quot;toggleClasses&quot;: &quot;block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600&quot;,
                                        &quot;dropdownClasses&quot;: &quot;apna3 r8726 a7srx p2xsq oe2wn w-full o7sec uf9bc nf52k border border-neutral-300 dark:border-neutral-700 jtemb shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] x35aa haqwf xv42z ghokw dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800&quot;,
                                        &quot;optionClasses&quot;: &quot;xvcp7 dark:hs-selected:bg-red-600 a5fil una0h w-full tvwcs q9f8h cursor-pointer q8xeg focus:outline-none focus:bg-gray-100 dark:text-neutral-300 hover:text-white hover:bg-red-700 dark:hover:bg-red-700 dark:focus:bg-neutral-800&quot;,
                                        &quot;optionTemplate&quot;: &quot;<div><div class=\&quot;flex items-center \&quot;><div class=\&quot;vy8kl \&quot; data-icon></div><div class=\&quot; dark:text-neutral-200 \&quot; data-title></div></div></div>&quot;,
                                        &quot;viewport&quot;: &quot;#hs-pro-create-new-user&quot;
                                      }" class="hidden" style="display: none;">
                                            <option value="">Choose</option>

                                            <option value="HR" data-hs-select-option="{}">
                                                Iqbal Mahmud
                                            </option>
                                            <option value="employee" data-hs-select-option="{}">
                                                Tahmid Hossen
                                            </option>
                                            <option value="user" data-hs-select-option="{}">
                                                Mamun Howladar
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="employeeDesignation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Select Designation
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="employeeDesignation" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="">Select Designation</option>
                                        <option>Web Developer</option>
                                        <option>Software Developer</option>
                                        <option>Lead Software Developer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveType" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Leave Type
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="leaveType" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="">Select leave type</option>
                                        <option>Annual (10)</option>
                                        <option>Sick Leave (9)</option>
                                        <option>Casual Leave (4)</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <div class="inline-block">
                                    <label for="startDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Start Date
                                    </label>

                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <input id="startDate" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">

                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <div class="inline-block">
                                    <label for="endDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        End Date
                                    </label>

                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <input id="endDate" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">

                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveDays" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Total Days
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <input id="leaveDays" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter how many Days">
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveReason" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Leave Reason
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <textarea id="leaveReason" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your valid reason..."></textarea>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveRemarks" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Remarks
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <textarea id="leaveRemarks" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your any leave remarks..."></textarea>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->

                        <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-leave-modal">
                                Cancel
                            </button>

                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#create-new-leave-modal">
                                Create a new Leave
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Card Section -->

        </div>
        <!-- End Body -->
    </div>
</div>
</div>

<!-- 07 Create Leave Modal -->



<!-- 08 Edit Leave Modal -->
<div id="edit-leave-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-4xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Update Employee Leave
            </h3>
            <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#edit-leave-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="p-4 overflow-y-auto">
            <!-- Card Section -->
            <div class="mx-auto"><!-- Card -->
                <div class="px-4 bg-white dark:bg-neutral-800">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                            Leave
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Manage your leave
                        </p>
                    </div>
                    <form>
                        <!-- Grid -->
                        <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

                            <div class="sm:col-span-3">
                                <label for="employeeLeave" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Select Employee
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="relative" id="employee-leave">
                                    <div class="relative hs-select">
                                        <select data-hs-select="{
                                        &quot;placeholder&quot;: &quot;Select Employee&quot;,
                                        &quot;hasSearch&quot;: true,
                                        &quot;searchPlaceholder&quot;: &quot;Search Employee&quot;,
                                        &quot;searchClasses&quot;: &quot;block w-full tvwcs sdjrs q8xeg border-neutral-500 focus:border-neutral-500 focus:ring-neutral-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 a5fil etaom&quot;,
                                        &quot;searchWrapperClasses&quot;: &quot;nf52k w30jw -mx-1 cbvwz vhz8h dark:bg-neutral-800&quot;,
                                        &quot;toggleTag&quot;: &quot;<button type=\&quot;button\&quot;><span data-icon></span><span class=\&quot;q9f8h dark:text-neutral-200 \&quot; data-title></span></button>&quot;,
                                        &quot;toggleClasses&quot;: &quot;block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600&quot;,
                                        &quot;dropdownClasses&quot;: &quot;apna3 r8726 a7srx p2xsq oe2wn w-full o7sec uf9bc nf52k border border-neutral-300 dark:border-neutral-700 jtemb shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] x35aa haqwf xv42z ghokw dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800&quot;,
                                        &quot;optionClasses&quot;: &quot;xvcp7 dark:hs-selected:bg-red-600 a5fil una0h w-full tvwcs q9f8h cursor-pointer q8xeg focus:outline-none focus:bg-gray-100 dark:text-neutral-300 hover:text-white hover:bg-red-700 dark:hover:bg-red-700 dark:focus:bg-neutral-800&quot;,
                                        &quot;optionTemplate&quot;: &quot;<div><div class=\&quot;flex items-center \&quot;><div class=\&quot;vy8kl \&quot; data-icon></div><div class=\&quot; dark:text-neutral-200 \&quot; data-title></div></div></div>&quot;,
                                        &quot;viewport&quot;: &quot;#hs-pro-create-new-user&quot;
                                      }" class="hidden" style="display: none;">
                                            <option value="">Choose</option>

                                            <option value="HR" data-hs-select-option="{}">
                                                Iqbal Mahmud
                                            </option>
                                            <option value="employee" data-hs-select-option="{}">
                                                Tahmid Hossen
                                            </option>
                                            <option value="user" data-hs-select-option="{}">
                                                Mamun Howladar
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="employeeDesignation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Select Designation
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="employeeDesignation" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="">Select Designation</option>
                                        <option>Web Developer</option>
                                        <option>Software Developer</option>
                                        <option>Lead Software Developer</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveType" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Leave Type
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="leaveType" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="">Select leave type</option>
                                        <option>Annual (10)</option>
                                        <option>Sick Leave (9)</option>
                                        <option>Casual Leave (4)</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <div class="inline-block">
                                    <label for="startDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Start Date
                                    </label>

                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <input id="startDate" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">

                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <div class="inline-block">
                                    <label for="endDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        End Date
                                    </label>

                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <input id="endDate" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">

                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveDays" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Total Days
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <input id="leaveDays" type="text" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter how many Days">
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveReason" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Leave Reason
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <textarea id="leaveReason" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your valid reason..."></textarea>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="leaveRemarks" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Remarks
                                </label>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-9">
                                <textarea id="leaveRemarks" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your any leave remarks..."></textarea>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->

                        <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#edit-leave-modal">
                                Cancel
                            </button>

                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#edit-leave-modal">
                                Update Employee Leave
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Card Section -->

        </div>
        <!-- End Body -->
    </div>
</div>
</div>

<!-- 08 Edit Leave Modal -->


<!-- 09 Manage Leave Modal -->

<div id="manage-leave-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-3xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <!-- Header -->
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    Manage Leave
                </h3>
                <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#manage-leave-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- End Header -->

            <div class="p-4 overflow-y-auto sm:p-5">
                <div class="mb-6 text-center">
                    <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                        Manage Leave
                    </h3>
                    <p class="text-gray-500 dark:text-neutral-500">
                        Manage Leave from admin or Project Manager
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-800">

                        <!-- List Group -->
                        <ul class="flex flex-col">
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Employee</span>
                                    <span>Md. Iqbal Mahmud</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Leave Type</span>
                                    <span>Annual Leave</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Appplied On</span>
                                    <span>Mar 31, 2024</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Start Date</span>
                                    <span>Mar 31, 2024</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>End Date</span>
                                    <span>Mar 31, 2024</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Total Days</span>
                                    <span>
                          <button type="button" class="block">
                            <span class="block px-6 py-2">
                              <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-check-fill" viewBox="0 0 16 16">
                                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5m9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5m-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                                </svg>
                                2 Days
                              </span>
                            </span>
                          </button>
                        </span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Leave Reason</span>
                                    <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">Family Emmergency</span>
                                </div>
                            </li>
                            <li class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class="flex items-center justify-between w-full">
                                    <span>Status</span>
                                    <span>

                          <button type="button" class="block">
                            <span class="block px-6 py-2">
                              <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                                Aprroved
                              </span>
                            </span>
                          </button>
                          <button type="button" class="block" >
                            <span class="block px-6 py-2">
                              <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-green-200">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                                Reject
                              </span>
                            </span>
                          </button>
                          <button type="button" class="block" >
                            <span class="block px-6 py-2">
                              <span class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-green-200">
                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg>
                                Pending
                              </span>
                            </span>
                          </button>

                        </span>
                                </div>
                            </li>
                        </ul>
                        <!-- End List Group -->

                    </div>
                    <!-- End Card -->


                </div>
            </div>

            <div class="flex items-center justify-end px-4 py-3 mt-5 border-t gap-x-2 dark:border-neutral-700">
                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border border-red-300 rounded-lg gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-red-800 dark:border-red-700 dark:text-neutral-300 dark:hover:bg-red-700 dark:focus:bg-red-700" data-hs-overlay="#manage-leave-modal">
                    Reject
                </button>

                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800" data-hs-overlay="#create-new-leave-modal">
                    Approve
                </button>
            </div>
        </div>
    </div>
</div>

<!-- 09 Manage Leave Modal -->


<!-- 10 Manage Leave Modal -->

<div id="delete-leave-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 md:max-w-2xl md:w-full md:mx-auto">
        <div class="relative flex flex-col overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="absolute top-2 end-2">
                <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#delete-leave-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-4 sm:p-10 overflow-y-auto">
                <div class="flex gap-x-4 md:gap-x-7">
                    <!-- Icon -->
                    <span class="flex-shrink-0 inline-flex justify-center items-center size-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
              <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </span>
                    <!-- End Icon -->

                    <div class="grow">
                        <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                            Are you sure?
                        </h3>
                        <p class="text-gray-500 dark:text-neutral-500">
                            This data will be deleted.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#delete-leave-modal">
                    No
                </button>

                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#delete-leave-modal">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>

<!-- 10 Manage Leave Modal -->




{{--11 Edit Attendance Modal--}}
<div id="edit-employee-attendance" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Edit Attendance
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#edit-employee-attendance">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="p-4 overflow-y-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                <div class="max-w-full mt-3">
                    <label for="employee" class="block text-sm font-medium mb-2 dark:text-white">Employee</label>
                    <div class="relative" id="employee">
                        <div class="relative hs-select">
                            <select data-hs-select="{
                                        &quot;placeholder&quot;: &quot;Select Employee&quot;,
                                        &quot;hasSearch&quot;: true,
                                        &quot;searchPlaceholder&quot;: &quot;Search Employee&quot;,
                                        &quot;searchClasses&quot;: &quot;block w-full tvwcs sdjrs q8xeg border-neutral-500 focus:border-neutral-500 focus:ring-neutral-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 a5fil etaom&quot;,
                                        &quot;searchWrapperClasses&quot;: &quot;nf52k w30jw -mx-1 cbvwz vhz8h dark:bg-neutral-800&quot;,
                                        &quot;toggleTag&quot;: &quot;<button type=\&quot;button\&quot;><span data-icon></span><span class=\&quot;q9f8h dark:text-neutral-200 \&quot; data-title></span></button>&quot;,
                                        &quot;toggleClasses&quot;: &quot;block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600&quot;,
                                        &quot;dropdownClasses&quot;: &quot;apna3 r8726 a7srx p2xsq oe2wn w-full o7sec uf9bc nf52k border border-neutral-300 dark:border-neutral-700 jtemb shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] x35aa haqwf xv42z ghokw dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800&quot;,
                                        &quot;optionClasses&quot;: &quot;xvcp7 dark:hs-selected:bg-red-600 a5fil una0h w-full tvwcs q9f8h cursor-pointer q8xeg focus:outline-none focus:bg-gray-100 dark:text-neutral-300 hover:text-white hover:bg-red-700 dark:hover:bg-red-700 dark:focus:bg-neutral-800&quot;,
                                        &quot;optionTemplate&quot;: &quot;<div><div class=\&quot;flex items-center \&quot;><div class=\&quot;vy8kl \&quot; data-icon></div><div class=\&quot; dark:text-neutral-200 \&quot; data-title></div></div></div>&quot;,
                                        &quot;viewport&quot;: &quot;#hs-pro-create-new-user&quot;
                                      }" class="hidden" style="display: none;">
                                <option value="">Choose</option>

                                <option value="HR" data-hs-select-option="{}">
                                    Iqbal Mahmud
                                </option>
                                <option value="employee" data-hs-select-option="{}">
                                    Tahmid Hossen
                                </option>
                                <option value="user" data-hs-select-option="{}">
                                    Mamun Howladar
                                </option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="max-w-full mt-3">
                    <label for="attendance-date" class="block text-sm font-medium mb-2 dark:text-white">Date</label>
                    <input type="date" id="attendance-date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                <div class="max-w-full mt-3">
                    <label for="attendance-checkin" class="block text-sm font-medium mb-2 dark:text-white">Check-in Time</label>
                    <input type="time" id="attendance-checkin" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="10:00">
                </div>
                <div class="max-w-full mt-3">
                    <label for="attendance-checkout" class="block text-sm font-medium mb-2 dark:text-white">Check-out Time</label>
                    <input type="time" id="attendance-checkout" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="18:00">
                </div>
            </div>

        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#edit-employee-attendance">
                Cancel
            </button>

            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#edit-employee-attendance">
                Update Attendance
            </button>
        </div>
        <!-- End Footer -->
    </div>
</div>
</div>
{{--11 Edit Attendance Modal--}}




{{-- Medium Modal --}}

<dialog id="mediumSizeModal" class="modal">
    <div class="modal-box p-0 w-11/12 max-w-5xl relative bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <form method="dialog" class="sticky top-0 right-0">
            <button class="absolute top-3 right-4 flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </form>
        <div class="" id="mediumSizeModalBody">

        </div>

    </div>
</dialog>

{{-- Medium Modal --}}


{{-- Medium Modal --}}

<dialog id="smallSizeModal" class="modal">
    <div class="modal-box p-0 md:max-w-2xl md:w-full relative bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <form method="dialog" class="sticky top-0 right-0">
            <button class="absolute top-3 right-4 flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </form>
        <div class="" id="smallSizeModalBody">

        </div>

    </div>
</dialog>

{{-- Medium Modal --}}




