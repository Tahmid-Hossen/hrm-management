@extends('layouts.app')
@section('title', 'Manage Bulk Attendance')
@section('pageTitle', 'Manage Bulk Attendance')
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
            Bulk Attendance
        </li>
    </ol>
@endsection
@section('additionalButton')

@endsection
@section('content')


    <div class="mt-4 ">
        <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
            <div class="p-2">
                <div class="grid justify-center items-end grid-cols-1 gap-4 mt-2 sm:grid-cols-4 lg:gap-6">

                    <!-- Attendance Date -->
                    <div>
                        <div>
                            <label for="attendance-date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Date
                            </label>
                            <input id="attendance-date" name="attendance-date" type="date" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>
                    </div>
                    <!-- Attendance Date -->

                    <!-- Select Company -->
                    <div>
                        <label for="select-company" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Company
                        </label>

                        <select id="select-company" name="select-company" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Select Company</option>
                            <option value="SSC">Nexdecade</option>
                            <option value="HSC">M2M</option>
                        </select>
                    </div>
                    <!-- Select Company -->

                    <!-- Select Company -->
                    <div>
                        <label for="select-department" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Department
                        </label>

                        <select id="select-department" name="select-department" class="block w-full px-4 py-3 text-sm border border-gray-200 rounded-lg bg-neutral-100 dark:bg-neutral-700 focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Select Department</option>
                            <option value="SSC">IT</option>
                            <option value="HSC">HR</option>
                            <option value="HSC">Admin</option>
                        </select>
                    </div>
                    <!-- Select Company -->

                    <div>
                        <div class="flex flex-wrap justify-end gap-2">
                            <!-- export button -->
                            <div class="inline-block hs-tooltip">
                                <a type="button" href="/"
                                    class="btn-teal">
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
                            <!-- import button -->
                            <div class="inline-block hs-tooltip">
                                <a type="button" href="/"
                                    class="btn-red">
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
                    </div>
                </div>
        </div>
    </div>


    <div class="mt-4 ">

        <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 w-full align-middle">
                    <div class="overflow-x-auto">
                        <table id="example"  class="w-full display hover divide-neutral-200 dark:divide-neutral-700">
                            <thead class="">
                            <tr class=" dark:hover:bg-neutral-800">
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start" >EMPLOYEE ID</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start" >EMPLOYEE</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start" >COMPANY</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">DEPARTMENT</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-error" /> ATTENDANCE</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Check IN</th>
                                <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Check OUT</th>
                            </tr>
                            </thead>
                            <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                            <tr class="cursor-pointer dark:hover:bg-neutral-800">

                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                    <a href="#"
                                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600  rounded-lg hover:bg-red-700 dark:bg-red-600 dark:hover:text-red-white dark:hover:bg-red-700 hover:text-white dark:text-white">#EMP0000001</a>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">Md. Iqbal Mahmud</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">Nexdecade</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">IT</td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                    <input type="checkbox" checked="checked" class="checkbox checkbox-error" />
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                    <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="time" name="" id="" value="10:00">
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                    <input class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" type="time" name="" id="" value="18:00">
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="flex justify-center items-center">
                            <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-600  rounded-lg hover:bg-red-700 dark:bg-red-600 dark:hover:text-red-white dark:hover:bg-red-700 hover:text-white dark:text-white">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

