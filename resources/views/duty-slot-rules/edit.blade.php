<form action="{{ route('dutySlotRules.update', ['id'=>$dutySlotRule->id]) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateDutySlotRules('u_')">
    @csrf
    <div class="p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Select A Slot Name
                </label>
                <select id="u_duty_slot_rules" name="duty_slot_id" class="inputField">
                    @if(isset($dutySlots))
                        <option value="" disabled>Select A Slot Name</option>
                        @foreach ($dutySlots as $item)
                            <option value="{{ $item->id }}" {{$item->id==$dutySlotRule->duty_slot_id ? 'selected' : ''}}>{{ $item->slot_name }}</option>
                        @endforeach
                    @endif
                </select>
                <span class="error_msg" id="error_slot_name"></span>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Start Date
                </label>
                <input type="date" id="u_start_date" name="start_date" value="{{$dutySlotRule->start_date}}" class="inputField">
                <span class="error_msg" id="error_start_date"></span>
            </div>
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    End Date
                </label>
                <input type="date" id="u_end_date" name="end_date" value="{{$dutySlotRule->end_date}}" class="inputField">
                <span class="error_msg" id="error_end_date"></span>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Start Time
                </label>
                <input type="time" id="u_start_time" name="start_time" value="{{$dutySlotRule->start_time}}" class="inputField">
                <span class="error_msg" id="error_start_time"></span>
            </div>
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    Threshold Time
                </label>
                <input type="time" id="u_threshold_time" name="threshold_time" value="{{$dutySlotRule->threshold_time}}" class="inputField">
                <span class="error_msg" id="error_threshold_time"></span>
            </div>
            <div>
                <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                    End Time
                </label>
                <input type="time" id="u_end_time" name="end_time" value="{{$dutySlotRule->end_time}}" class="inputField">
                <span class="error_msg" id="error_end_time"></span>
            </div>
        </div>
    </div>
    <div class="">
        <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" onclick="largeModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                Cancel
            </button>
            <button type="submit" class="submit-button">
                Update
            </button>
        </div>
    </div>
</form>
