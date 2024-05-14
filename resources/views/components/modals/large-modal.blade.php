@props(['id'=>'largeModalExample', 'title'=>'Title', 'footer'=>''])
<dialog id="{{$id}}" class="modal">
    <div class="modal-box w-11/12 max-w-5xl p-0 relative border border-neutral-200">
        <div class="flex justify-between items-center border-b p-2 pl-4">
            <div id="{{$id}}Title" class="font-bold text-lg">{{$title}}</div>
            <div class="">
                <div class="modal-action mt-0">
                    <form method="dialog" class="mb-0">
                        <button class="w-9 aspect-square rounded-full bg-neutral-50 hover:bg-red-600 hover:text-white duration-200"><i class="fa-solid fa-xmark"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div id="{{$id}}Body">
            {{$slot}}
        </div>
    </div>
</dialog>
