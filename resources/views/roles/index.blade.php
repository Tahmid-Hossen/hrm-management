@extends('layouts.app')
@section('title', 'Users')
@section('content')
<div class="mt-4 ">
    <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 w-full align-middle">
                <div class="overflow-x-auto">
                    <table id="example"  class="w-full hover divide-neutral-200 dark:divide-neutral-700">
                        <thead class="">
                        <tr class="dark:hover:bg-neutral-800">
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">SL</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Role Name</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Is Active</th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Action</th>
                        </tr>
                        </thead>
                        <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                       @foreach($roles as $key=>$role) 
                        <tr class="cursor-pointer text-start dark:hover:bg-neutral-800">
                            <td class="px-6 py-4 text-sm font-medium text-gray-800 whitespace-nowrap dark:text-gray-200">
                                <a href="#"
                                   class="inline-flex items-center py-2 text-sm font-medium text-center text-black">{{$key + 1}}</a>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">{{ $role->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">{{ $role->is_active ?  'Active' : 'Inactive'}}</td>
                            
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">

                                <div class="flex gap-3">
                                    <div class="inline-block hs-tooltip">   
                                        <a href="{{route('permission.edit', $role->id)}}" type="button" class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg hs-tooltip-toggle border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                            <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Edit
                                          </span>
                                        </a>
                                    </div>

                                    
                                    <div class="inline-block hs-tooltip">
                                        <a href="{{route('permission.edit', $role->id)}}" type="button" class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg hs-tooltip-toggle border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 512 512">
                                                <path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0zm0 66.8V444.8C394 378 431.1 230.1 432 141.4L256 66.8l0 0z"/>
                                            </svg>

                                            <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                                Change Permission
                                              </span>
                                        </a>
                                    </div>

                                    <!-- <div class="inline-block hs-tooltip">
                                        <button data-hs-overlay="#delete-role-modal" type="button" class="inline-flex items-center px-2 py-2 text-sm font-semibold text-gray-500 border rounded-lg hs-tooltip-toggle border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                                            </svg>
                                            <span class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible" role="tooltip">
                                            Delete
                                          </span>
                                        </button>
                                    </div> -->
                                </div>

                            </td>
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
