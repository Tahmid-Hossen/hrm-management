<dialog id="createDutySlotRuleModal" class="modal">
    <div class="modal-box w-11/12 max-w-5xl p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="createEmployeeModalTitle" class="font-bold text-lg">Create Duty Slot Rule</div>
            <div class="">
                <div class="modal-action mt-0">
                    <form method="dialog">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="createDutySlotRuleModalBody">
            <form action="{{ route('dutySlotRules.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateDutySlotRules()">
                @csrf
                <div class="p-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Select A Slot Name
                            </label>
                            <select id="duty_slot_rules" name="duty_slot_id" class="inputField">
                                @if(isset($dutySlots))
                                    <option value="" disabled selected>Select A Slot Name</option>
                                    @foreach ($dutySlots as $item)
                                        <option value="{{ $item->id }}">{{ $item->slot_name }}</option>
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
                            <input type="date" id="start_date" name="start_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="error_start_date"></span>
                        </div>
                        <div>
                            <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                End Date
                            </label>
                            <input type="date" id="end_date" name="end_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="error_end_date"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Start Time
                            </label>
                            <input type="time" id="start_time" name="start_time" class="inputField">
                            <span class="error_msg" id="error_start_time"></span>
                        </div>
                        <div>
                            <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                Threshold Time
                            </label>
                            <input type="time" id="threshold_time" name="threshold_time" class="inputField">
                            <span class="error_msg" id="error_threshold_time"></span>
                        </div>
                        <div>
                            <label for="dutySlotRules" class="inline-block font-medium text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
                                End Time
                            </label>
                            <input type="time" id="end_time" name="end_time" class="inputField">
                            <span class="error_msg" id="error_end_time"></span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button" onclick="createDutySlotRuleModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                            Cancel
                        </button>
                        <button type="submit" class="submit-button">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>

<script>

</script>
