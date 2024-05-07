@props(['data'])
<div class="w-full aspect-square bg-neutral-100 rounded-xl p-4 pt-2">
    <div class="flex items-center gap-2">
        <span><i class="fa-regular fa-file-pdf"></i></span>
        <span class="w-full truncate">{{$data->title ?? ''}}</span>
    </div>
    <figure class="mt-1 w-full aspect-square bg-neutral-200 rounded-md overflow-hidden">

    </figure>
</div>
