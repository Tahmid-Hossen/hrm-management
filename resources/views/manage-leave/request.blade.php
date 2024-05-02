@extends('layouts.app')
@section('title', 'Leave Request')
@section('pageTitle', 'Leave Request')

@section('breadcumb')
<ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:focus:text-neutral-600" href="#">
            <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Home
        </a>
        <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
        </svg>
    </li>

    <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600" aria-current="page">
        Leave
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
                        <label for="search-employee" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Search Employee
                        </label>
                        <input id="search-employee" name="icon" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search users" />
                    </div>

                    <div>
                        <label for="select-filter" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Filter
                        </label>

                        <select id="select-filter" name="select-filter" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">By Date </option>
                            <option value="">By Name </option>
                            <option value="">By Late</option>
                        </select>
                    </div>
                    <div>
                        <div class="flex flex-wrap justify-between gap-2">
                            <div>
                                <!-- Search button -->
                                <div class="inline-block hs-tooltip">
                                    <a type="button" href="/" class="btn-teal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Search
                                        </span>
                                    </a>
                                </div>
                                <!-- Reset button -->
                                <div class="inline-block hs-tooltip">
                                    <a type="button" href="/" class="btn-red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                        <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Reset
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="flex flex-col p-2 border rounded-lg border-neutral-200 dark:border-neutral-700 dark:bg-neutral-800">
            <div class="-m-1.5 overflow-x-auto">
                <div class="w-full p-1.5 align-middle">
                    <div class="overflow-x-auto">
                        <table id="example" class="w-full display hover divide-neutral-200 dark:divide-neutral-700">
                            <thead class="">
                                <tr class="dark:hover:bg-neutral-800">
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        EMPLOYEE
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        LEAVE TYPE
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        APPLIED ON
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        START DATE
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        END DATE
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        TOTAL DAYS
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        LEAVE REASON
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        STATUS
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                        Action
                                    </th>
                                </tr>
                            </thead>


                            <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                                @foreach($leaves as $leave)
                                <tr class="cursor-pointer dark:hover:bg-neutral-800">
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        {{ $leave->user->employee->full_name ?? ''}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        {{ $leave->leave_type->name ?? ''}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        <!-- Mar 31, 2024 -->
                                        {{ date("M d, Y", strtotime($leave->request_date))}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        {{ date("M d, Y", strtotime($leave->start_date))}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        {{ date("M d, Y", strtotime($leave->end_date))}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">


                                        @php
                                        if($leave->duration_type === 'single_day'){
                                        echo '1 Days';
                                        }else if ($leave->duration_type === 'multiple_day'){
                                        $start_date = new DateTime($leave->start_date);
                                        $end_date = new DateTime($leave->end_date);

                                        $interval = $start_date->diff($end_date);
                                        $daysDifference = $interval->days + 1;
                                        echo $daysDifference . " days";
                                        }

                                        @endphp
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        {{ $leave->reason ?? 'N/A'}}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                        <button type="button" class="block">
                                            <span class="block">
                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-orange-100 px-2 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900 dark:text-green-200">
                                                    <!-- <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
                                                        </path>
                                                    </svg> -->
                                                    Pending
                                                </span>
                                            </span>
                                        </button>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                        <div class="flex gap-3">
                                            <div class="inline-block hs-tooltip">
                                                <button data-hs-overlay="#manage-leave-modal" type="button" class="btn-green">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                                                        <path d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753" />
                                                    </svg>
                                                    <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100" role="tooltip">
                                                        Leave Request
                                                    </span>
                                                </button>
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