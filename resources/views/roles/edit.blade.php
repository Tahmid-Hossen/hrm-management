@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="midde_cont">
    <div class="relative col-span-6 md:col-span-5 p-4 pb-0 pt-0">
        <div class="main-container min-h-[calc(100vh_-_120px)]">
            <h3 class="text-2xl py-3 font-bold">
                <a href="#" class="text-primary">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                Edit Role
            </h3>
            <div class="w-full mt-4">
                <form action="https://inventory-stg.nexdecade.com/roles/update/2" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="X18razynt1ty8pwXe5fvP42PIbhUTchP04hBHYdo" autocomplete="off">
                    <div class="rounded-[5px] bg-[#FFFFFF] border border-gray-300 border-t-[3px] border-t-[#DC2626] p-5 pt-3 mb-8" style="box-shadow: 2px 4px 12px -2px rgba(0, 0, 0, 0.2)">
                        <h3 class="text-xl  mt-8"><i class="fa-solid fa-user-shield text-primary"></i> Edit for: <span class="font-semibold">admin</span> </h3>
                        <hr class="my-2 mb-4 border-gray-300">
                        <div class=" flex gap-6 pt-6">
                            <div class="">
                                <div class="flex items-center mt-2">
                                    <label for="checkbox" class="block text-gray-700 text-sm font-bold">Is Active?</label>
                                    <div class="form-control">
                                        <label class="cursor-pointer label">
                                            <input type="checkbox" name="is_active" class="checkbox checkbox-info ml-2 " checked="">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <button type="submit" class="bg-[#DC2626] hover:bg-red-700 text-white font-bold py-2 px-4 pr-6 rounded focus:outline-none focus:shadow-outline">Update</button>
                                <div class="w-1 h-1 relative">
                                    <div class="absolute w-8 h-8 bg-white rounded-[50%] left-[-16px] top-[-14px] text-center text-gray-400 pt-1">or</div>
                                </div>
                                <a href="https://inventory-stg.nexdecade.com/roles" class="bg-gray-200 text-gray-700 font-bold py-2 px-4 pl-6 rounded focus:outline-none focus:shadow-outline">Cancel</a>
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
        <div id="footer" class="w-full text-center text-sm md:text-base py-3">
            <span class="text-red-700">Copyright ©</span>
            <span class="text-red-700">2024</span>
            <span class="font-medium text-teal-700">Nex Inventory.</span>
            <span class="text-red-700">All Rights Reserved</span>
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
