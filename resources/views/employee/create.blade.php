

<form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateEmployeeData()">
    @csrf
    <div class="p-4 overflow-y-scroll">
        <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-neutral-700" aria-label="Tabs" role="tablist">
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 active" id="employee-tab-item-1" data-hs-tab="#employee-tab-1" aria-controls="employee-tab-1" role="tab">
                Basic Information
            </button>
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400 " id="employee-tab-item-2" data-hs-tab="#employee-tab-2" aria-controls="employee-tab-2" role="tab">
                Additional Information
            </button>
            <button type="button" class="hs-tab-active:border-b-red-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white relative dark:hs-tab-active:border-b-red-600 min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-l-neutral-700 dark:border-b-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-400" id="employee-tab-item-3" data-hs-tab="#employee-tab-3" aria-controls="employee-tab-3" role="tab">
                Academic Information
            </button>
        </nav>

        <div class="mt-3">
            <div id="employee-tab-1" role="tabpanel" aria-labelledby="employee-tab-item-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="employeeFullName" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">Employee Name</label>
                        <input id="employeeFullName" name="full_name" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Maria">
                        <span class="error_msg" id="error_employeeFullName"></span>
                    </div>
                    <div>
                        <label for="employeeId" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Employee Id
                        </label>
                        <input id="employeeId" name="emp_id" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="#EMP0000001">
                        <span class="error_msg" id="error_employeeId"></span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Company
                        </label>
                        <select id="employeeCompany" name="company_name" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Select Company</option>
                            <option>Nexdecade Technology</option>
                            <option>M2M Communication</option>
                        </select>
                    </div>

                    <div>
                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Designation
                        </label>
                        <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @if(isset($designations))
                                @foreach ($designations as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                    <div>
                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Department
                        </label>
                        <select id="employeeDesignation" name="emp_department" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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
                        <input id="employeeJoiningDate" name="joining_date" type="date" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                    </div>
                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">

                    <div>
                        <label for="employeeEmail" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Email
                        </label>
                        <input id="employee_email" type="email" name="email" onkeyup="validateEmail('employee_email', 'email', 'error_employee_email')" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="maria@site.com">
                        <span class="error_msg" id="error_employee_email"></span>
                    </div>

                    <div>
                        <label for="employeePhone" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Phone
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                        <input id="employeePhone" name="phone" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
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
                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Enter Blood Group
                        </label>
                        <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option value="A+" selected >A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>

            </div>
            <div id="employee-tab-2" class="hidden" role="tabpanel" aria-labelledby="employee-tab-item-2">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                    <div>
                        <div>
                            <label for="employeeEmmergencyPhone" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Emergency Contact Number
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                            <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+8801800000000">
                        </div>
                    </div>
                    <div>
                        <label for="employeeBirthday" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Birthday
                        </label>
                        <div class="sm:flex">
                            <input id="employeeBirthday" name="birth_year" type="date" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Employee Profile Photo
                        </label>
                        <input type="file" name="profile_photo" id="employee_photo" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" />
                    </div>

                    <div>
                        <label for="employeeResume" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200 font-medium">
                            Upload Resume
                        </label>
                        <input id="employeeResume" name="employee_resume" type="file" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="employeePresentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Present Address
                        </label>
                        <textarea id="employeePresentAddress" name="present_address" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                    </div>
                    <div>
                        <label for="employeePermanentAddress" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Permanent Address
                        </label>
                        <textarea id="employeePermanentAddress" name="permanent_address" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" placeholder="Type your address..."></textarea>
                    </div>
                </div>
            </div>
            <div id="employee-tab-3" class="hidden" role="tabpanel" aria-labelledby="employee-tab-item-3">
                <h3 class="text-sm text-gray-800 dark:text-white capitalize">Education - One</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="institution_name_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Instituation Name
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                        <input id="institution_name_one" name="institution_name[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter institution name">
                    </div>
                    <div>
                        <div>
                            <label for="degree_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select Degree Type
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                            <select id="degree_one" name="degree[]" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected="">Select Degree</option>
                                <option value="SSC">SSC</option>
                                <option value="HSC">HSC</option>
                                <option value="BSC">BSC</option>
                                <option value="MSC">MSC</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="department_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Department Name
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                            <input id="department_one" name="department[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter department">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                    <div>
                        <label for="passing_year_one" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Passing Year
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>
                        <input id="passing_year_one" name="passing_year[]" type="number" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                    </div>
                    <div>
                        <div>
                            <label for="result_one" class="inline-block text-sm  font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                Result
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">(Optional)</span>

                            <input id="result_one" name="result[]" type="text" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="enter passing year">
                        </div>
                    </div>

                </div>

                <div id="education-fields">
                    <!-- Dynamic education fields will be added here -->

                </div>

                <div class="mt-4">
                    <button id="add-education-field" class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                            <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                        </svg>Add Education</button>
                </div>

            </div>
        </div>

    </div>
    <div class="">
        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button"onclick="largeModal.close()" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-employee-modal">
                Cancel
            </button>
            <button type="button" onclick="return validateEmployeeData()" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                Save
            </button>
        </div>
    </div>
</form>
<script>
    $('#employee-tab-item-1').click(function (){
        $('#employee-tab-item-1').addClass('active');
        $('#employee-tab-item-2, #employee-tab-item-3').removeClass('active');
        $('#employee-tab-1').removeClass('hidden');
        $('#employee-tab-2, #employee-tab-3').addClass('hidden');
    });

    $('#employee-tab-item-2').click(function (){
        $('#employee-tab-item-2').addClass('active');
        $('#employee-tab-item-1, #employee-tab-item-3').removeClass('active');
        $('#employee-tab-2').removeClass('hidden');
        $('#employee-tab-1, #employee-tab-3').addClass('hidden');
    });

    $('#employee-tab-item-3').click(function (){
        $('#employee-tab-item-3').addClass('active');
        $('#employee-tab-item-1, #employee-tab-item-2').removeClass('active');
        $('#employee-tab-3').removeClass('hidden');
        $('#employee-tab-1, #employee-tab-2').addClass('hidden');
    });

</script>
