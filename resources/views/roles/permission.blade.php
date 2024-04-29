@extends('layouts.app')
@section('title', 'User Permissions')

@section('pageTitle', 'User Permissions')
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
            User Permissions
        </li>
    </ol>
@endsection

@section('content')

    <div class="flex flex-col p-4 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
        <h1 class="pb-2">
            <span class="text-lg font-medium text-gray-800 dark:text-white">Permission for the role of</span>
            <b class="text-xl italic text-red-600 uppercase dark:text-red-600">{{ $role->name }} :</b>
        </h1>
        <div
            class="w-full gap-3 py-4 border divide-x rounded-md divide-neutral-200 dark:divide-neutral-700 border-neutral-200 dark:border-neutral-700">
            @foreach ($categoriWisePermission as $key => $permission)
                <button type="button" onclick="scrollToSection('section{{ $key }}')"
                    class="px-2 py-0 text-sm font-medium text-gray-800 dark:text-white hover:text-red-600 dark:hover:text-red-600">{{ ucfirst($key) }}</button>
            @endforeach

            <!-- <button type="button" onclick="scrollToSection('sectionusers')" class="px-2 py-0 text-sm font-medium">Super Admin</button>
                        <button type="button" onclick="scrollToSection('sectionproducts')" class="px-2 py-0 text-sm font-medium">Manager</button>
                        <button type="button" onclick="scrollToSection('sectionroles')" class="px-2 py-0 text-sm font-medium">HR</button>
                        <button type="button" onclick="scrollToSection('sectioncategories')" class="px-2 py-0 text-sm font-medium">Team Lead</button>
                        <button type="button" onclick="scrollToSection('sectionsuppliers')" class="px-2 py-0 text-sm font-medium">User</button> -->
        </div>
        <form action="{{ route('permission.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid  rounded-[5px] gap-x-10 gap-y-4">
                @foreach ($categoriWisePermission as $key => $permission)
                    @php
                        $i = 0;
                        $n = count($permission);
                        foreach ($permission as $item) {
                            if (in_array($item->id, $existingPermissionsIds)) {
                                $i++;
                            }
                        }
                    @endphp
                    <div class="py-4" id="section{{ $key }}">
                        <div
                            class="flex flex-col p-4 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Manage {{ $key }}
                                    <span class="text-sm text-gray-500 text-medium">(permission)</span>
                                </h3>
                                <label
                                    class="flex items-center justify-between p-2 rounded-md cursor-pointer label gap-y-6 hover:bg-red-600 dark:hover:bg-red-600 hover:text-white">
                                    <span class="text-gray-800 label-text hover:text-white dark:text-white ">Select
                                        All</span>
                                    <input type="checkbox" name="all" value="0"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-teal-600 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-teal-500 dark:checked:border-teal-500 dark:focus:ring-offset-teal-800 checkbox checkbox-sm checkbox-info ml-2 selectAllCheckbox"
                                        data-section="{{ $key }}" {{ $i == $n ? 'checked' : '' }}>
                                </label>
                            </div>
                            <hr class="my-2">
                            @foreach ($permission as $item)
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-6 gap-y-6 ">
                                    <div class="col-span-3">
                                        <label
                                            class="flex items-center justify-between p-2 rounded-md cursor-pointer label gap-y-6 hover:bg-red-600 hover:text-white">
                                            <span
                                                class="text-gray-800 label-text hover:text-white dark:text-white">{{ $item->label }}</span>
                                            <input type="checkbox" name="permissionId[]" value="{{ $item->id }}"
                                                class="shrink-0 mt-0.5 border-gray-200 rounded text-teal-600 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-teal-500 dark:checked:border-teal-500 dark:focus:ring-offset-teal-800 checkbox checkbox-sm checkbox-info ml-2 permissionCheckbox"
                                                {{ in_array($item->id, $existingPermissionsIds) ? 'checked' : '' }}>
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <div class="relative flex items-center justify-end col-span-3 gap-2 mt-8 mb-0">
                    <div class="relative flex items-center justify-center mb-3 transition duration-150 ease-in-out rounded-md"
                        role="group">
                        <button type="submit"
                            class="inline-flex items-center text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 mr-[-8px] py-2 px-6"
                            data-te-ripple-init data-te-ripple-color="light">
                            Update


                        </button>
                        <div class="inline-flex z-10 bg-gray-200 p-2 text-sm w-8 h-8 rounded-[50%] items-center justify-center leading-normal text-slate-900  transition duration-150 ease-in-out hover:bg-gray-300 focus:outline-none focus:ring-0 "
                            data-te-ripple-init data-te-ripple-color="light">
                            Or
                        </div>
                        <a href="{{ url('/roles') }}"
                            class="inline-flex items-center ml-[-8px] px-6 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Cancel
                        </a>
                        <button type="reset"
                            class="inline-flex items-center px-6 py-2 ml-4 text-sm font-semibold text-red-600 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-red-600 dark:hover:border-red-600 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-te-ripple-init data-te-ripple-color="light">
                            Reset
                        </button>


                    </div>
                </div>


        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select All checkboxes
            const selectAllCheckboxes = document.querySelectorAll('.selectAllCheckbox');

            // Permission checkboxes
            const permissionCheckboxes = document.querySelectorAll('.permissionCheckbox');

            // Add event listener to each Select All checkbox
            selectAllCheckboxes.forEach(function(selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function() {
                    const isChecked = this.checked;
                    const sectionId = this.getAttribute('data-section');

                    // Set the state of permission checkboxes within the corresponding section
                    permissionCheckboxes.forEach(function(checkbox) {
                        if (checkbox.closest(`#section${sectionId}`)) {
                            checkbox.checked = isChecked;
                        }
                    });
                });
            });
        });
    </script>

@endsection
