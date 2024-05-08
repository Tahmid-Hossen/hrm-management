@props(['data', 'employee'])
@php

    $fileType=$data->file_type;
    $fileName=$data->file_name;
    $display='';
    $fileURL='';
    $downloadedFileName='';
    $icon='';
    switch ($fileType){
        case 'pdf':
            $fileURL=asset("uploads/employees/{$employee->emp_id}/documents/{$data->file_name}");
            $display='<iframe src="'.$fileURL.'" width="100%" height="100%"></iframe>';
            $downloadedFileName="{$employee->emp_id}_{$employee->full_name}_{$fileName}";
            $icon='<img src="https://img.icons8.com/fluency/48/pdf.png" width="24px">';
            break;
        case 'document':
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            if($extension=='xlsx' || $extension=='xls') $display='<img src="https://img.icons8.com/fluency/48/pdf.png" width="160px">';
            break;
        default:

            break;
    }
@endphp
<div class="w-full aspect-square bg-neutral-100 border shadow-lg rounded-xl p-4 pt-2">
    <div class="flex items-center justify-between gap-2">
        <div class="flex items-center gap-2">
            <div class="">{!! $icon !!}</div>
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
                        <a  href="{{$fileURL}}" download="{{$downloadedFileName}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            <i class="fa-solid fa-download"></i>
                            Download
                        </a>
                        <a href="javascript:(0)" onclick="deletePopup('Are you sure deleting Document?', '{{$data->title}}', '{{route('employee.delete.document', ['id'=>$data->id])}}')" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            <i class="fa-regular fa-trash-can"></i>
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <figure class="mt-1 w-full aspect-square bg-neutral-200 border rounded-md overflow-hidden relative group">
        <div class="w-full h-full flex items-center justify-center bg-white">
            {!! $display !!}
        </div>
        <div class="opacity-0 group-hover:opacity-100 duration-200 absolute z-0 w-full bottom-0 bg-neutral-800 flex items-end justify-center">
            <p class="truncate text-white p-2">{{$data->documentType->name ?? ''}}</p>
        </div>
    </figure>
</div>
