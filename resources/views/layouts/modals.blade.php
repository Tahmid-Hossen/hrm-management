




{{--01 Update User Modal--}}
<div id="create-new-user-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
<div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
<div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <!-- Header -->
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
            Create User
        </h3>
        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#create-new-user-modal">
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
            <input type="user-name" id="user-name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50  disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe">
        </div>
        <div class="max-w-full mt-3">
            <label for="email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
            <input type="email" id="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="you@site.com">
        </div>
        <div class="max-w-full mt-3">
            <label class="block text-sm mb-2 dark:text-white">Password</label>
            <div class="relative">
                <input id="hs-toggle-password" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter password" value="12345qwerty">
                <button type="button" data-hs-toggle-password='{
    "target": "#hs-toggle-password"
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
        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-user-modal">
            Cancel
        </button>

        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" data-hs-overlay="#create-new-user-modal">
            Create User
        </button>
    </div>
    <!-- End Footer -->
</div>
</div>
</div>
{{--01 Update User Modal--}}


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
                        <div class="mb-8">
                            <h2 class="text-xl font-bold text-gray-800 dark:text-neutral-200">
                                Profile
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                Manage your name, password and account settings.
                            </p>
                        </div>
                        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <button type="file" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                                <polyline points="17 8 12 3 7 8"/>
                                                <line x1="12" x2="12" y1="3" y2="15"/>
                                            </svg>
                                            <input type="file" name="profile_photo" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                                                file:bg-gray-50 file:border-0
                                                file:me-4
                                                file:py-3 file:px-4
                                                dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                            </button>
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
                                    <input id="employeeFullName" name="full_name" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Maria">
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
                                <input id="employee_email" type="email" name="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com">
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
                                    <input id="employeePassword" name="password" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter current password">
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
                                    <input id="employeeId" name="employee_id" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001">
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
                                    <input id="employeeJoiningDate" name="joining_date" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
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
                                        <option selected="">Open this select menu</option>
                                        <option>Web Developer</option>
                                        <option>Software Developer</option>
                                        <option>Lead Software Developer</option>
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
                                    <input id="employeePhone" name="phone" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
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
                                    <input id="employeeBirthday" name="birth_year" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
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
                                        <input type="radio" name="gender" value="Male" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" checked>
                                        <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span>
                                        </label>
                                        <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <input type="radio" name="gender" value="Female" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
                                        <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Female</span>
                                        </label>
                                        <label for="af-account-gender-checkbox-other" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <input type="radio" name="gender" value="Other" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other">
                                        <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Other</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-3">
                                <label for="employeeAddress" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Address
                                </label>
                                </div>
                                <!-- End Col -->
                                <div class="sm:col-span-9">
                                <textarea id="employeeAddress" name="address" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Type your address..."></textarea>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Grid -->
                            <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-employee-modal">
                                    Cancel
                                </button>
                                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    Create a new employee
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
{{-- <div id="edit-employee-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
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
                                        <button type="file" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                            <polyline points="17 8 12 3 7 8"/>
                                            <line x1="12" x2="12" y1="3" y2="15"/>
                                        </svg>
                                        <input type="file" name="profile_photo" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                                            file:bg-gray-50 file:border-0
                                            file:me-4
                                            file:py-3 file:px-4
                                            dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                        </button>
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
                            <input id="employee_email" type="email" name="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com">
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
                                <input id="employeePassword" name="password" type="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter current password">
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
                                <input id="employeeId" name="employee_id" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001">
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
                                <input id="employeeJoiningDate" name="joining_date" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
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
                                    <option selected="">Open this select menu</option>
                                    <option>Web Developer</option>
                                    <option>Software Developer</option>
                                    <option>Lead Software Developer</option>
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
                                <input id="employeePhone" name="phone" type="text" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
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
                                <input id="employeeBirthday" name="birth_year" type="date" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
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
                                    <input type="radio" name="gender" value="Male" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" checked>
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span>
                                    </label>
                                    <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="Female" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female">
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Female</span>
                                    </label>
                                    <label for="af-account-gender-checkbox-other" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="radio" name="gender" value="Other" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other">
                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Other</span>
                                    </label>
                                </div>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-3">
                            <label for="employeeAddress" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Address
                            </label>
                            </div>
                            <!-- End Col -->
                            <div class="sm:col-span-9">
                            <textarea id="employeeAddress" name="address" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Type your address..."></textarea>
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
</div> --}}
{{--06 update Employee Modal--}}




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
