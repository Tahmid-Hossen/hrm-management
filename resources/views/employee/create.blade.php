<x-modals.large-modal id="createEmployeeModal" title="Create a new employee">
    <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data" class="mb-0" onsubmit="return validateEmployeeData()">
        @csrf
        <input type="hidden" id="createEmployee" value="1" autocomplete="off">
        <div class="p-4 overflow-y-scroll">
            <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-neutral-700 cst-tab">
                <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 border-b-red-600 text-red-600 active" id="employee-tab-item-1" onclick="activeTab('employee-tab-item-1')" {{--data-hs-tab="#employee-tab-1" aria-controls="employee-tab-1"--}} >
                    Basic Information
                </button>
                <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 " id="employee-tab-item-2" onclick="activeTab('employee-tab-item-2')" {{--data-hs-tab="#employee-tab-2" aria-controls="employee-tab-2"--}}>
                    Additional Information
                </button>
                {{--<button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400" id="employee-tab-item-3" data-hs-tab="#employee-tab-3" aria-controls="employee-tab-3" role="tab">
                    Academic Information
                </button>--}}
            </nav>

            <div class="mt-1">
                <div id="employee-tab-1" role="tabpanel" aria-labelledby="employee-tab-item-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-4  gap-y-0 lg:gap-x-6 lg:gap-y-0">
                        <div>
                            <label for="employeeFullName" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">Full Name *</label>
                            <input id="employeeFullName" name="full_name" autocomplete="off" type="text" class="inputField" placeholder="Mr./Mrs.">
                            <span class="error_msg" id="error_employeeFullName"></span>
                        </div>
                        <div>
                            <label for="employeeId"  class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Employee ID *
                            </label>
                            <input id="employeeId" name="emp_id" autocomplete="off" onkeyup="validateEmployeeSingleData('emp_id', 'employeeId', 'error_employeeId')" type="text" class="inputField" placeholder="C-2343">
                            <span class="error_msg" id="error_employeeId"></span>
                            <input type="hidden" id="isValidate_employeeId" value="0">
                        </div>
                        <div>
                            <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Company
                            </label>
                            <select id="employeeCompany" name="company" class="inputField">
                                @if(isset($companies))
                                    @foreach ($companies as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div>
                            <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Designation
                            </label>
                            <select id="employeeDesignation" name="designation" class="inputField">
                                @if(isset($designations))
                                    @foreach ($designations as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div>
                            <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Department
                            </label>
                            <select id="employeeDesignation" name="emp_department" class="inputField">
                                @if(isset($departments))
                                    @foreach ($departments as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div>
                            <label for="employeeJoiningDate" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Joining Date
                            </label>
                            <input id="employeeJoiningDate" name="joining_date" type="date" class="inputField" placeholder="">
                        </div>
                        <div>
                            <label for="employeeEmail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Email *
                            </label>
                            <input id="employee_email" type="email" name="email"  autocomplete="off" onkeyup="validateEmployeeSingleData('email', 'employee_email', 'error_employee_email')" class="inputField" placeholder="example@nexdecade.com">
                            <span class="error_msg" id="error_employee_email"></span>
                            <input type="hidden" id="isValidate_employee_email" value="0">
                        </div>

                        <div>
                            <label for="employeePhone"  autocomplete="off" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Phone *
                            </label>
                            {{--<span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>--}}
                            <input id="employeePhone" name="phone" onkeyup="validateEmployeeSingleData('phone', 'employeePhone', 'error_employeePhone')" type="text" class="inputField" placeholder="01700-000000">
                            <span class="error_msg" id="error_employeePhone"></span>
                            <input type="hidden" id="isValidate_employeePhone" value="0">
                        </div>
                        <div>
                            <label for="af-account-gender-checkbox" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Gender
                            </label>
                            <ul class="flex flex-col sm:flex-row">
                                <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800" checked="">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                            Male
                                        </label>
                                    </div>
                                </li>

                                <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                            Female
                                        </label>
                                    </div>
                                </li>

                                <li class="inline-flex items-center gap-x-2.5 py-3 px-4 text-sm font-medium bg-neutral-100 dark:bg-neutral-700 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-se-none sm:first:rounded-es-lg sm:last:rounded-es-none sm:last:rounded-se-lg dark:border-neutral-700 dark:text-white">
                                    <div class="relative flex items-start w-full">
                                        <div class="flex items-center h-5">
                                            <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="border-gray-300 rounded-full text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-gray-800">
                                        </div>
                                        <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                            Other
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Duty Slot
                            </label>
                            <select id="" name="duty_slot" class="inputField">
                                @if(isset($dutySlots))
                                    @foreach ($dutySlots as $item)
                                        <option value="{{ $item->id }}">{{ $item->slot_name }} ({{ date('h:ia', strtotime($item->start_time)) }}-{{ date('h:ia', strtotime($item->end_time)) }})</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>


                </div>
                <div id="employee-tab-2" class="hidden" role="tabpanel" aria-labelledby="employee-tab-item-2">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-x-6 lg:gap-y-0 mt-2">
                        <div>
                            <div>
                                <label for="employeeEmmergencyPhone" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Emergency Contact Number
                                </label>
                                <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                                <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="inputField" placeholder="+8801800000000">
                            </div>
                        </div>
                        <div>
                            <label for="employeeBirthday" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Birthday
                            </label>
                            <div class="sm:flex">
                                <input id="employeeBirthday" name="birth_year" type="date" class="inputField" placeholder="">
                            </div>
                        </div>
                        <div>
                            <label for="employeeBloodGroup" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Enter Blood Group
                            </label>
                            @php $bloodGroups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-']; @endphp
                            <select id="employeeBloodGroup" name="blood_group" class="inputField" >
                                <option value="" disabled>Select Blood Group</option>
                                @foreach($bloodGroups as $item)
                                    <option value="{{$item}}"> {{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Employee Profile Photo
                            </label>
                            <input type="file" name="profile_photo" id="employee_photo" accept=".jpg, .jpeg, .png" class="inputField" />
                        </div>

                        <div>
                            <label for="employeeResume" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200 font-medium">
                                Upload Resume
                            </label>
                            <input id="employeeResume" name="employee_resume" type="file" accept=".pdf, .docx, .doc" class="inputField">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="employeePresentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Present Address
                            </label>
                            <textarea id="employeePresentAddress" name="present_address" class="inputField" rows="4" placeholder="Type your address..."></textarea>
                        </div>
                        <div>
                            <label for="employeePermanentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Permanent Address
                            </label>
                            <textarea id="employeePermanentAddress" name="permanent_address" class="inputField" rows="4" placeholder="Type your address..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="">
            <div class="mt-2 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button" onclick="createEmployeeModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                    Cancel
                </button>
                <button type="submit" {{--onclick="return validateEmployeeData()"--}} class="submit-button">
                    Save
                </button>
            </div>
        </div>
    </form>
</x-modals.large-modal>


<script>
        function activeTab(tabId) {
            if(tabId==='employee-tab-item-1'){
                $('#employee-tab-item-1').addClass('active border-b-red-600 text-red-600');
                $('#employee-tab-item-2').removeClass('active border-b-red-600 text-red-600');
                $('#employee-tab-1').removeClass('hidden');
                $('#employee-tab-2').addClass('hidden');
            }
            if(tabId==='employee-tab-item-2'){
                $('#employee-tab-item-2').addClass('active border-b-red-600 text-red-600');
                $('#employee-tab-item-1').removeClass('active border-b-red-600 text-red-600');
                $('#employee-tab-2').removeClass('hidden');
                $('#employee-tab-1').addClass('hidden');
            }
        }
        /*$('#employee-tab-item-1').click(function () {

        });

        $('#employee-tab-item-2').click(function () {
            $('#employee-tab-item-2').addClass('active');
            $('#employee-tab-item-1').removeClass('active');
            $('#employee-tab-2').removeClass('hidden');
            $('#employee-tab-1').addClass('hidden');
        });*/

</script>
