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
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end ">
                {{--<div>
                    <label for="search-employee" class="inputLabel">
                        Search Employee
                    </label>
                    <input id="searchKey"  name="icon" class="inputField" placeholder="Search users" />
                </div>--}}

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
                <div class="mb-2">
                    <div class="inline-block hs-tooltip">
                        <button type="button" class="btn-red" id="reset">
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
                    {{--<div class="inline-block hs-tooltip">
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
                    </div>--}}
                    <div class="inline-block hs-tooltip">
                        <a href="{{route('employees.import')}}" type="button" class="btn-export">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-file-earmark-arrow-down"
                                    viewBox="0 0 16 16">
                                <path
                                    d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                            </svg>
                            <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:visible hs-tooltip-shown:opacity-100" role="tooltip">Import</span>
                        </a>
                    </div>
                    <!-- create button -->
                    <div class="inline-block hs-tooltip">
                        <button type="button" onclick="createEmployeeModal.showModal()"
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
                            {{--<th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                EMAIL
                            </th>--}}
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Company
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                DEPARTMENT
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                DESIGNATION
                            </th>
                            {{--<th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Phone
                            </th>--}}
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">
                                Gender
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
@include('employee.create')
@section('scripts')
    <script>
        let dataTable = new DataTable('#dataTable', {
            serverSide: true,
            processing:true,
            /*language: {
                processing: $("#spinner-large").html(),
            },*/
            ajax:{
                url: '{{ route('employees.index') }}',

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
                        return html=`<div class="">${data}</div>`
                    }
                },
                { name: 'department',  data: 'department' },
                { name: 'designation',  data: 'designation' },
                { name: 'gender',  data: 'gender' },
                { name: 'action',  data: 'id', sortable:false,
                    render: function(id, type, row) {
                        let viewProfileBtn=`
                                        <a href="${baseUrl}/employees/view/${row.id}" class="actionBtn neutral">
                                            <i class="fa-regular fa-address-card"></i>
                                        </a>
                                    `

                        let assignUserButton=`
                                        <button type="button" ${row.is_user===1 ? 'disabled' : ''} onclick="assignAsUserPopup(${id})" class="actionBtn teal">
                                            <i class="fa-solid ${row.is_user===1 ? 'fa-user-check' : 'fa-user-gear'} "></i>
                                        </button>
                                    `;
                                    let deletePermission=true;
                                    let deleteButton=`
                                        <button class="actionBtn red" onclick="deletePopup('Delete Emplyee', '${row.full_name}', '${baseUrl}/employees/delete/${row.id}')">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    `
                        if(!deletePermission) deleteButton='';
                        //if(row.is_user===1) assignUserButton=''
                        let html=`<div class="flex items-center justify-center gap-1">${viewProfileBtn}${assignUserButton}${deleteButton}</div>`;
                        return html;
                    }
                },
            ]
        });
        $('#department, #company, #designation').change(function (){
            let department = $('#department').val();
            let company = $('#company').val();
            let designation = $('#designation').val();
            dataTable.ajax.url(`{{ route('employees.index') }}?department=${department}&company=${company}&designation=${designation}`).load();
        });
        $('#reset').click(function (){
            $('#department').val('')
            $('#company').val('');
            $('#designation').val('');
            let department = '';
            let company = '';
            let designation = '';
            dataTable.ajax.url(`{{ route('employees.index') }}?department=${department}&company=${company}&designation=${designation}`).load();
        });
    </script>
@endsection



