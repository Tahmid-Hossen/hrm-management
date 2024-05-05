@props(['data'=>[]])
@php $dataCount=count($data); @endphp
<ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
    <li class="inline-flex items-center">
        <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:hover:text-red-600 dark:focus:text-neutral-600"
           href="{{route('dashboard')}}">
            <svg class="flex-shrink-0 me-3 size-4 translate-y-[-1px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Home
        </a>
    </li>
    @if($dataCount>0)
        @foreach($data as $key=>$item)
            <li class="inline-flex items-center"
                aria-current="page">
                <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600 dark:hover:text-red-600"
                     xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
                <a class="flex items-center  text-sm {{$key==$dataCount-1 ? 'font-semibold text-red-600' : 'text-gray-500 hover:text-red-600' }} truncate dark:text-red-600 dark:hover:text-red-600"
                   href="{{$item['url']=='' ? '#' : $item['url'] }}">
                    {{$item['title']}}
                </a>
            </li>
        @endforeach
    @endif


</ol>
