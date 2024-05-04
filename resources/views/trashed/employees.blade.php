@extends('layouts.app')
@section('title', 'Employee Trash List')
@section('pageTitle', 'Employee Trash List')
    {{-- trash implementation section  --}}
@section('content')
    <div class="mt-8">
        <div class="breadcum-heading mb-4">
            <ol class="mr-2 mt-2 flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:hover:text-red-600 dark:hover:text-red-600 dark:focus:text-neutral-600"
                        href="{{ route('dashboard') }}">
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

@endsection

@section('scripts')
    <script>
    </script>
@endsection
