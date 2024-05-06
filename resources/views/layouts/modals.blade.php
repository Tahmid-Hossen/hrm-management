<dialog id="largeModal" class="modal">
    <div class="modal-box w-11/12 max-w-5xl p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="largeModalTitle" class="font-bold text-lg"></div>
            <div class="">
                <div class="modal-action mt-0">
                    <form method="dialog">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="largeModalBody">

        </div>


    </div>
</dialog>


<dialog id="deleteModal" class="modal">
    <div class="modal-box  p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="deleteModalTitle" class="font-bold text-lg">Delete</div>
            <div class="">
                <div class="modal-action mt-1">
                    <form method="dialog">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="">
            <div class="text-center p-5 flex-auto justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <div class="text-sm text-gray-500 px-3 mb-2 inline-flex items-center justify-start gap-x-1">
                    Deleted Text: <span class="text-red-600 !text-sm font-medium" id="deletedText"></span>
                    <button onclick="copyToClipboardForDeletePopup()" type='button' class="inline-flex items-center justify-between px-3 py-2 text-black text-xs md:text-sm rounded-md font-medium shadow-md hover:border-transparent hover:bg-[#092635] hover:text-white bg-slate-300">
                        <i class="fa-regular fa-copy"></i>
                    </button>
                </div>
                <p class="label-text text-gray-500 px-8 pb-2">Type deleted text here to proceed</p>
                <input type="text" placeholder="Type deleted text here" class="input input-bordered w-full max-w-xs h-[40px]" id="deletedTextInput" />
            </div>
            <!--footer-->
            <div class="">
                <form action="" method="get" id="deleteForm">
                    <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button" onclick="deleteModal.close()" class="inline-flex items-center px-4 py-2  font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-employee-modal">
                            Cancel
                        </button>
                        <button id="deleteButton" disabled type="submit" {{--onclick="return validateEmployeeData()"--}} class="inline-flex items-center px-4 py-2 font-medium text-center  text-white bg-red-600 hover:bg-red-800 disabled:text-neutral-600 disabled:bg-neutral-200 rounded-lg focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#deletedTextInput").on("input", function () {
                let deletedText=$('#deletedText').html().trim();
                let deletedTextInput=$('#deletedTextInput').val().trim();
                console.log(deletedText, deletedTextInput, deletedText!==deletedTextInput)
                $("#deleteButton").prop("disabled", deletedText!==deletedTextInput);
            });
        })
    </script>
</dialog>
