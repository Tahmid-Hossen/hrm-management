@extends('layouts.app')
@section('title', 'Dashboard')
@section('pageTitle', 'Dashboard')
@section('content')





    <!-- Card Section -->
    <div class="mx-auto ">
        <!-- Grid -->
        <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-2 xl:grid-cols-2 sm:gap-6">

            <!-- Card -->
            <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                href="#">
                <div class="p-4 md:p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3
                                class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                Good Afternoon,

                            </h3>
                            <p class="text-sm text-gray-500">
                                {{ auth()->user()->name ?? '' }}
                            </p>
                        </div>
                        <div class="ps-3">
                            <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

    @if (getUserRole() !== 'staff')
        <!-- Card Section -->
        <div class="pt-4 mx-auto">
            <h3 class="py-2 font-semibold text-gray-800 text-md dark:text-white">For HR</h3>
            <!-- Grid -->
            <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 sm:gap-6">
                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total Employee
                                </h3>
                                <p class="text-sm text-gray-500">
                                    45 Employee
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total departments
                                </h3>
                                <p class="text-sm text-gray-500">
                                    6 Departments
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    On leave today
                                </h3>
                                <p class="text-sm text-gray-500">
                                    0 Leave today
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total leave requests
                                </h3>
                                <p class="text-sm text-gray-500">
                                    10 Requests
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->

        <!-- Card Section -->
        <div class="pt-4 mx-auto">
            <h3 class="py-2 font-semibold text-gray-800 text-md dark:text-white">For Employee</h3>
            <!-- Grid -->
            <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 sm:gap-6">
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total leave available
                                </h3>
                                <p class="text-sm text-gray-500">
                                    25
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total leave allowance
                                </h3>
                                <p class="text-sm text-gray-500">
                                    27
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Total leave taken
                                </h3>
                                <p class="text-sm text-gray-500">
                                    10
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
                <!-- Card -->
                <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-800 dark:border-gray-800"
                    href="#">
                    <div class="p-4 md:p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3
                                    class="font-semibold text-gray-800 group-hover:text-red-600 dark:group-hover:text-red-600 dark:text-gray-200">
                                    Leave request pending
                                </h3>
                                <p class="text-sm text-gray-500">
                                    2
                                </p>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

            </div>
            <!-- End Grid -->
        </div>
        <!-- End Card Section -->

        <!-- Card Section -->
        <div class="pt-4 mx-auto">
            <h3 class="py-2 font-semibold text-gray-800 text-md dark:text-white">For charts</h3>
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-4">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70"
                        style="max-height: 460px!important">
                        <div
                            class="flex items-center justify-between px-4 py-3 border-b rounded-t-xl md:px-5 dark:border-neutral-700">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Total Attendance Today
                            </h3>
                        </div>
                        <div class="p-4 md:p-5">
                            <div class="flex flex-col items-center justify-center">
                                <div id="hs-doughnut-chart"></div>

                                <!-- Legend Indicator -->
                                <div class="flex items-center justify-center mt-3 sm:justify-end gap-x-4 sm:mt-6">
                                    <div class="inline-flex items-center">
                                        <span class="size-2.5 inline-block bg-blue-600 rounded-sm mr-2"></span>
                                        <span class="text-[13px] text-blue-600 dark:text-blue-400">
                                            Regular - 0
                                        </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span
                                            class="size-2.5 inline-block bg-teal-600 dark:text-teal-600 rounded-sm mr-2"></span>
                                        <span class="text-[13px] text-teal-600 dark:text-teal-600">
                                            Early - 9
                                        </span>
                                    </div>
                                    <div class="inline-flex items-center">
                                        <span
                                            class="size-2.5 inline-block bg-red-600 rounded-sm mr-2 dark:bg-red-700"></span>
                                        <span class="text-[13px] text-red-600 dark:text-red-600">
                                            Late - 0
                                        </span>
                                    </div>
                                </div>
                                <!-- End Legend Indicator -->
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col mt-4 bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div
                            class="flex items-center justify-between px-4 py-3 border-b rounded-t-xl md:px-5 dark:border-neutral-700">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Total Not Checked IN
                            </h3>
                        </div>
                        <!-- Legend Indicator -->
                        <div class="flex flex-col ">
                            <div class="inline-block min-w-full overflow-hidden overflow-y-auto align-middle h-80">
                                <table class="min-w-full text-center divide-y divide-gray-200 dark:divide-neutral-700 ">
                                    <thead>
                                        <tr class="text-center bg-gray-200 dark:bg-neutral-900">
                                            <th scope="col"
                                                class="px-6 py-3 font-medium text-center text-teal-600 uppercase text-[14px] dark:text-teal-500">
                                                Name</th>
                                            <th scope="col"
                                                class="px-6 py-3 font-medium text-center text-teal-600 uppercase text-[14px] dark:text-teal-500">
                                                Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>



                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>

                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Jim Green</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Jim Green</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>
                                        <tr
                                            class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Tahmid</td>
                                            <td
                                                class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-neutral-200">
                                                Absent</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Legend Indicator -->
                    </div>
                </div>


                <div class="col-span-8">
                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div
                            class="flex items-center justify-between px-4 py-3 border-b rounded-t-xl md:px-5 dark:border-neutral-700">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Calender
                            </h3>
                        </div>
                        <div id='calendar' class="p-4"></div>

                    </div>

                </div>




            </div>


            <!-- End Grid -->
        </div>
        <!-- End Card Section -->
        <!-- Card Section -->
        {{-- <div class="pt-4 mx-auto">
            <h3 class="py-2 font-semibold text-gray-800 text-md dark:text-white">Calendar</h3>
            <!-- Grid -->
            <div class="grid gap-3 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-2 sm:gap-6">
                <div id='calendar'></div>



            </div>


            <!-- End Grid -->
        </div> --}}
        <!-- End Card Section -->
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: 'UTC',
                initialView: 'dayGridYear',
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridYear,dayGridWeek,dayGridDay'
                },
                editable: true,
                events: [{
                        "title": "Govt. Holiday",
                        "start": "2024-05-01",
                        "end": "2024-05-01"
                    },
                    {
                        "title": "Govt. Holiday",
                        "start": "2024-04-28",
                        "end": "2024-04-28"
                    },
                ]
            });

            calendar.render();
        });
    </script>

    <script>
        window.addEventListener('load', () => {
            // Apex Doughnut Chart
            (function() {
                buildChart('#hs-doughnut-chart', (mode) => ({
                    chart: {
                        height: 230,
                        width: 230,
                        type: 'donut',
                        zoom: {
                            enabled: false
                        }
                    },
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '76%'
                            }
                        }
                    },
                    series: [47, 23, 30],
                    labels: ['Regular', 'Early', 'late'],
                    legend: {
                        show: false
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        width: 5
                    },
                    grid: {
                        padding: {
                            top: -12,
                            bottom: -11,
                            left: -12,
                            right: -12
                        }
                    },
                    states: {
                        hover: {
                            filter: {
                                type: 'none'
                            }
                        }
                    },
                    tooltip: {
                        enabled: true,
                        custom: function(props) {
                            return buildTooltipForDonut(
                                props,
                                mode === 'dark' ? ['#fff', '#fff', '#000'] : ['#fff',
                                    '#fff', '#000'
                                ]
                            );
                        }
                    }
                }), {
                    colors: ['#2563eb', '#059669', '#dc2626'],
                    stroke: {
                        colors: ['rgb(255, 255, 255)']
                    }
                }, {
                    colors: ['#3b82f6', '#22d3ee', '#404040'],
                    stroke: {
                        colors: ['rgb(38, 38, 38)']
                    }
                });
            })();
        });
    </script>


@endsection
