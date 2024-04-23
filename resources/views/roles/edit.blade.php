@extends('layouts.app')
@section('title', 'Edit Role')
@section('pageTitle', 'Edit Role')

@section('breadcumb')
    <ol class="flex items-center mt-2 whitespace-nowrap mr-2">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
               href="#">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600"
            aria-current="page">
            Edit Role
        </li>
    </ol>
@endsection

@section('content')
<div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
    <div class="relative col-span-6 md:col-span-5 pb-0 pt-0">
        <div class="">
            <div class="w-full mt-4">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="X18razynt1ty8pwXe5fvP42PIbhUTchP04hBHYdo" autocomplete="off">
                    <div class="p-5 pt-3">
                        <h3 class="text-xl text-gray-600 dark:text-neutral-200"><i class="fa-solid fa-user-shield text-primary"></i> Edit for: <span class="font-semibold text-red-600 dark:text-red-800">admin</span> </h3>
                        <hr class="my-2 mb-4 border-neutral-200 dark:border-neutral-700">
                        <div class=" flex gap-6 pt-6">
                            <div class="">
                                <div class="flex items-center mt-2">
                                    <label for="checkbox" class="block text-red-600 text-sm font-bold">Is Active?</label>
                                    <div class="form-control">
                                        <label class="cursor-pointer label">
                                            <input type="checkbox" name="is_active" class="shrink-0 mt-0.5 border-gray-200 rounded text-red-600 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-red-500 dark:checked:border-red-500 dark:focus:ring-offset-red-800 ml-2 " checked="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Update</button>
                                <div class="w-1 h-1 relative">
                                    <div class="absolute w-8 h-8 bg-white rounded-[50%] left-[-16px] top-[-14px] text-center text-gray-400 pt-1">or</div>
                                </div>
                                <a href="https://inventory-stg.nexdecade.com/roles" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">Cancel</a>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                    </div>

                </form>
            </div>

            <dialog id="smallModal" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <div id="smallModalBody"></div>
                </div>
            </dialog>
            <dialog id="halfWidthModal" class="modal">
                <div class="modal-box lg:w-5/12 md:lg:w-5/12 sm:w-11/12 max-w-5xl">
                    <form method="dialog" class="relative">
                        <button class="btn btn-sm btn-circle btn-ghost absolute z-10 bg-slate-200 hover:bg-slate-400 right-2 top-2 fixed">✕</button>
                    </form>
                    <div id="linksModalBody"></div>
                </div>
            </dialog>
            <dialog id="fullWidthModal" class="modal">
                <div class="modal-box w-11/12 max-w-5xl">
                    <form method="dialog" class="relative">
                        <button class="btn btn-sm btn-circle btn-ghost absolute z-10 bg-slate-200 hover:bg-slate-400 right-[-20px] top-[-20px] fixed">✕</button>
                    </form>
                    <div id="fullWidthModalBody"></div>
                </div>
            </dialog>
            <dialog id="fullWidthModalCloseIconFixed" class="modal">
                <div class="modal-box w-11/12 max-w-5xl relative">
                    <form method="dialog" class="sticky top-0 right-0">
                        <button class="btn btn-sm btn-circle btn-ghost bg-slate-200 hover:bg-[#06848a] hover:text-white absolute top-[-20px] right-[-20px] border border-gray-500 shadow-[0px_2px_8px_rgba(0,0,0,0.4)]">✕</button>
                    </form>
                    <div id="fullWidthModalCloseIconFixedBody"></div>
                </div>
            </dialog>
            <dialog id="fullWidthModal2" class="modal">
                <div class="modal-box pb-3 px-4 w-11/12 max-w-5xl">
                    <form method="dialog" class="relative">
                        <button class="btn btn-sm btn-circle btn-ghost absolute z-10 bg-slate-200 hover:bg-[#029397] hover:text-white right-2 top-[-0.7rem] fixed">✕</button>
                    </form>
                    <div id="fullWidthModalBody2"></div>
                </div>
            </dialog>
        </div>

    </div>
</div>

<script>
    $(function() {
        let isWidthSearch=$('#myGrid').hasClass('grid-withSearch');
        if(isWidthSearch){
            $('#footer').addClass('py-2').removeClass('py-3');
        }else{
            $('#footer').removeClass('py-2').addClass('py-3');
        }
    });
</script>

@endsection
