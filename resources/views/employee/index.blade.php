@extends('layouts.app')
@section('title', 'Employee Profile')
@section('pageTitle', 'Employee Profile')
@section('breadcumb')
    <ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:focus:text-neutral-600"
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

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600 dark:hover:text-red-600"
            aria-current="page">
            Employee Profile
        </li>
    </ol>
@endsection

@section('content')
    <div class="mt-4">
        <div class="mt-4">
            <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
                <div class="p-2">
                    <div class="grid items-end justify-between grid-cols-1 gap-4 mt-2 sm:grid-cols-3 lg:gap-6">

                        <div>
                            <label for="search-employee"
                                class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Search Employee
                            </label>
                            <input id="search-employee" name="icon"
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
                                <option selected="">By Name </option>
                                <option value="">By Phone </option>
                                <option value="">By Date</option>
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
                                <!-- import button -->
                                <div class="flex items-center align-middle gap-x-2">
                                    <div>
                                        <h5 class="text-sm text-gray-800 dark:text-white">Action: </h5>
                                    </div>
                                    <div class="inline-block hs-tooltip">
                                        <button type="button" class="btn-import">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
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
                                    <div class="inline-block hs-tooltip">
                                        <a type="button" href="/" class="btn-export">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-file-earmark-arrow-down"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                                <path
                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                            </svg>
                                            <span
                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                role="tooltip">
                                                Export
                                            </span>
                                        </a>
                                    </div>
                                    <!-- create button -->
                                    <div class="inline-block hs-tooltip">
                                        <button type="button" data-hs-overlay="#create-new-employee-modal"
                                            class="btn-create">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                            </svg>
                                            <span
                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                role="tooltip">
                                                Create Employee
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                            EMPLOYEE ID
                                        </th>
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
                                            DESIGNATION
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Phone
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Gender
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Company Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                                    @foreach ($employees as $employee)
                                        <tr class="cursor-pointer text-start dark:hover:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                <a href="{{ route('employees.view', $employee->id) }}"
                                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg dark:hover:text-red-white hover:bg-red-700 hover:text-white dark:bg-red-600 dark:text-white dark:hover:bg-red-700">
                                                    {{ $employee->emp_id }}
                                                </a>
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->full_name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->email }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->empDesignation->name ?? '' }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->phone }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->gender }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                                {{ $employee->company_name }}
                                            </td>

                                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                                <div class="flex gap-3">
                                                    <div class="hs-tooltip inline-block">
                                                        <a href="{{ route('employees.view', $employee->id) }}"
                                                            class="hs-tooltip-toggle btn-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                                                            </svg>
                                                            <span
                                                                class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                role="tooltip">
                                                                View Profile
                                                            </span>
                                                        </a>
                                                    </div>

                                                    {{-- Assign role section  --}}

                                                    @if ($employee->user)
                                                        <div class="hs-tooltip inline-block">
                                                            <button type="button"
                                                                class="assignRoleBtn hs-tooltip-toggle btn-green"
                                                                data-user-id="{{ $employee->id }}"
                                                                data-user-data="{{ $employee->user->id ?? null }}"
                                                                data-hs-overlay="#update-user-modal">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                                                                </svg>

                                                                <span
                                                                    class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                    role="tooltip">
                                                                    Assign Role
                                                                </span>
                                                            </button>
                                                        </div>
                                                    @else
                                                        <div class="inline-block hs-tooltip">
                                                            <button type="button" class="btn-red"
                                                                data-user-id="{{ $employee->id }}"
                                                                data-user-data="{{ $employee->user->id ?? null }}"
                                                                data-hs-overlay="#update-user-modal">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z" />
                                                                </svg>

                                                                <span
                                                                    class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                                    role="tooltip">
                                                                    Assign Role
                                                                </span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {{-- Assign role section end  --}}

                                                    <div class="inline-block hs-tooltip">
                                                        <a href="{{ route('employees.delete', $employee->id) }}"
                                                            type="button"
                                                            class="btn-red">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-archive"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                            </svg>
                                                            <span
                                                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
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

        {{-- trash implementation section  --}}

        <div class="mt-8">
            <div class="breadcum-heading mb-4">
                <ol class="mr-2 mt-2 flex items-center whitespace-nowrap">
                    <li class="inline-flex items-center">
                        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:hover:text-red-600 dark:hover:text-red-600 dark:focus:text-neutral-600"
                            href="#">
                            <svg class="me-3 size-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Home
                        </a>
                        <svg class="mx-2 size-4 flex-shrink-0 overflow-visible text-gray-400 dark:text-neutral-600 dark:hover:text-red-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>

                    <li class="inline-flex items-center truncate text-sm font-semibold text-red-600 dark:text-red-600 dark:hover:text-red-600 dark:hover:text-red-600"
                        aria-current="page">
                        Employee
                        <svg class="mx-2 size-4 flex-shrink-0 overflow-visible text-gray-400 dark:text-neutral-600 dark:hover:text-red-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </li>

                    <li class="inline-flex items-center truncate text-sm font-semibold text-red-600 dark:text-red-600 dark:hover:text-red-600 dark:hover:text-red-600"
                        aria-current="page">
                        Trash List
                    </li>
                </ol>
            </div>
            <div
                class="flex flex-col rounded-lg border border-neutral-200 p-2 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                          <table id="example-trash" class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="">
                                <tr class="dark:hover:bg-neutral-800">
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-sm font-bold uppercase text-[#0d9488]">
                                        EMPLOYEE ID
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-sm font-bold uppercase text-[#0d9488]">
                                        NAME
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-sm font-bold uppercase text-[#0d9488]">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trashedEmployees as $employee)
                                <tr class="cursor-pointer text-start dark:hover:bg-neutral-800">
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-gray-200">
                                        <a href="{{ route('employees.view', $employee->id) }}"
                                            class="dark:hover:text-red-white inline-flex items-center rounded-lg bg-red-600 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-700 hover:text-white dark:bg-red-600 dark:text-white dark:hover:bg-red-700">
                                            {{ $employee->id }} <!-- Display employee ID -->
                                        </a>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                        {{ $employee->full_name }} <!-- Display employee name -->
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                                        <div class="flex gap-3">
                                            <div class="inline-block hs-tooltip">
                                                <form
                                                    action="{{ route('employees.force-delete', $employee->id) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn-red">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-archive" viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg>
                                                        <span
                                                            class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                            role="tooltip">
                                                            Delete Permanently
                                                        </span>
                                                    </button>
                                                </form>
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

        {{-- End trans table --}}



        <div id="update-user-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="
            false">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div
                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <!-- Header -->
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Update Permission
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600"
                            data-hs-overlay="#update-user-modal">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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

                        <input type="hidden" id="employeeId" name="employeeId">
                        <input type="hidden" id="employeeData" name="employeeData">


                        <div class="p-4 sm:p-10 overflow-y-auto">
                            <div class="flex gap-x-4 md:gap-x-7">
                                <!-- Icon -->
                                <span
                                    class="flex-shrink-0 inline-flex justify-center items-center size-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </span>
                                <!-- End Icon -->

                                <div class="grow">
                                    <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Are you sure?
                                    </h3>
                                    <p class="text-gray-500 dark:text-neutral-500 employeeDataText">
                                        You want remove from user.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                No
                            </button>

                            <button id="modal-close" type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Yes
                            </button>
                        </div>



                        <!-- End Body -->


                    </form>
                    <!-- End Footer -->
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')
        <script>
            // function assignRoleModal(ID) {
            //     // var userId = $(this).data('user-id');
            //     let htmlForm = $('#assignRoleModalForm').html();
            //     // let html =`<form method="POST" action="/opop/${id}">${htmlForm}</form>`
            //     $('#smallSizeModalBody').html(htmlForm);
            //     smallSizeModal.showModal();
            //     $('#employeeId').val(ID);
            //     console.log(ID);
            // }


            $(document).ready(function() {
                const modalClose = document.querySelector('#modal-close');

                $('.assignRoleBtn').click(function() {
                    var userId = $(this).data('user-id');
                    var userData = $(this).data('user-data');
                    $('#employeeId').val(userId);
                    $('#employeeData').val(userData);
                    if (userData) {
                        $('.employeeDataText').html(' You want remove from user.');
                    } else {
                        $('.employeeDataText').html(' You want sync with user.');
                    }
                    console.log(userId);
                });



                $('#editUserForm').submit(function(e) {
                    $('#modal-close').text('Processing...');
                    e.preventDefault();
                    var userId = $('#employeeId').val();
                    var csrfToken = $('input[name="_token"]').val();
                    // AJAX request to update user data
                    $.ajax({
                        method: 'post',
                        url: '/employees/employee-permission/' + userId, // Adjust URL as per your route
                        data: $(this).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            $('#modal-close').text('Yes');
                            // Handle success
                            console.log("User data updated successfully:", response);

                            modalClose.addEventListener('click', () => {
                                HSOverlay.close('#update-user-modal');
                            });

                            toastr.success('Successfully Updated user', 'Congratulation!');
                            window.location.reload();


                            // Close the modal
                            $('#editUserModal').hide();
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $('#modal-close').text('Yes');
                            // Handle error
                            modalClose.addEventListener('click', () => {
                                HSOverlay.close('#update-user-modal');
                            });
                            toastr.success('Something went wrong, Please try again', 'Opps!');
                            console.error("Error updating user data:", errorThrown);
                        }
                    });
                });

            });
        </script>
    @endsection
