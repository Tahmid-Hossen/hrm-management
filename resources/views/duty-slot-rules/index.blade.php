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
                {{--<div>
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
                </div>--}}
            </div>
            <div class="pb-2 h-full flex flex-col items-end justify-end">
                <div class="flex items-center align-middle gap-x-2">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-white">Action: </h5>
                    </div>
                    <div class="inline-block hs-tooltip">
                        <div class="inline-block hs-tooltip">
                            <button type="button" onclick="createDutySlotRuleModal.showModal()" class="tooltip actionBtn bg-red-600" data-tip="Create Time Slot">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
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
                                ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                SLOT NAME
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Start Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                End Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Start Time
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Threshold Time
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                End Time
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Action
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
@include('duty-slot-rules.create')
@section('scripts')
    <script>
        let dataTable = new DataTable('#dataTable', {
            serverSide: true,
            processing:true,
            /*language: {
                processing: $("#spinner-large").html(),
            },*/
            ajax:{
                url: '{{ route('dutySlotRules.index') }}',
                dataSrc: function (res) {
                    $('#lastSyncDate').html(res.lastSyncDate)
                    $('#lastSyncTime').html(res.lastSyncTime)
                    return res.data;
                }
            },
            columns: [
                { name: 'id',  data: 'id'},
                { name: 'slot_name',  data: 'slot_name'},
                { name: 'start_date',  data: 'start_date'},
                { name: 'end_date',  data: 'end_date'},
                /*{ data: 'email' },*/
                { name: 'start_time',  data: 'start_time'},
                { name: 'threshold_time',  data: 'threshold_time'},
                { name: 'end_time',  data: 'end_time'},
                { name: 'action',  data: 'id',
                    render:function(data, type, row) {
                        let editBtn=`
                            <button type="button" href="${baseUrl}/duty-slot-rules/edit/${row.id}" onclick="createDutySlotRuleModal.showModal()" class="tooltip actionBtn neutral" data-tip="Edit Time Slot">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <a href="${baseUrl}/duty-slot-rules/edit/${row.id}" class="tooltip actionBtn neutral" data-tip="Edit Time Slot">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        `
                        return `<div class="flex justify-center">${editBtn}</div>`;
                    }
                },
            ]
        });
        $('#department, #company, #designation, #date').change(function (){
            let department = $('#department').val();
            let company = $('#company').val();
            let designation = $('#designation').val();
            let date = $('#date').val();
            dataTable.ajax.url(`{{ route('dutySlotRules.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
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
            dataTable.ajax.url(`{{ route('dutySlotRules.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
        });
    </script>
@endsection



