@extends('layouts.app')
@section('title', 'Designations')
@section('pageTitle', 'Designations')
@section('breadcumb')
    <ol class="flex items-center mt-2 whitespace-nowrap mr-2">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 dark:hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:hover:text-red-600 dark:focus:text-neutral-600 dark:hover:text-red-600"
               href="#">
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

        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 dark:hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:hover:text-red-600 dark:focus:text-neutral-600 dark:hover:text-red-600"
               href="#">
                Settings
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600 dark:hover:text-red-600"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 dark:hover:text-red-600 truncate dark:text-red-600 dark:hover:text-red-600"
            aria-current="page">
            Designation
        </li>
    </ol>
@endsection
@section('content')
    <div class="mt-4 ">
        <div class="flex flex-col p-2 border rounded-lg dark:bg-neutral-800 border-neutral-200 dark:border-neutral-700">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 w-full align-middle">
                    <div class="overflow-x-auto">
                        <form class="w-full max-w-md" action="{{ route('designation.update', $designation->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Designation Name
                                  </label>
                                </div>
                                <div class="md:w-2/3">
                                  <input class="bg-transparent border-2 border-gray-500 rounded w-full py-2 px-4 text-gray-400 leading-tight focus:outline-none focus:bg-transparent focus:border-gray-500" id="department_name" name="name" type="text" value="{{ $designation->name }}" autocomplete="off">
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                  <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Is Active
                                  </label>
                                </div>
                                <div class="md:w-2/3">
                                    <select class="select bg-transparent border border-gray-500 w-full max-w-xs" name="is_active">
                                        <option class="bg-transparent" value="1" {{ $designation->is_active == 'Yes' ? 'selected' : '' }}>Yes</option>
                                        <option class="bg-transparent" value="0" {{ $designation->is_active == 'No' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:flex md:items-center">
                              <div class="md:w-1/3"></div>
                              <div class="md:w-2/3">
                                <button class="shadow bg-green-700 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                  Update
                                </button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection






