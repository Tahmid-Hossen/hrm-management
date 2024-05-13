<dialog id="attendanceSyncModal" class="modal">
    <div class="modal-box w-11/12 max-w-5xl p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="attendanceSyncModalTitle" class="font-bold text-lg">Sync Attendance Data</div>
            <div class="">
                <div class="modal-action mt-0">
                    <form method="dialog">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="attendanceSyncModalBody">
            <form action="{{ route('attendance.sync') }}" method="POST">
                @csrf
                <div class="p-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mt-2">
                        <div>
                            <label for="employeeCompany" class="inputLabel">
                                Start Date
                            </label>
                            <input type="date" id="start_date" name="start_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="error_start_date"></span>
                        </div>
                        <div>
                            <label for="employeeCompany" class="inputLabel">
                                End Date
                            </label>
                            <input type="date" id="end_date" name="end_date" value="{{date('Y-m-d')}}" class="inputField">
                            <span class="error_msg" id="error_end_date"></span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button" onclick="attendanceSyncModal.close()" class="cancel-button" data-hs-overlay="#create-new-employee-modal">
                            Cancel
                        </button>
                        <button type="submit" id="syncBtn" class="submit-button">
                            Sync
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</dialog>

<script>
    $('#syncBtn').click(function () {
        $('#syncBtn').html($('#spinner-small-white').html()+' Syncing')
    })
</script>
