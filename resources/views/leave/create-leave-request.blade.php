{{-- <select id="duty_slot_rules" name="duty_slot_id" class="inputField">
        @if(isset($dutySlots))
            <option value="" disabled selected>Select A Slot Name</option>
            @foreach ($dutySlots as $item)
                <option value="{{ $item->id }}">{{ $item->slot_name }}</option>
            @endforeach
        @endif
    </select> --}}
<dialog id="createLeaveRequestModal" class="modal">
    <div class="modal-box w-11/12 max-w-5xl p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="createEmployeeModalTitle" class="font-bold text-lg">Create a Leave Request</div>
            <div class="">
                <div class="modal-action mt-0">
                    <form method="dialog">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="createLeaveRequestModalBody">
            <form action="{{ route('leaveRequest.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateLeaveRequest('c_')">
                @csrf
                <div class="p-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 lg:gap-4 mt-2">
                        <div class="col-span-1">
                            <label for="select_employeeX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select An Employee <span class="text-red-600">*</span>
                            </label>

                            <select id="c_select_employee" class="" placeholder="Select an employee..."></select>
                            <span class="error_msg" id="c_error_select_employee"></span>
                        </div>
                        <div class="col-span-1">
                            <label for="leave_typeX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Leave Type <span class="text-red-600">*</span>
                            </label>
                            <ul class="flex flex-col sm:flex-row" id="c_leave_type">
                                <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                    <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked="">
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                                        Casual <span class="text-teal-600 dark:text-teal-300">(0/10)</span>
                                    </label>
                                    </div>
                                </li>

                                <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                    <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                                        Sick <span class="text-teal-600 dark:text-teal-300">(0/15)</span>
                                    </label>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                    <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                                        Annual <span class="text-teal-600 dark:text-teal-300">(0/5)</span>
                                    </label>
                                    </div>
                                </li>

                                <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                    <div class="flex items-center h-5">
                                        <input id="hs-horizontal-list-group-item-radio-4" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-4" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                                        Others
                                    </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="leaveRequestX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Start Date
                            </label>
                            <input type="date" id="c_start_date" name="start_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="c_error_start_date"></span>
                        </div>
                        <div>
                            <label for="leaveRequestY" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                End Date
                            </label>
                            <input type="date" id="c_end_date" name="end_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="c_error_end_date"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="leave_reasonX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Leave Reason
                            </label>
                            <textarea id="c_leave_reason" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="2" placeholder="Please tell us your leave reason."></textarea>

                            <span class="error_msg" id="c_error_leave_reason"></span>
                        </div>
                        <div>
                            <label for="c_leave_remarks" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Leave Remarks
                            </label>
                            <textarea id="leave_remarks" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="2" placeholder="Remarks."></textarea>
                            <span class="error_msg" id="c_error_leave_remarks"></span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button" onclick="createLeaveRequestModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                            Cancel
                        </button>
                        <button type="submit" class="submit-button">
                            request
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>
{{-- <form action="{{ route('leaveRequest.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateLeaveRequest('c_')">
    @csrf
    <div class="p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 lg:gap-4 mt-2">
            <div class="col-span-1">
                <label for="select_employeeX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Select An Employee <span class="text-red-600">*</span>
                </label>
                <select id="c_select_employee" class="" placeholder="Select an employee..."></select>
                <span class="error_msg" id="c_error_select_employee"></span>
            </div>
            <div class="col-span-1">
                <label for="leave_typeX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Leave Type <span class="text-red-600">*</span>
                </label>
                <ul class="flex flex-col sm:flex-row" id="c_leave_type">
                    <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                        <div class="flex items-center h-5">
                            <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" checked="">
                        </div>
                        <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                            Casual <span class="text-teal-600 dark:text-teal-300">(0/10)</span>
                        </label>
                        </div>
                    </li>

                    <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                        <div class="flex items-center h-5">
                            <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                            Sick <span class="text-teal-600 dark:text-teal-300">(0/15)</span>
                        </label>
                        </div>
                    </li>
                    <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                        <div class="flex items-center h-5">
                            <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                            Annual <span class="text-teal-600 dark:text-teal-300">(0/5)</span>
                        </label>
                        </div>
                    </li>

                    <li class="inline-flex items-center gap-x-2 py-3 px-2 text-sm font-medium bg-white border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-white">
                        <div class="relative flex items-start w-full">
                        <div class="flex items-center h-5">
                            <input id="hs-horizontal-list-group-item-radio-4" name="hs-horizontal-list-group-item-radio" type="radio" class="border-gray-200 rounded-full disabled:opacity-50 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <label for="hs-horizontal-list-group-item-radio-4" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-500 cursor-pointer">
                            Others
                        </label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="leaveRequestX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Start Date
                </label>
                <input type="date" id="c_start_date" name="start_date" value="{{date('Y-m-d')}}" class="inputField">
                <span class="error_msg" id="c_error_start_date"></span>
            </div>
            <div>
                <label for="leaveRequestY" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    End Date
                </label>
                <input type="date" id="c_end_date" name="end_date" value="{{date('Y-m-d')}}" class="inputField">
                <span class="error_msg" id="c_error_end_date"></span>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="leave_reasonX" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Leave Reason
                </label>
                <textarea id="c_leave_reason" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="2" placeholder="Please tell us your leave reason."></textarea>

                <span class="error_msg" id="c_error_leave_reason"></span>
            </div>
            <div>
                <label for="c_leave_remarks" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Leave Remarks
                </label>
                <textarea id="leave_remarks" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="2" placeholder="Remarks."></textarea>
                <span class="error_msg" id="c_error_leave_remarks"></span>
            </div>
        </div>
    </div>
    <div class="">
        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" onclick="createLeaveRequestModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                Cancel
            </button>
            <button type="submit" class="submit-button">
                request
            </button>
        </div>
    </div>
</form> --}}

