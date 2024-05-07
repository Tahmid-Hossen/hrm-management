{{-- Personal Information --}}
<div class="bg-white dark:bg-neutral-800 "id="personal-details-edit">
    <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mt-3">
            <div>
                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="employeeFullName" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Employee Name
                        </label>
                        <input id="employeeFullName" name="full_name" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->full_name }}"  />
                    </div>
                    <div>
                        <label for="employeeId" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Employee Id
                        </label>
                        <input  id="employeeId" name="emp_id" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emp_id }}"  />
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="employeeEmail" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Email
                        </label>
                        <input id="employee_email" type="email" name="email" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->email }}"  />
                    </div>

                    <div>
                        <label for="employeeBloodGroup" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Blood Group
                        </label>
                        <select id="employeeBloodGroup" name="blood_group" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
                            <option value="" selected >Select Blood Group</option>
                            <option value="A+" {{ $employee->blood_group == 'A+' ? 'selected' : '' }}> A+ </option>
                            <option value="A-" {{ $employee->blood_group == 'A-' ? 'selected' : '' }}> A- </option>
                            <option value="B+" {{ $employee->blood_group == 'B+' ? 'selected' : '' }}>B+</option>
                            <option value="B-" {{ $employee->blood_group == 'B-' ? 'selected' : '' }}>B-</option>
                            <option value="O+" {{ $employee->blood_group == 'O+' ? 'selected' : '' }}>O+</option>
                            <option value="O-" {{ $employee->blood_group == 'O-' ? 'selected' : '' }}>O-</option>
                            <option value="AB+" {{ $employee->blood_group == 'AB+' ? 'selected' : '' }}>AB+</option>
                            <option value="AB-" {{ $employee->blood_group == 'AB-' ? 'selected' : '' }}>AB-</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="employeeJoiningDate" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Joining Date
                        </label>
                        <input id="employeeJoiningDate" name="joining_date" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->joining_date }}"  />
                    </div>
                    <div>
                        <label for="employeeCompany" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Company
                        </label>
                        <select id="employeeCompany" name="company_name" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
                            <option value="" selected >Select Company</option>
                            <option value="Nexdecade Technology" {{ $employee->company_name == 'Nexdecade Technology' ? 'selected' : '' }}>Nexdecade Technology</option>
                            <option value="M2M Communication" {{ $employee->company_name == 'M2M Communication' ? 'selected' : '' }}>M2M Communication</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="employeeDesignation" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                            Select Designation
                        </label>
                        <select id="employeeDesignation" name="designation" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @foreach ($designations as $designation)
                                {{-- <option value="{{ $department->id }}"> --}}
                                <option value="{{ $designation->id }}" {{ $designation->id == $employee->designation ? 'selected' : '' }}>
                                    {{ $designation->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="employeePhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200"> Phone </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600"> (Optional)</span>
                        <input id="employeePhone" name="phone" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->phone }}"  />
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="employeeEmmergencyPhone" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">Emergency Contact </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600"> (Optional) </span>
                        <input id="employeeEmmergencyPhone" name="emergency_contact" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->emergency_contact }}"  />
                    </div>
                    <div>
                        <label for="employeeBirthday" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Birthday
                        </label>
                        <div class="sm:flex">
                            <input id="employeeBirthday" name="birth_year" type="date" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->birth_year }}"  />
                        </div>
                    </div>


                </div>

                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                    <div>
                        <label for="af-account-gender-checkbox" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Gender
                        </label>
                        <ul class="flex flex-col sm:flex-row">
                            <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex w-full items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="hs-horizontal-list-group-item-radio-1" value="Male" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800" checked=""  />
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-1" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                        Male
                                    </label>
                                </div>
                            </li>

                            <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex w-full items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="hs-horizontal-list-group-item-radio-2" value="Female" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800"  />
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-2" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                        Female
                                    </label>
                                </div>
                            </li>

                            <li class="-mt-px inline-flex items-center gap-x-2.5 border bg-neutral-100 px-4 py-3 text-sm font-medium text-gray-800 first:mt-0 first:rounded-t-lg last:rounded-b-lg dark:border-neutral-700 dark:bg-neutral-700 dark:text-white sm:-ms-px sm:mt-0 sm:first:rounded-es-lg sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-se-lg">
                                <div class="relative flex w-full items-start">
                                    <div class="flex h-5 items-center">
                                        <input id="hs-horizontal-list-group-item-radio-3" value="Other" name="gender" type="radio" class="rounded-full border-gray-300 text-red-600 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-500 dark:bg-neutral-800 dark:checked:border-red-500 dark:checked:bg-red-500 dark:focus:ring-offset-gray-800"  />
                                    </div>
                                    <label for="hs-horizontal-list-group-item-radio-3" class="ms-3 block w-full text-sm text-gray-600 dark:text-neutral-300">
                                        Other
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <label for="employeePhoto" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                            Employee Profile Photo
                        </label>
                        <input type="file" name="profile_photo" id="employee_photo" class="py-3 px-4 block w-full bg-neutral-100 dark:bg-neutral-700 border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none  dark:border-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $employee->profile_photo }}"  />
                    </div>
                </div>
            </div>
            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn">
                    Close
                </button>

                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
{{-- End Personal Information --}}

{{-- Address Information --}}
<div class="bg-white dark:bg-neutral-800" id="address-details-edit">
    <form
        action="{{ route("employees.address.update", $employee->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="mt-3">
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                <div>
                    <label for="employeePresentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Present Address
                    </label>
                    <textarea id="employeePresentAddress" name="present_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->present_address ?? '' }}">
                        {{ $employee->present_address ?? '' }}
                    </textarea>
                </div>
                <div>
                    <label for="employeePermanentAddress" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Permanent Address
                    </label>
                    <textarea id="employeePermanentAddress" name="permanent_address" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="4" value="{{ $employee->permanent_address ?? '' }}">
                        {{ $employee->permanent_address ?? '' }}
                    </textarea>
                </div>
            </div>

            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn-for-address">
                    Close
                </button>
                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
{{-- End Address Information --}}

{{-- Education Information --}}
<div class="bg-white dark:bg-neutral-800" id="education-details-edit">

    <form
        action="{{ route("employees.education.update", $employee->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        {{-- {{$employee->empEducation}} --}}
        {{-- {{ route("employees.store") }} --}}
        @csrf
        @foreach ($employee->empEducation as $education)
            <div class="mt-3">
                <!-- Education -->
                <h3 class="text-sm capitalize text-gray-800 dark:text-white">
                    Education - One
                </h3>
                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:gap-6">
                    <div>
                        <label for="institution_name_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Instituation Name
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                            (Optional)
                        </span>
                        <input id="institution_name_one" name="institution_name[]" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $education->institution_name }}" disabled/>
                    </div>
                    <div>
                        <div>
                            <label for="degree_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Select Degree Type
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">
                                (Optional)
                            </span>

                            <select id="degree_one" name="degree[]" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="SSC" {{ $education->degree == 'SSC' ? 'selected' : '' }} disabled>
                                    SSC
                                </option>
                                <option value="HSC" {{ $education->degree == 'HSC' ? 'selected' : '' }}>
                                    HSC
                                </option>
                                <option value="BSC" {{ $education->degree == 'BSC' ? 'selected' : '' }}>
                                    BSC
                                </option>
                                <option value="MSC" {{ $education->degree == 'MSC' ? 'selected' : '' }}>
                                    MSC
                                </option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="department_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Department Name
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">
                                (Optional)
                            </span>

                            <input id="department_one" name="department[]" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $education->department }}" disabled />
                        </div>
                    </div>
                </div>
                <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-3 lg:gap-6">
                    <div>
                        <label for="passing_year_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Passing Year
                        </label>
                        <span class="text-sm text-gray-400 dark:text-neutral-600">
                            (Optional)
                        </span>
                        <input id="passing_year_one" name="passing_year[]" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $education->passing_year }}" disabled />
                    </div>
                    <div>
                        <div>
                            <label for="result_one" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                                Result
                            </label>
                            <span class="text-sm text-gray-400 dark:text-neutral-600">
                                (Optional)
                            </span>

                            <input id="result_one" name="result[]" type="text" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ $education->result }}" disabled/>
                        </div>
                    </div>
                </div>




            </div>
            <div id="education-fields">
                <!-- Dynamic education fields will be added here -->
            </div>

            <hr class="my-1">
        @endforeach
        <div class="mt-4">
            <button id="add-education-field" type="button" class="inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                    <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
                Add Education
            </button>
        </div>
        <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
            <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn-for-education">
                Close
            </button>

            <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                Update
            </button>
        </div>
    </form>

</div>
{{-- End Education Information --}}

{{-- Documents Information --}}
<div class="bg-white dark:bg-neutral-800" id="documents-details-edit">
    <form
        action="{{ route("employees.documents.update", $employee->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <div class="mt-3">
            <div class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:gap-6">
                <div>
                    <p><strong class="text-red-700">Previous Documents: </strong>{{$employee->employee_resume}}</p>
                    <label for="employeeResume" class="mt-2.5 inline-block text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Upload Resume
                    </label>
                    <input id="employeeResume" name="employee_resume" type="file" class="block w-full rounded-lg border border-gray-200 bg-neutral-100 px-4 py-3 text-sm focus:border-red-500 focus:ring-red-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-700 dark:text-neutral-300 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" />
                </div>
            </div>
            <div class="mt-5 flex items-center justify-end gap-x-2 border-t px-4 py-3 dark:border-neutral-700">
                <button type="button" class="inline-flex items-center rounded-lg bg-black px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" id="close-form-btn-for-documets-four">
                    Close
                </button>
                <button type="submit" class="inline-flex items-center rounded-lg bg-red-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Update
                </button>
            </div>
        </div>
    </form>
</div>
{{-- End Documents Information --}}

