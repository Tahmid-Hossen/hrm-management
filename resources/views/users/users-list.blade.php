@extends('layouts.app')
@section('title', 'Manage Users')
@section('pageTitle', 'Manage Users')
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
            Users
        </li>
    </ol>
@endsection
@section('additionalButton')

    <div class="inline-block hs-tooltip">
        <a href={{ route('users.index') }}
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 gap-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
            </svg>
            Grid View
            <span
                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                role="tooltip">
                Grid View
            </span>
        </a>
    </div>

    <div class="inline-block hs-tooltip">
        <button type="button" data-hs-overlay="#create-new-user-modal"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-teal-700 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800 gap-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                <path
                    d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
            </svg>
            New User
            <span
                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                role="tooltip">
                Create New User
            </span>
        </button>
    </div>


@endsection
@section('content')
    <div class="loader"></div>
    <div id="loader-overlay"></div>

    @if (session('success'))
        <script>
            $(document).ready(function() {
                toastr.success("{{ session('success') }}", "Congratulation!");
            });
        </script>
    @endif


    <div class="mt-4">
        {{-- <div class="mt-4">
            <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
                <div class="p-2">
                    <div class="grid items-end justify-between grid-cols-1 gap-4 mt-2 sm:grid-cols-3 lg:gap-6">

                        <div>
                            <label for="search-users"
                                class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Search Users
                            </label>
                            <input id="search-users" name="icon"
                                class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Search users" />
                        </div>

                        <div>
                            <label for="select-filter"
                                class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Filter
                            </label>

                            <select id="select-filter" name="select-filter"
                                class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected="">Active </option>
                                <option value="SSC">In Active</option>
                            </select>
                        </div>
                        <div>
                            <div class="flex flex-wrap justify-between gap-2">
                                <div>
                                    <!-- Search button -->
                                    <div class="inline-block hs-tooltip">
                                        <a type="button" href="/" class="btn-teal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg>
                                            <span
                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                role="tooltip">
                                                Search
                                            </span>
                                        </a>
                                    </div>
                                    <!-- Reset button -->
                                    <div class="inline-block hs-tooltip">
                                        <a type="button" href="/" class="btn-red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                            </svg>
                                            <span
                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                role="tooltip">
                                                Reset
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-center align-middle gap-x-2">
                                    <div>
                                        <h5 class="text-sm text-gray-800 dark:text-white">Action: </h5>
                                    </div>
                                    <div class="inline-block hs-tooltip">
                                        <button type="button" data-hs-overlay="#create-new-employee-modal"
                                            class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 gap-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-earmark-arrow-up"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z" />
                                                <path
                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                            </svg>
                                            <span
                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                role="tooltip">
                                                Import
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="mt-4">
            <div
                class="flex flex-col p-2 border rounded-lg border-neutral-200 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="w-full p-1.5 align-middle">
                        <div class="overflow-x-auto">
                            <table id="example" class="w-full display hover divide-neutral-200 dark:divide-neutral-700">
                                <thead class="">
                                    <tr class="dark:hover:bg-neutral-800">
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            NAME
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            EMAIL
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            User Role
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Is New User
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Is Active
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                                    @foreach ($users as $user)
                                        <tr class="cursor-pointer text-start dark:hover:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $user->name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $user->email }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $user->roles[0]->name ?? '' }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $user->is_new_user }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $user->is_active }}
                                            </td>

                                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                                <div class="flex gap-3">
                                                    <div class="inline-block hs-tooltip">
                                                        <a type="button" data-hs-overlay="#update-user-modal"
                                                            data-user-id="{{ $user->id }} type="button"
                                                            class="editUserBtn hs-tooltip-toggle btn-edit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                            </svg>
                                                            <span
                                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                role="tooltip">
                                                                Edit User
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="inline-block hs-tooltip">
                                                        <a href="{{ route('users.resetPassword', $user->id) }}"
                                                            onclick="return confirm('Are you sure, want to reset password?');"
                                                            type="button" class="hs-tooltip-toggle btn-red">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-key-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                                            </svg>
                                                            <span
                                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                role="tooltip">
                                                                Reset Password
                                                            </span>
                                                        </a>
                                                    </div>

                                                    <div class="inline-block hs-tooltip">
                                                        <a href="{{ route('users.delete', $user->id) }}"
                                                            onclick="return confirm('Are you sure, want to delete?');"
                                                            type="button" class="hs-tooltip-toggle btn-red">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-person-x"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                                                <path
                                                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                                                            </svg>
                                                            <span
                                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                role="tooltip">
                                                                Delete
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- create User Modal -->
    <div id="create-new-user-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard='false'">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <!-- Header -->
                <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Create User
                    </h3>
                    <button type="button"
                        class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600"
                        data-hs-overlay="#create-new-user-modal">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="p-4 overflow-y-auto">
                    <form method="POST" id="createUserSubmit">
                        <div class="max-w-full mt-3">
                            <label for="select-user" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">
                                Choose a user
                            </label>
                            <div class="relative" id="select-user">
                                <div class="relative hs-select ">
                                    <select
                                        data-hs-select="{
                                    &quot;placeholder&quot;: &quot;Select User&quot;,
                                    &quot;hasSearch&quot;: true,
                                    &quot;searchPlaceholder&quot;: &quot;Search User&quot;,
                                    &quot;searchClasses&quot;: &quot;block w-full tvwcs sdjrs q8xeg border-neutral-500 focus:border-neutral-500 focus:ring-neutral-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 a5fil etaom&quot;,
                                    &quot;searchWrapperClasses&quot;: &quot;nf52k w30jw -mx-1 cbvwz vhz8h dark:bg-neutral-800&quot;,
                                    &quot;toggleTag&quot;: &quot;<button type=\&quot;button\&quot;><span data-icon></span><span class=\&quot;q9f8h dark:text-neutral-200 \&quot; data-title></span></button>&quot;,
                                    &quot;toggleClasses&quot;: &quot;block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600&quot;,
                                    &quot;dropdownClasses&quot;: &quot;apna3 r8726 a7srx p2xsq oe2wn w-full o7sec uf9bc nf52k border border-neutral-300 dark:border-neutral-700 jtemb shadow-[0_10px_40px_10px_rgba(0,0,0,0.08)] x35aa haqwf xv42z ghokw dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800&quot;,
                                    &quot;optionClasses&quot;: &quot;xvcp7 dark:hs-selected:bg-red-600 a5fil una0h w-full tvwcs q9f8h cursor-pointer q8xeg focus:outline-none focus:bg-gray-100 dark:text-neutral-300 hover:text-white hover:bg-red-700 dark:hover:bg-red-700 dark:focus:bg-neutral-800&quot;,
                                    &quot;optionTemplate&quot;: &quot;<div><div class=\&quot;flex items-center \&quot;><div class=\&quot;vy8kl \&quot; data-icon></div><div class=\&quot; dark:text-neutral-200 \&quot; data-title></div></div></div>&quot;,
                                    &quot;viewport&quot;: &quot;#hs-pro-create-new-user&quot;
                                    }"
                                        class="hidden" style="display: none;">
                                        <option value="">Choose</option>

                                        <option value="HR">
                                            Iqbal Mahmud
                                        </option>
                                        <option value="employee">
                                            Tahmid Hossen
                                        </option>
                                        <option value="user">
                                            Mamun Howladar
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-name"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">User Name</label>
                            <input type="user-name" id="user-name"
                                class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="John Doe" name="name" required>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">User Role</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select
                                        class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        name="role" required>
                                        <option value="">Choose</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" data-hs-select-option="{}">
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mt-3">
                            <label for="user-role"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Select Company</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select
                                        class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        name="company" required>
                                        <option value="">Choose</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" data-hs-select-option="{}">
                                                {{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Email</label>
                            <input type="email" id="email"
                                class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com" name="email" required>

                        </div>


                        <!-- Footer -->
                        <div class="flex items-center justify-end px-4 py-3 gap-x-2 dark:border-neutral-700">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                data-hs-overlay="#create-new-user-modal">
                                Cancel
                            </button>
                            <button id="modal-close" type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Create User
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Body -->

            </div>
        </div>
    </div>




    <!-- //Edit User Modal Start -->
    <div id="update-user-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="
        false">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="flex flex-col w-full bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <!-- Header -->
                <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                    <h3 class="font-bold text-gray-800 dark:text-white">
                        Update User
                    </h3>
                    <button type="button"
                        class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600"
                        data-hs-overlay="#update-user-modal">
                        <span class="sr-only">Close</span>
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- End Header -->

                <!-- Body -->

                <form id="editUserForm">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="p-4 overflow-y-auto">
                        <input type="hidden" id="edituserId" name="edituserId">
                        <div class="max-w-full mt-3">
                            <label for="user-name"
                                class="block mb-2 text-sm font-semibold text-gray-800 dark:text-white">User Name</label>
                            <input type="user-name" id="edituserName"
                                class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="John Doe" name="edituserName">
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role"
                                class="block mb-2 text-sm font-semibold text-gray-800 dark:text-white">User Role</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserRole"name="edituserRole" required
                                        class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role"
                                class="block mb-2 text-sm font-semibold text-gray-800 dark:text-white">Select
                                Company</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserCompany"
                                        class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        name="edituserCompany" required>

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role"
                                class="block mb-2 text-sm font-semibold text-gray-800 dark:text-white">Activity
                                Status</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserIsActive"
                                        class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        name="edituserIsActive" required>

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>


                        <div class="max-w-full mt-3">
                            <label for="email"
                                class="block mb-2 text-sm font-semibold text-gray-800 dark:text-white">Email</label>
                            <input type="email" id="edituserEmail" name="edituserEmail"
                                class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="you@site.com">
                        </div>

                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                        <button type="button"
                            class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            data-hs-overlay="#update-user-modal">
                            Cancel
                        </button>

                        <button id="edit-modal-close" type="submit"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Update User
                        </button>
                    </div>

                </form>
                <!-- End Footer -->
            </div>
        </div>
    </div>
    <!-- //Edit User Modal End -->




@endsection

@section('scripts')
    <script>
        const modalClose = document.querySelector('#modal-close');
        const editModalClose = document.querySelector('#edit-modal-close');

        $(document).ready(function() {

            $(document).on('submit', '#createUserSubmit', function(e) {
                e.preventDefault();

                $('#modal-close').text('Processing...');

                // Get the CSRF token value from the meta tag
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                // AJAX request
                $.ajax({
                    method: 'post',
                    url: "{{ route('users.store') }}",
                    data: $(this).serialize(),
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        $('#modal-close').text('Create User');
                        console.log(response);
                        if (response && response.status === 200) {
                            // Close the modal
                            console.log('called');
                            // Trigger close event on the modal

                            modalClose.addEventListener('click', () => {
                                HSOverlay.close('#create-new-user-modal');
                            });

                            toastr.success('Successfully created user', 'Congratulation!');
                            window.location.reload();

                            // setTimeout(function () {
                            //     window.location.reload();
                            // }, 300);

                        } else {
                            console.log('not called');
                            toastr.error('Sorry!', 'something went wrong.');
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $('#modal-close').text('Create User');
                        toastr.success('Something went wrong, Please try again', 'Opps!');
                        console.log("Some error occurred");
                        // Handle error
                    }
                });
            });

        });

        $('.editUserBtn').click(function() {
            // console.log('asdasd')
            var userId = $(this).data('user-id');

            // AJAX request to fetch user data
            $.ajax({
                method: 'get',
                url: '/users/edit/' + userId, // Adjust URL as per your route
                success: function(response) {
                    console.log(response);
                    // Populate modal with user data
                    $('#edituserId').val(response.data.user.id);
                    $('#edituserName').val(response.data.user.name);
                    $('#edituserEmail').val(response.data.user.email);
                    $('#edituserCompany').val(response.data.user.company_id);
                    $('#edituserIsActive').val(response.data.user.is_active);
                    $('#edituserRole').val(response.data.user_role);
                    // Populate other input fields as needed

                    var options = '';
                    options += '<option value="">Choose</option>';
                    $.each(response.data.companies, function(index, company) {
                        if (company.id === response.data.user.company_id) {
                            options += '<option value="' + company.id + '" selected>' + company
                                .name + '</option>';
                        } else {
                            options += '<option value="' + company.id + '">' + company.name +
                                '</option>';
                        }
                    });
                    $('#edituserCompany').html(options);



                    var options = '';
                    options += '<option value="">Choose</option>';
                    $.each(response.data.roles, function(index, role) {
                        if (role.id === response.data.user_role) {
                            options += '<option value="' + role.id + '" selected>' + role.name +
                                '</option>';
                        } else {
                            options += '<option value="' + role.id + '">' + role.name +
                                '</option>';
                        }
                    });
                    $('#edituserRole').html(options);



                    var options2 = '';

                    options2 += '<option value="">Choose</option>';

                    var statusData = [1, 0];
                    $.each(statusData, function(index, status) {
                        if (status === response.data.user.is_active) {
                            options2 += '<option value="' + status + '" selected>' + getStatus(
                                status) + '</option>';
                        } else {
                            options2 += '<option value="' + status + '">' + getStatus(status) +
                                '</option>';
                        }
                    });
                    $('#edituserIsActive').html(options2);


                    // Show the modal
                    $('#editUserModal').show();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // Handle error
                    console.error("Error fetching user data:", errorThrown);
                }
            });

        });

        // Submit event handler for the edit user form
        $('#editUserForm').submit(function(e) {
            e.preventDefault();

            var userId = $('#edituserId').val();
            var csrfToken = $('input[name="_token"]').val();


            // AJAX request to update user data
            $.ajax({
                method: 'post',
                url: '/users/update/' + userId, // Adjust URL as per your route
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    // Handle success
                    console.log("User data updated successfully:", response);

                    editModalClose.addEventListener('click', () => {
                        HSOverlay.close('#update-user-modal');
                    });

                    toastr.success('Successfully Updated user', 'Congratulation!');
                    window.location.reload();


                    // Close the modal
                    $('#editUserModal').hide();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // Handle error
                    editModalClose.addEventListener('click', () => {
                        HSOverlay.close('#update-user-modal');
                    });
                    toastr.success('Something went wrong, Please try again', 'Opps!');
                    console.error("Error updating user data:", errorThrown);
                }
            });
        });





        function getStatus(status) {
            return status == 1 ? 'Active' : 'Inactive';
        }
    </script>

@endsection
