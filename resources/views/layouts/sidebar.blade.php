@php
    $ativeClass='active text-white font-semibold bg-red-600 dark:text-white active:text-white active:font-semibold active:bg-red-600 dark:active:text-white';
    $ativeSubClass=' text-white font-semibold bg-red-600 dark:text-white active:text-white active:font-semibold active:bg-red-600 dark:active:text-white hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600 dark:hs-accordion-active:text-white';
@endphp
<div
    id="application-sidebar"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-neutral-800 dark:border-neutral-700 dark:hs-overlay-backdrop-open:bg-neutral-900/90">
    <div class="px-6">
        <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">
            <img src="https://ajw.hbq.mybluehost.me/en/wp-content/uploads/2020/10/nexLogo_inWeb.png" alt="Nexdecade Logo"></a>
    </div>

    <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>

        <ul class="space-y-1.5">
            <!-- List of Sidebar items -->
            @php $isActive = request()->is('/') ? 'true' : 'false'; @endphp
            <li>
                <a
                    class="{{$isActive=='true' ? $ativeClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 hover:text-white dark:hover:bg-red-600 dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="{{route('dashboard')}}">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <!-- @php $isSubActive = request()->is('employee-profile') ? 'true' : 'false'; @endphp
            <li>
                <a
                    class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                    href="{{route('employee-profile.index')}}">
                    Employee Profile
                </a>
            </li> -->

             <!-- @php $isSubActive = request()->is('manage-leave','manage-leave/*') ? 'true' : 'false'; @endphp
            <li>
                <a
                    class="{{ $isSubActive == 'true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                    href="{{route('leave.index')}}">
                    Manage Leave
                </a>
            </li> -->


            @php $isActive = request()->is('users', 'users/*', 'roles', 'roles/*' ) ? 'true' : 'false'; @endphp
            @if(userCan('user.view'))
            <li class="hs-accordion {{$isActive =='true' ? 'active' : ''}}" id="staff-accordion">
                <button
                    type="button"
                    class="{{$isActive=='true' ? $ativeClass : ''}} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Manage-User

                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="staff-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" {{$isActive =='true' ? 'style=display:block;' : ''}}>
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        @php $isSubActive = request()->is('users') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="{{route('users.index')}}">
                                User
                            </a>
                        </li>
                        @php $isSubActive = request()->is('roles') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="{{route('roles.index')}}">
                                Role
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif
            @php $isActive = request()->is('employees', 'employees/*') ? 'true' : 'false'; @endphp
            @if(userCan('user.view'))
            <li>
                <a
                    class="{{$isActive=='true' ? $ativeClass : ''}} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="{{route('employees.index')}}">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                    Employee
                </a>
            </li>
            @endif

            @php $isActive = request()->is('set-salary', 'set-salary/*', 'payslip', 'payslip/*') ? 'true' : 'false'; @endphp
            @if(userCan('payroll.view'))
            <li class="hs-accordion {{$isActive=='true' ? 'active' : ''}}" id="payroll-accordion">
                <button
                    type="button"
                    class="{{$isActive=='true' ? $ativeClass : ''}} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pass" viewBox="0 0 16 16">
                        <path d="M5.5 5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1z"/>
                        <path d="M8 2a2 2 0 0 0 2-2h2.5A1.5 1.5 0 0 1 14 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-13A1.5 1.5 0 0 1 3.5 0H6a2 2 0 0 0 2 2m0 1a3 3 0 0 1-2.83-2H3.5a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-1.67A3 3 0 0 1 8 3"/>
                    </svg>
                    Payroll

                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="payroll-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" {{$isActive =='true' ? 'style=display:block;' : ''}}>
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        @php $isSubActive = request()->is('set-salary') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="set-salary.html">
                                Set Salary
                            </a>
                        </li>
                        @php $isSubActive = request()->is('payslip') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="payslip.html">
                                Payslip
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            @endif

            @php $isActive = request()->is('timesheet', 'timesheet/*',  'markattendance','markattendance/*','bulkattendance','bulkattendance/*') ? 'true' : 'false'; @endphp
            @if(userCan('attendence.view'))
            <li class="hs-accordion {{$isActive=='true' ? 'active' : ''}}" id="timesheet-accordion">
                <button
                    type="button"
                    class="{{$isActive=='true' ? $ativeClass : ''}} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                        <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z"/>
                        <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1"/>
                    </svg>
                    Timesheet

                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="timesheet-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" {{$isActive =='true' ? 'style=display:block;' : ''}}>
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        @php $isSubActive = request()->is('timesheet', 'timesheet/*') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{ $isSubActive == 'true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="timesheet.html">
                                Timesheet
                            </a>
                        </li>

                        @php $isSubActive = request()->is('markattendance','markattendance/*','bulkattendance','bulkattendance/*') ? 'true' : 'false'; @endphp
                        <!-- <li>
                            <a
                                class="{{ $isSubActive == 'true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="attendence.html">
                                Attendence
                            </a>
                        </li> -->
                        <li class="hs-accordion {{$isSubActive=='true' ? 'active' : ''}}" id="attendance-accordion">
                            <button
                                type="button"
                                class="{{$isSubActive=='true' ? $ativeClass : ''}} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                                Attendance

                                <svg
                                    class="hidden hs-accordion-active:block ms-auto size-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6" />
                                </svg>

                                <svg
                                    class="block hs-accordion-active:hidden ms-auto size-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </button>

                            <div
                                id="attendance-accordion-child"
                                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" {{$isActive =='true' ? 'style=display:block;' : ''}}>
                                <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                                    @php $isSubActive = request()->is('markattendance', 'markattendance/*') ? 'true' : 'false'; @endphp
                                    <li>
                                        <a
                                            class="{{ $isSubActive == 'true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                            href="{{route('attendance.mark-attendance.index')}}">
                                            Mark Attendance
                                        </a>
                                    </li>
                                    @php $isSubActive = request()->is('bulkattendance','bulkattendance/*') ? 'true' : 'false'; @endphp
                                    <li>
                                        <a
                                            class="{{ $isSubActive == 'true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                            href="{{route('attendance.bulk-attendance.index')}}">
                                            Bulk Attendance
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
  
            {{-- Setting implementation  --}}
            <li class="hs-accordion {{$isActive=='true' ? 'active' : ''}}" id="payroll-accordion">
                <button
                    type="button"
                    class="{{$isActive=='true' ? $ativeClass : ''}} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                    <i class="fa-solid fa-gear"></i>
                    Settings
                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="payroll-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" {{$isActive =='true' ? 'style=display:block;' : ''}}>
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        @php $isSubActive = request()->is('set-salary') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="{{ route('department.index') }}">
                                Department
                            </a>
                        </li>
                        @php $isSubActive = request()->is('payslip') ? 'true' : 'false'; @endphp
                        <li>
                            <a
                                class="{{$isSubActive=='true' ? $ativeSubClass : ''}} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="{{ route('designation.index') }}">
                                Designation
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            
            @php $isActive = request()->is('inventory', 'inventory/*') ? 'true' : 'false'; @endphp
            <!-- <li>
                <a
                    class="{{ $isActive == 'true' ? $ativeClass : ''}} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="inventory.html">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="10" r="3"></circle>
                        <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                    </svg>
                    Inventory
                </a>
            </li>

            <li class="hs-accordion" id="account-accordion">
                <button
                    type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none ">
                    <svg
                        class="flex-shrink-0 mt-0.5 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="18" cy="15" r="3" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                        <path d="m21.7 16.4-.9-.3" />
                        <path d="m15.2 13.9-.9-.3" />
                        <path d="m16.6 18.7.3-.9" />
                        <path d="m19.1 12.2.3-.9" />
                        <path d="m19.6 18.7-.4-1" />
                        <path d="m16.8 12.3-.4-1" />
                        <path d="m14.3 16.6 1-.4" />
                        <path d="m20.7 13.8 1-.4" />
                    </svg>
                    Account

                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="account-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->

            <!-- <li class="hs-accordion" id="projects-accordion">
                <button
                    type="button"
                    class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-white hs-accordion-active:font-semibold hs-accordion-active:bg-red-600  text-sm text-black rounded-lg hover:bg-red-600  dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:hs-accordion-active:text-white dark:focus:outline-none">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                    Projects

                    <svg
                        class="hidden hs-accordion-active:block ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m18 15-6-6-6 6" />
                    </svg>

                    <svg
                        class="block hs-accordion-active:hidden ms-auto size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </button>

                <div
                    id="projects-accordion-child"
                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden">
                    <ul class="flex flex-col gap-1 pt-2 ml-6 ps-2">
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                        <li>
                            <a
                                class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none "
                                href="#">
                                Link 1
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            @php $isActive = request()->is('calendar', 'calendar/*') ? 'true' : 'false'; @endphp
            <li>
                <a
                    class="{{ $isActive == 'true' ? $isActive : ''}} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                        <line x1="16" x2="16" y1="2" y2="6" />
                        <line x1="8" x2="8" y1="2" y2="6" />
                        <line x1="3" x2="21" y1="10" y2="10" />
                        <path d="M8 14h.01" />
                        <path d="M12 14h.01" />
                        <path d="M16 14h.01" />
                        <path d="M8 18h.01" />
                        <path d="M12 18h.01" />
                        <path d="M16 18h.01" />
                    </svg>
                    Calendar
                </a>
            </li>
            <li>
                <a
                    class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-black rounded-lg hover:bg-red-600 dark:hover:bg-red-600 hover:text-white dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    href="#">
                    <svg
                        class="flex-shrink-0 size-4"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                    </svg>
                    Documentation
                </a>
            </li> -->

            <!-- List of Sidebar items -->
        </ul>
    </nav>
</div>
