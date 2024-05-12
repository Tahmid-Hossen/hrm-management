@props(['data', 'employee'])
@php

    $fileType=$data->file_type;
    $fileName=$data->file_name;
    $display='';
    $fileURL=asset("uploads/employees/{$employee->emp_id}/documents/{$data->file_name}");
    $downloadedFileName="{$employee->emp_id}_{$employee->full_name}_{$fileName}";
    $downloadedFileName='';
    $icon='';
    $color='';
    switch ($fileType){
        case 'pdf':
            $display='<iframe src="'.$fileURL.'" width="100%" height="100%"></iframe>';
            $icon='<img src="https://img.icons8.com/fluency/48/pdf.png" width="24px">';
            $color='#dc2626';
            break;
        case 'document':
            $extension = pathinfo($fileName, PATHINFO_EXTENSION);
            if($extension=='xlsx' || $extension=='xls'){
                $icon='<img src="https://img.icons8.com/color/48/microsoft-excel-2019--v1.png" width="24px">';
                $display='<img src="https://img.icons8.com/clouds/500/microsoft-excel-2019.png" width="120px">';
                $color='#27663F';
            }
            if($extension=='docx' || $extension=='doc') {
                $icon='<img src="https://img.icons8.com/color/48/microsoft-word-2019--v2.png" width="24px">';
                $display='<img src="https://img.icons8.com/bubbles/500/ms-word.png" width="120px">';
                $color='#1d4ed8';
            }
            if($extension=='pptx' || $extension=='ppt') {
                $icon='<img src="https://img.icons8.com/color/48/microsoft-powerpoint-2019--v1.png" width="24px">';
                $display='<img src="https://img.icons8.com/bubbles/500/ms-powerpoint.png" width="120px">';
                $color='#DC4C2C';
            }
            break;
        case 'text':
            $icon='<img src="https://img.icons8.com/papercut/60/txt.png" width="24px">';
            $display='<img src="https://img.icons8.com/bubbles/500/document.png" width="120px">';
            $color='#282C34';
            break;
        case 'image':
            $icon='<img src="https://img.icons8.com/stencil/96/image.png" width="24px">';
            $display='<img src="'.$fileURL.'" style="max-width:100%; max-height:100%">';
            $color='#ED0049';
            break;
        case 'compressed':
            $icon='<img src="https://img.icons8.com/dusk/64/zip.png" width="24px">';
            $display='<img src="https://img.icons8.com/bubbles/100/zip.png" width="100px">';
            $color='#72a4a7';
            break;
        default:
            $icon='<img src="https://img.icons8.com/emoji/48/question-mark-emoji.png" width="24px">';
            $display='<img src="https://img.icons8.com/bubbles/100/question-mark.png" width="100px">';
            $color='#282C34';
            break;
    }
@endphp
<div class="w-full  bg-neutral-100 border shadow-lg rounded-xl p-3 pt-2">
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
    <figure class="mt-1 w-full aspect-video bg-neutral-200 border rounded-md overflow-hidden relative group">
        <div class="w-full h-full flex items-center justify-center bg-white pb-8">
            {!! $display !!}
        </div>
        <div class="duration-200 absolute z-0 w-full bottom-0 flex items-end justify-center" style="background:{{$color}}">
            <p class="truncate text-white p-2">{{$data->documentType->name ?? ''}}</p>
        </div>
    </figure>
</div>
