<div class="">
    <input type="hidden" id="emp_id" value="{{$employee->id}}" autocomplete="off">
    <div class="p-4">
        <div class="">
            <label for="employeeCompany" class="inputLabel">
                Select Role
            </label>
            <select id="role" name="role" class="inputField">
                @if(isset($roles))
                    @foreach($roles as $item)
                        <option value="{{$item->id}}" {{$item->name=='staff' ? 'selected' : ''}}>{{$item->name ? strtoupper($item->name) : ''}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="mt-2">
            <label for="employeeCompany" class="inputLabel">
                Select Email
            </label>
            <select id="assignUserEmployeeEmail" name="assignUserEmployeeEmail" class="inputField">
                @if($employee->email!='')
                    <option value="{{$employee->email}}">{{$employee->email}}</option>
                @endif
                @if($employee->personal_email!='')
                    <option value="{{$employee->personal_email}}">{{$employee->personal_email}}</option>
                @endif
            </select>
        </div>

    </div>

    <div class="">
        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" onclick="smallModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                Cancel
            </button>
            <button type="submit" id="assignEmployeeAsUserBtn" onclick="assignEmployeeAsUser({{$employee->id}})" class="submit-button">
                Save
            </button>
        </div>
    </div>
</div>
