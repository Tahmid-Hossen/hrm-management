@extends('layouts.app')
@section('title', 'Employee Profile')
@section('pageTitle', 'Leave List')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[['title'=>'Leave', 'url'=>'']]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <x-containers.container-box>
        <div class="flex justify-between items-center gap-4">
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
            <div class="h-full flex flex-col items-center justify-end mr-2">
                <div class="flex items-center align-middle gap-x-2">
                    <div>
                        <h5 class="text-sm text-gray-800 dark:text-white">Action: </h5>
                    </div>
                    <div class="inline-block hs-tooltip">
                        <div class="inline-block hs-tooltip">
                            <button type="button" class="tooltip tooltip-inner actionBtn bg-teal-400" data-tip="Export">
                                <i class="ti ti-file-export"></i>
                            </button>
                        </div>
                    </div>
                    <div class="inline-block hs-tooltip">
                        <div class="inline-block hs-tooltip">
                            <button type="button" onclick="createLateRequestModal.showModal()"  class="tooltip tooltip-inner actionBtn bg-teal-600" data-tip="Create Late form">
                                <i class="ti ti-clock-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="inline-block hs-tooltip">
                        <div class="inline-block hs-tooltip">
                            <button type="button" onclick="createLeaveRequestModal.showModal()" class="tooltip tooltip-inner actionBtn bg-red-600" data-tip="Create Leave Form">
                                <i class="ti ti-plus"></i>
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
                                Emp ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Leave Type
                            </th>
                            {{-- <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Applied On
                            </th> --}}
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Start Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                End Date
                            </th>
                            {{-- <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Leave Reason
                            </th> --}}
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Status
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
@include('leave.create-late-request')
@include('leave.create-leave-request')
@section('scripts')
    <script>
        let dataTable = new DataTable('#dataTable', {
            serverSide: true,
            processing:true,
            /*language: {
                processing: $("#spinner-large").html(),
            },*/
            ajax:{
                url: '{{ route('dutySlots.index') }}',
                dataSrc: function (res) {
                    $('#lastSyncDate').html(res.lastSyncDate)
                    $('#lastSyncTime').html(res.lastSyncTime)
                    return res.data;
                }
            },
            columns: [
                { name: 'id',  data: 'id'},
                { name: 'slot_name',  data: 'slot_name'},
                /*{ data: 'email' },*/
                { name: 'start_time',  data: 'start_time'},
                { name: 'threshold_time',  data: 'threshold_time'},
                { name: 'end_time',  data: 'end_time'},
                { name: 'action',  data: 'id',
                    render:function(data, type, row) {
                        let editBtn=`
                            <a href="${baseUrl}/duty-slots/edit/${row.id}" class="actionBtn neutral">
                                <i class="ti ti-edit"></i>
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
            dataTable.ajax.url(`{{ route('dutySlots.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
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
            dataTable.ajax.url(`{{ route('dutySlots.index') }}?department=${department}&company=${company}&designation=${designation}&date=${date}`).load();
        });
    </script>
    <script>
        // $(document).ready(function() {
            $('#form_type').on('change', function() {
                handleChangeFormType(this);
            });
        // });
        $('#c_late_select_employee').selectize({
            options: [
            { company: 'nintendo', value: "nes", name: "Nintendo Entertainment System" },
            { company: 'nintendo', value: "snes", name: "Super Nintendo Entertainment System" },
            { company: 'nintendo', value: "n64", name: "Nintendo 64" },
            { company: 'nintendo', value: "gamecube", name: "GameCube" },
            { company: 'nintendo', value: "wii", name: "Wii" },
            { company: 'microsoft', value: 'xss', name: 'Xbox Series S' },
            { company: 'nintendo', value: "wiiu", name: "Wii U" },
            { company: 'nintendo', value: "switch", name: "Switch" },
            { company: 'sony', value: 'ps1', name: 'PlayStation' },
            { company: 'sony', value: 'ps2', name: 'PlayStation 2' },
            { company: 'sony', value: 'ps3', name: 'PlayStation 3' },
            { company: 'sony', value: 'ps4', name: 'PlayStation 4' },
            { company: 'sony', value: 'ps5', name: 'PlayStation 5' },
            { company: 'microsoft', value: 'xbox', name: 'Xbox' },
            { company: 'microsoft', value: '360', name: 'Xbox 360' },
            { company: 'microsoft', value: 'xbone', name: 'Xbox One' },
            { company: 'microsoft', value: 'xsx', name: 'Xbox Series X' }
            ],
            optionGroupRegister: function (optgroup) {
            var capitalised = optgroup.charAt(0).toUpperCase() + optgroup.substring(1);
            var group = {
                label: 'Company: ' + capitalised
            };

            group[this.settings.optgroupValueField] = optgroup;

            return group;
            },
            optgroupField: 'company',
            labelField: 'name',
            searchField: ['name','company'],
            sortField: 'name'
        });
        $('#c_leave_select_employee').selectize({
            options: [
            { company: 'nintendo', value: "nes", name: "Nintendo Entertainment System" },
            { company: 'nintendo', value: "snes", name: "Super Nintendo Entertainment System" },
            { company: 'nintendo', value: "n64", name: "Nintendo 64" },
            { company: 'nintendo', value: "gamecube", name: "GameCube" },
            { company: 'nintendo', value: "wii", name: "Wii" },
            { company: 'microsoft', value: 'xss', name: 'Xbox Series S' },
            { company: 'nintendo', value: "wiiu", name: "Wii U" },
            { company: 'nintendo', value: "switch", name: "Switch" },
            { company: 'sony', value: 'ps1', name: 'PlayStation' },
            { company: 'sony', value: 'ps2', name: 'PlayStation 2' },
            { company: 'sony', value: 'ps3', name: 'PlayStation 3' },
            { company: 'sony', value: 'ps4', name: 'PlayStation 4' },
            { company: 'sony', value: 'ps5', name: 'PlayStation 5' },
            { company: 'microsoft', value: 'xbox', name: 'Xbox' },
            { company: 'microsoft', value: '360', name: 'Xbox 360' },
            { company: 'microsoft', value: 'xbone', name: 'Xbox One' },
            { company: 'microsoft', value: 'xsx', name: 'Xbox Series X' }
            ],
            optionGroupRegister: function (optgroup) {
            var capitalised = optgroup.charAt(0).toUpperCase() + optgroup.substring(1);
            var group = {
                label: 'Company: ' + capitalised
            };

            group[this.settings.optgroupValueField] = optgroup;

            return group;
            },
            optgroupField: 'company',
            labelField: 'name',
            searchField: ['name','company'],
            sortField: 'name'
        });

    </script>
@endsection



