@props(['data'])
@php

    switch ($data->document_type){
        case 1:
            $icon='<i class="fa-solid fa-id-card-clip"></i>';
            break;
        case 2:
            $icon='<i class="fa-solid fa-certificate"></i>';
            break;
        case 3:
            $icon='<i class="fa-solid fa-certificate"></i> ';
            break;
        default:
            $icon='<i class="fa-solid fa-circle-info"></i>';
            break;
    }
@endphp
<div class="w-full aspect-square bg-neutral-100 rounded-xl p-4 pt-2">
    <div class="flex items-center justify-between gap-2">
        <div class="flex items-center gap-2">
            <div>{!! $icon !!}</div>
            <div class="flex flex-col">
                <span class="w-full truncate">{{$data->title ?? ''}}</span>
            </div>
        </div>
        <div class="">
            <div class="hs-dropdown relative inline-flex">
                <button id="hs-dropdown-with-icons" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>

                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 z-10 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" aria-labelledby="hs-dropdown-with-icons">
                    <div class="py-2 first:pt-0 last:pb-0">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                            <i class="fa-regular fa-pen-to-square"></i>
                            Edit
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                            <i class="fa-regular fa-trash-can"></i>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="mt-1 w-full aspect-square bg-neutral-200 rounded-md overflow-hidden relative group">
        <div class="opacity-0 group-hover:opacity-100 duration-200 absolute z-0 w-full h-20 bottom-0 bg-gradient-to-b from-transparent to-black flex items-end justify-center">
            <p class="truncate text-white pb-4">{{$data->title ?? ''}}</p>
        </div>
    </figure>
</div>
