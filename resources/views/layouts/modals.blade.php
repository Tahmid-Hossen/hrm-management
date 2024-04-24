
{{--02 Update User Modal--}}
<div id="update-user-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
<div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <!-- Header -->
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Update User
        </h3>
        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#update-user-modal">
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
        <div class="max-w-full mt-3">
            <label for="user-name" class="block text-sm font-medium mb-2 dark:text-white">User Name</label>
            <input type="user-name" id="user-name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe">
        </div>
        <div class="max-w-full mt-3">
            <label for="email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
            <input type="email" id="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="you@site.com">
        </div>
        <div class="max-w-full mt-3">
            <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">User Role</label>
            <div class="relative" id="user-role">
                <div class="relative hs-select">
                    <!-- Select -->
                    <select data-hs-select='{
                  "placeholder": "Select option...",
                  "toggleTag": "<button type=\"button\"></button>",
                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-gray-500 focus:ring-gray-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400",
                  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700",
                  "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-red-600 hover:bg-red-600 hover:text-neutral-200 dark:text-neutral-200 dark:focus:bg-neutral-800",
                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-600 dark:text-gray-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                }' class="hidden" style="display: none">
                        <option value="">Choose</option>
                        <option value="HR" data-hs-select-option="{}">HR</option>
                        <option value="employee" data-hs-select-option="{}">Employee</option>
                        <option value="user" data-hs-select-option="{}">User</option>
                    </select>
                    <!-- End Select -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Body -->

    <!-- Footer -->
    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#update-user-modal">
            Cancel
        </button>

        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#update-user-modal">
            Update User
        </button>
    </div>
    <!-- End Footer -->
</div>
</div>
</div>
{{--02 Update User Modal--}}

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


{{--04 Delete User Modal--}}
<div id="delete-user-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
      <div class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
        <div class="absolute top-2 end-2">
          <button type="button" class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#delete-user-modal">
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
          <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#delete-user-modal">
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
<div id="create-new-employee-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
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
                                        <input id="employeeFullName" name="full_name" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Maria">
                                    </div>
                                    <div>
                                        <label for="employeeId" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Employee Id
                                        </label>
                                        <input id="employeeId" name="employee_id" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="employeeEmail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Email
                                        </label>
                                        <input id="employee_email" type="email" name="email" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com">
                                    </div>
                                    <div>
                                        <label for="employeePassword" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Password
                                        </label>
                                        <input id="employeePassword" name="password" type="password" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter password">
                                    </div>
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
                                            <option selected="">Open this select menu</option>
                                            <option>Web Developer</option>
                                            <option>Software Developer</option>
                                            <option>Lead Software Developer</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Select Company
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
                                        <div>
                                            <label for="employeeEmmergencyPhone" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Emergency Contact Number
                                            </label>
                                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                            <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                                    <div>
                                        <label for="emergencyContactRelation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Emergency Contact Relation
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                        <input id="emergencyContactRelation" name="emergency_contact_relation" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter Name">
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
                                        <input id="institution_name_one" name="institution_name_one" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter institution name">
                                    </div>
                                    <div>
                                        <div>
                                            <label for="degree_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Select Degree Type
                                            </label>
                                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                            <select id="degree_one" name="degree_one" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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

                                            <input id="department_one" name="department_one" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter department">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                                    <div>
                                        <label for="passing_year_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                            Passing Year
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                        <input id="passing_year_one" name="passing_year_one" type="date" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                                    </div>
                                    <div>
                                        <div>
                                            <label for="result_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                                Result
                                            </label>
                                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                                            <input id="result_one" name="result_one" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
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
@isset($employee)
<div id="edit-employee-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]" data-hs-overlay-keyboard="false">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-4xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <!-- Header -->
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    Edit Employee
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#edit-employee-modal">
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
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                            Profile
                        </h2>
                        <p class="text-sm text-gray-600 dark:text-neutral-400">
                            Manage your name, password and account settings.
                        </p>
                    </div>
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Grid -->
                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                            <div class="sm:col-span-3">
                            <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Profile photo
                            </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="flex items-center gap-5">
                                <img class="inline-block size-16 rounded-full ring-2 ring-white dark:ring-neutral-900" src="https://preline.co/assets/img/160x160/img1.jpg" alt="Image Description">
                                <div class="flex gap-x-2">
                                    <div>
                                        <input type="file" name="profile_photo" value="{{ $employee->profile_photo }}" id="employee_photo" class="file-input file-input-bordered w-full max-w-xs" />
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <label for="employeeFullName" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Full name
                            </label>
                            <div class="hs-tooltip inline-block">
                                <button type="button" class="hs-tooltip-toggle ms-1">
                                    <svg class="inline-block size-3 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button>
                                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                                Enter Full Name
                                </span>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="employeeFullName" name="full_name" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->full_name }}">
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <label for="employeeEmail" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Email
                            </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <input id="employee_email" type="email" name="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->email }}">
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <label for="employeePassword" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Password
                            </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="space-y-2">
                                <input id="employeePassword" name="password" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->password }}">
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <label for="employeeId" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Employee Id
                            </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="space-y-2">
                                <input id="employeeId" name="employee_id" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->employee_id }}">
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="employeeJoiningDate" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Joining Date
                                </label>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="employeeJoiningDate" name="joining_date" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->joining_date }}">
                            </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="employeeDesignation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Company
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                    <div class="space-y-2">
                                        <select id="employeeDesignation" name="company_name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                            <option value="" disabled>Select Company</option>
                                            <option value="Nexdecade Technology" @if($employee->company_name == "Nexdecade Technology") selected @endif>Nexdecade Technology</option>
                                            <option value="M2M Communication" @if($employee->company_name == "M2M Communication") selected @endif>M2M Communication</option>
                                        </select>
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
                                <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected="" disabled>Open this select menu</option>
                                    <option value="Web Developer" @if($employee->designation == "Web Developer") selected @endif>Web Developer</option>
                                    <option value="Software Developer" @if($employee->designation == "Software Developer") selected @endif>Software Developer</option>
                                    <option value="Lead Software Developer" @if($employee->designation == "Lead Software Developer") selected @endif>Lead Software Developer</option>
                                </select>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="employeePhone" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Phone
                                </label>
                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="employeePhone" name="phone" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->phone }}">
                            </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <div class="inline-block">
                                    <label for="employeeEmmergencyPhone" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Emergency Contact Number
                                    </label>
                                    <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                </div>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <input id="employeeEmergencyPhone" name="emergency_contact" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emergency_contact }}">
                                </div>
                                </div>

                                {{-- End col --}}

                                <div class="sm:col-span-3">
                                    <div class="inline-block">
                                        <label for="emergencyContactRelation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Emergency Contact Relation
                                        </label>
                                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                    </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="sm:col-span-9">
                                    <div class="sm:flex">
                                        <input id="emergencyContactRelation" name="emergency_contact_relation" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emergency_contact_relation }}">
                                    </div>
                                    </div>
                                    <!-- End Col -->

                            <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label for="employeeBirthday" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Birthday
                                </label>
                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="employeeBirthday" name="birth_year" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->birth_year }}">
                            </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                                <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Gender
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="sm:flex">
                                    <label for="af-account-gender-checkbox" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="male" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" checked>
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span>
                                    </label>
                                    <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="female" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Female</span>
                                    </label>
                                    <label for="af-account-gender-checkbox-other" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="other" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other">
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Other</span>
                                    </label>
                                </div>
                            </div>
                            <!-- End Col -->


                            <div class="sm:col-span-3">
                                <label for="employeeAddress" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Present Address
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <textarea id="employeeAddress" name="present_address" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6">
                                    {{ $employee->present_address }}
                                </textarea>
                            </div>
                            <!-- End Col -->



                            <!-- End Col -->
                            <div class="sm:col-span-3">
                                <label for="employeePermanentAddress" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Permanent Address
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <textarea id="employeePermanentAddress" name="permanent_address" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6">
                                    {{ $employee->permanent_address }}
                                </textarea>
                            </div>
                            <!-- End Col -->
                            {{-- first Education Record --}}
                            <div class="sm:col-span-3">
                                <label for="instituationOne" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Instituation Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="institution_name_one" name="institution_name_one" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->institution_name_one }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="degreeType" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Degree Type
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="degree_one" name="degree_one" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="" disabled>Select Degree</option>
                                        <option value="SSC" @if($employee->degree_one == "SSC") selected @endif>SSC</option>
                                        <option value="HSC" @if($employee->degree_one == "HSC") selected @endif>HSC</option>
                                        <option value="BSC" @if($employee->degree_one == "BSC") selected @endif>BSC</option>
                                        <option value="MSC" @if($employee->degree_one == "MSC") selected @endif>MSC</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="department_one" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Department Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="department_one" name="department_one" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->department_one }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="passing_year_one" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Passing Year
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="passing_year_one" name="passing_year_one" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->passing_year_one }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="result_one" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Result
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="result_one" name="result_one" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->result_one }}">
                                </div>
                            </div>
                            <!-- End Col -->


                            {{-- 2nd education recored --}}
                            <div class="sm:col-span-3">
                                <label for="instituationOne" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Instituation Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="institution_name_two" name="institution_name_two" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->institution_name_two }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="employeeId" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Degree Type
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="degree_two" name="degree_two" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="" disabled>Select Degree</option>
                                        <option value="SSC" @if($employee->degree_two == "SSC") selected @endif>SSC</option>
                                        <option value="HSC" @if($employee->degree_two == "HSC") selected @endif>HSC</option>
                                        <option value="BSC" @if($employee->degree_two == "BSC") selected @endif>BSC</option>
                                        <option value="MSC" @if($employee->degree_two == "MSC") selected @endif>MSC</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="department_one" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Department Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="department_two" name="department_two" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->department_two }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="passing_year_two" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Passing Year
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="passing_year_two" name="passing_year_two" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->passing_year_two }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="result_two" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Result
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="result_two" name="result_two" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->result_two }}">
                                </div>
                            </div>
                            <!-- End Col -->



                            {{-- 3rd education recored --}}
                            <div class="sm:col-span-3">
                                <label for="instituationthree" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Instituation Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="institution_name_three" name="institution_name_three" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->institution_name_three }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="selectDegreeType" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Degree Type
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="degree_three" name="degree_three" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="" disabled>Select Degree</option>
                                        <option value="SSC" @if($employee->degree_three == "SSC") selected @endif>SSC</option>
                                        <option value="HSC" @if($employee->degree_three == "HSC") selected @endif>HSC</option>
                                        <option value="BSC" @if($employee->degree_three == "BSC") selected @endif>BSC</option>
                                        <option value="MSC" @if($employee->degree_three == "MSC") selected @endif>MSC</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="department_three" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Department Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="department_three" name="department_three" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->department_three }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="passing_year_three" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Passing Year
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="passing_year_three" name="passing_year_three" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->passing_year_three }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="result_three" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Result
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="result_three" name="result_three" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->result_three }}">
                                </div>
                            </div>
                            <!-- End Col -->


                            {{-- 4th education recored --}}
                            <div class="sm:col-span-3">
                                <label for="instituationFour" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Instituation Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="institution_name-four" name="institution_name_four" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->institution_name_four }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="selectDegreeType" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Degree Type
                                </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <select id="degree_four" name="degree_four" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected="" disabled>Select Degree</option>
                                        <option value="SSC" @if($employee->degree_four == "SSC") selected @endif>SSC</option>
                                        <option value="HSC" @if($employee->degree_four == "HSC") selected @endif>HSC</option>
                                        <option value="BSC" @if($employee->degree_four == "BSC") selected @endif>BSC</option>
                                        <option value="MSC" @if($employee->degree_four == "MSC") selected @endif>MSC</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="department_four" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Department Name
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="department_four" name="department_four" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->department_four }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="passing_year_three" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Passing Year
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="passing_year_four" name="passing_year_four" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->passing_year_four }}">
                                </div>
                            </div>
                            <!-- End Col -->

                            <div class="sm:col-span-3">
                                <label for="result_four" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Result
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <div class="space-y-2">
                                    <input id="result_four" name="result_four" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->result_four }}">
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Grid -->
                        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#edit-employee-modal">
                                Cancel
                            </button>
                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Update employee
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
</div> else
<p>No employee data found.</p>
@endisset


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
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#assign-role-modal">
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



















{{--Sample Modal--}}


{{--<button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-small-modal">--}}
{{--    Small--}}
{{--</button>--}}



{{--<button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-medium-modal">--}}
{{--    Medium--}}
{{--</button>--}}



{{--<button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-large-modal">--}}
{{--    Large--}}
{{--</button>--}}


{{--<button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-static-backdrop-modal">--}}
{{--    Open modal--}}
{{--</button>--}}

<div id="hs-static-backdrop-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
<div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <!-- Header -->
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Modal title
        </h3>
        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-static-backdrop-modal">
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
        <p class="mt-1 text-gray-800 dark:text-neutral-400">
            This is a wider card with supporting text below as a natural lead-in to additional content.
        </p>
    </div>
    <!-- End Body -->

    <!-- Footer -->
    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-static-backdrop-modal">
            Close
        </button>
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
            Save changes
        </button>
    </div>
    <!-- End Footer -->
</div>
</div>
</div>




<div id="hs-medium-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Modal title
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-medium-modal">
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
            <p class="mt-1 text-gray-800 dark:text-neutral-400">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
        </div>
        <!-- End Body -->


        <!-- Footer -->
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-medium-modal">
                Close
            </button>
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
        <!-- End Footer -->

    </div>
</div>
</div>


<div id="hs-large-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Modal title
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-large-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4 overflow-y-auto">
            <p class="mt-1 text-gray-800 dark:text-neutral-400">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-large-modal">
                Close
            </button>
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
    </div>
</div>
</div>



<div id="hs-small-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Modal title
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-small-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4 overflow-y-auto">
            <p class="mt-1 text-gray-800 dark:text-neutral-400">
                This is a wider card with supporting text below as a natural lead-in to additional content.
            </p>
        </div>
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" data-hs-overlay="#hs-small-modal">
                Close
            </button>
            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                Save changes
            </button>
        </div>
    </div>
</div>
</div>

{{--Sample Modal--}}






