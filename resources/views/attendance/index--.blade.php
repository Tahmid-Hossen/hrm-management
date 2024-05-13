@extends('layouts.app')
@section('title', 'Attendance')
@section('pageTitle', 'Attendance List')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[['title'=>'Attendance List', 'url'=>'']]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <x-containers.container-box>
        <div class="flex justify-between items-end gap-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end ">

            </div>
            <div class="pb-2 h-full flex flex-col items-end justify-end">
                <div class="flex items-center align-middle gap-x-2">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-white">Action: </h5>
                    </div>
                    <div class="inline-block hs-tooltip">
                        <button type="button" onclick="bulkTagModal.showModal()"
                                class="btn-create">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
                            </svg>
                            <span
                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                role="tooltip">
                                Bulk Tag
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-containers.container-box>
    <x-containers.container-box>
        <div class="overflow-x-auto">
            <div class="w-full align-middle">
                <div class="overflow-x-auto">
                    <table id="dataTable" class="w-full display dark:text-white divide-neutral-200 dark:divide-neutral-700">
                        <thead class="">
                        <tr class="dark:hover:bg-neutral-800">
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Employee
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Clock In
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Clock Out
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Late
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Early Leaving
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Overtime
                            </th>
                        </tr>
                        </thead>
                        <tbody id="tableData">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-containers.container-box>

@endsection
@include('attendance.bulk-tag')
@section('scripts')
    <script>
        let dataTable = new DataTable('#dataTable', {
            serverSide: true,
            processing:true,
            /*language: {
                processing: $("#spinner-large").html(),
            },*/
            ajax:{
                url: '{{ route('attendance.attendanceData') }}',
                data:{
                    date:'2024-05-12',
                    //sync:'sync'
                }
            },
            columns: [
                { name: 'name',  data: 'emp_name', searchable:false,
                    render: function(data, type, row) {
                        let name=''
                        let email=''
                        let phone=''
                        if(row.emp_id!==''){
                            name=data;
                            email=row.email
                            phone=row.phone
                        }else{
                            name=row.PIN
                        }
                        let html=`
                                        <div class="flex flex-col">
                                            <span class="font-bold">${name}</span>
                                            <span>${email}</span>
                                            <span>${phone}</span>
                                        </div>

                                    `
                        return html;
                    }
                },
                /*{ data: 'email' },*/
                { name: 'clockIn',  data: 'clockIn' },
                { name: 'clockOut',  data: 'clockOut' },
                { name: 'late',  data: 'late' },
                { name: 'earlyLeaving',  data: 'earlyLeaving' },
                { name: 'overtime',  data: 'overtime' },
            ]
        });
        $('#department, #company, #designation').change(function (){
            let department = $('#department').val();
            let company = $('#company').val();
            let designation = $('#designation').val();
            dataTable.ajax.url(`{{ route('employees.index') }}?department=${department}&company=${company}&designation=${designation}`).load();
        });
        $('#reset').click(function (){
            setTimeout(()=>{
                let department = $('#department').val();
                let company = $('#company').val();
                let designation = $('#designation').val();
                dataTable.ajax.url(`{{ route('employees.index') }}?department=${department}&company=${company}&designation=${designation}`).load();
            }, 300)

        });
    </script>
@endsection



