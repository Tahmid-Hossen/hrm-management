@extends('layouts.app')
@section('title', 'Employee Profile')
@section('pageTitle', 'Employee List')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[['title'=>'Employee List', 'url'=>'']]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <x-containers.container-box>
        <div class="flex justify-between items-end gap-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end ">

                <div>
                    <label for="select-filter" class="inputLabel">Company</label>

                    <select id="company"  name="select-filter" class="inputField">
                        <option value="">All</option>
                        @foreach($companies as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label  class="inputLabel">Department</label>

                    <select id="department"  class="inputField">
                        <option value="">All</option>
                        @foreach($departments as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="select-filter" class="inputLabel">Designation</label>

                    <select id="designation"  name="designation" class="inputField">
                        <option value="">All</option>
                        @foreach($designations as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="select-filter" class="inputLabel">Date</label>
                    <input type="date" id="date"  name="date" value="{{date('Y-m-d')}}" class="inputField">
                </div>
                <div class="mb-2">
                    <div class="inline-block hs-tooltip">
                        <button type="reset" class="btn-red" id="reset">
                            <i class="fas fa-undo text-base p-1.5 text-center"></i>
                            <span
                                class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                role="tooltip">
                            Reset
                        </span>
                        </button>
                    </div>
                </div>
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
                    <div class="inline-block hs-tooltip">
                        <button type="button" id="sync-biometric-data" onclick="attendanceSyncModal.showModal()" class="tooltip actionBtn bg-red-600" data-tip="Sync now">
                            <i class="fa-solid fa-rotate"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-sm text-right">Last Sync:
            <span class="text-red-600" id="lastSyncDate"></span>
            <span class="text-red-600" id="lastSyncTime"></span>
        </p>
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
                                EMP ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                NAME
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Company
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
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Details
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
@section('modals') @include('attendance.sync') @endsection
@section('scripts')
    <script>
        let dataTable = new DataTable('#dataTable', {
            serverSide: true,
            processing:true,
            /*language: {
                processing: $("#spinner-large").html(),
            },*/
            ajax:{
                url: '{{ route('attendance.index') }}',
                dataSrc: function (res) {
                    $('#lastSyncDate').html(res.lastSyncDate)
                    $('#lastSyncTime').html(res.lastSyncTime)
                    return res.data;
                }
            },
            columns: [
                    { name: 'employeeID',  data: 'emp_id', render: function(data, type, row) {
                        let html=`<a href="${baseUrl}/employees/view/${row.id}" class="button-red">${data}</a>`;
                        return html;
                    }
                },
                { name: 'name',  data: 'full_name', searchable:false,
                    render: function(data, type, row) {
                        let html=`
                                    <div class="flex items-center gap-2">

                                        <div class="">
                                            <figure class="w-12 aspect-square rounded-md overflow-hidden">
                                                <img class="" src="${row.profile_img}" onerror="this.onerror=null;this.src='${row.profile_img_default}';" alt="{{$employee->name ??''}}"/>
                                            </figure>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class=" ${row.biometric_id==='' ? `text-red-600` : ``}"><i class="fa-solid fa-fingerprint"></i> ${row.biometric_id}</span>
                                            <span class="font-bold">${data}</span>
                                            <span>${row.email}</span>
                                            <span>${row.phone}</span>
                                        </div>
                                    </div>
                               `
                        return html;
                    }
                },
                /*{ data: 'email' },*/
                { name: 'company',  data: 'company',
                    render: function(data, type, row) {
                        let html=`
                                <div class="flex flex-col text-sm">
                                    <span class="font-medium">${data}</span>
                                    <span>${row.department}</span>
                                    <span>${row.designation}</span>
                                </div>
                               `
                        return html;
                    }
                },
                { name: 'clockIn',  data: 'clockIn',
                    render:function(data, type, row) {
                        let dateTimeString = data;
                        let dateTime = new Date(dateTimeString);
                        let formattedTime = dateTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
                        return data ? formattedTime : '';
                    }
                },
                { name: 'clockOut',  data: 'clockOut',
                    render:function(data, type, row) {
                        let dateTimeString = data;
                        let dateTime = new Date(dateTimeString);
                        let formattedTime = dateTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
                        return data ? formattedTime : '';
                    }
                },
                { name: 'late',  data: 'late',
                    render:function(data, type, row) {
                        return data ? `<span class="text-red-600">${data}</span>` : '';
                    }
                },
                { name: 'earlyLeaving',  data: 'earlyLeaving' },
                { name: 'overtime',  data: 'overtime',
                    render:function(data, type, row) {
                        return data ? `<span class="text-teal-600">${data}</span>` : '';
                    }
                },
                { name: 'attendance',  data: 'attendance',
                    render:function(data, type, row) {
                        let att=``;
                        data.map(x=>{
                            let dateTimeString = x.DateTime;
                            let dateTime = new Date(dateTimeString);
                            let formattedTime = dateTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
                            att+= `<li> <span><i class="fa-regular fa-clock"></i> ${formattedTime}</span></li>`
                        })
                        let html=`
                            <div class="flex items-center justify-center">
                                <div class="dropdown dropdown-left">
                                  <div tabindex="0" role="button" class="actionBtn bg-teal-600"><i class="fa-solid fa-list-check"></i></div>
                                  <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-md w-52">
                                    ${att}
                                  </ul>
                                </div>
                            </div>
                        `
                        return html;
                    }
                },
            ]
        });
        $('#department, #company, #designation, #date').change(function (){
            let department = $('#department').val();
            let company = $('#company').val();
            let designation = $('#designation').val();
            let date = $('#date').val();
            dataTable.ajax.url(`{{ route('attendance.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
        });
        $('#reset').click(function (){
            $('#department').val('')
            $('#company').val('');
            $('#designation').val('');
            $('#date').val('');
            let department = '';
            let company = '';
            let designation = '';
            let date = '';
            dataTable.ajax.url(`{{ route('attendance.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
        });
        $('#sync-biometric-data').click(function (){

        });
    </script>
@endsection



