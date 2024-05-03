@extends('layouts.app')
@section('title', 'Employee trashed')
@section('pageTitle', 'Employee trashed')
@section('breadcumb')
    <ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:focus:text-neutral-600"
                href="{{ route('dashboard') }}">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600 dark:hover:text-red-600"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600 dark:hover:text-red-600"
            aria-current="page">
            Employee Profile trashed list
        </li>
    </ol>
@endsection

@section('content')
    <div class="mt-4">
        <div id="update-user-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]" data-hs-overlay-keyboard="
            false">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div
                    class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <!-- Header -->
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Make it User
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600"
                            data-hs-overlay="#update-user-modal">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->



                    <form id="editUserForm">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" id="employeeId" name="employeeId">
                        <input type="hidden" id="employeeData" name="employeeData">


                        <div class="p-4 sm:p-10 overflow-y-auto">
                            <div class="flex gap-x-4 md:gap-x-7">
                                <!-- Icon -->
                                <span
                                    class="flex-shrink-0 inline-flex justify-center items-center size-[46px] sm:w-[62px] sm:h-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                    <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </span>
                                <!-- End Icon -->

                                <div class="grow">
                                    <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                                        Are you sure?
                                    </h3>
                                    <p class="text-gray-500 dark:text-neutral-500 employeeDataText">
                                        You want to sink this employee as user?
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                            <button type="button"
                                class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                No
                            </button>

                            <button id="modal-close" type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Yes
                            </button>
                        </div>



                        <!-- End Body -->


                    </form>
                    <!-- End Footer -->
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')
        <script>
            // function assignRoleModal(ID) {
            //     // var userId = $(this).data('user-id');
            //     let htmlForm = $('#assignRoleModalForm').html();
            //     // let html =`<form method="POST" action="/opop/${id}">${htmlForm}</form>`
            //     $('#smallSizeModalBody').html(htmlForm);
            //     smallSizeModal.showModal();
            //     $('#employeeId').val(ID);
            //     console.log(ID);
            // }


            $(document).ready(function() {
                const modalClose = document.querySelector('#modal-close');

                $('.assignRoleBtn').click(function() {
                    var userId = $(this).data('user-id');
                    var userData = $(this).data('user-data');
                    $('#employeeId').val(userId);
                    $('#employeeData').val(userData);
                    if (userData) {
                        $('.employeeDataText').html(' You want remove from user.');
                    } else {
                        $('.employeeDataText').html(' You want sync with user.');
                    }
                    console.log(userId);
                });



                $('#editUserForm').submit(function(e) {
                    $('#modal-close').text('Processing...');
                    e.preventDefault();
                    var userId = $('#employeeId').val();
                    var csrfToken = $('input[name="_token"]').val();
                    // AJAX request to update user data
                    $.ajax({
                        method: 'post',
                        url: '/employees/employee-permission/' + userId, // Adjust URL as per your route
                        data: $(this).serialize(),
                        headers: {
                            'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response) {
                            $('#modal-close').text('Yes');
                            // Handle success
                            console.log("User data updated successfully:", response);

                            modalClose.addEventListener('click', () => {
                                HSOverlay.close('#update-user-modal');
                            });

                            toastr.success('Successfully Updated user', 'Congratulation!');
                            window.location.reload();


                            // Close the modal
                            $('#editUserModal').hide();
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $('#modal-close').text('Yes');
                            // Handle error
                            modalClose.addEventListener('click', () => {
                                HSOverlay.close('#update-user-modal');
                            });
                            toastr.success('Something went wrong, Please try again', 'Opps!');
                            console.error("Error updating user data:", errorThrown);
                        }
                    });
                });

            });
        </script>
    @endsection
