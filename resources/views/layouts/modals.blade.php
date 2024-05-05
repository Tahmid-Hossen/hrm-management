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

<dialog id="smallSizeModal" class="modal">
    <div class="modal-box p-0 md:max-w-2xl md:w-full relative bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <form method="dialog" class="sticky top-0 right-0">
            <button class="absolute top-3 right-4 flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </form>
        <div class="" id="smallSizeModalBody">

        </div>

    </div>
</dialog>

