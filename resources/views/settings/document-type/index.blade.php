@extends('layouts.app')
@section('title', 'Document Type')
@section('pageTitle', 'Document Type')
@section('breadcumb')
    <ol class="flex items-center mt-2 mr-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 dark:hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
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
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 dark:hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
                href="#">
                Settings
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600 dark:hover:text-red-600"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:hover:text-red-600 dark:text-red-600"
            aria-current="page">
            Document Type
        </li>
    </ol>
@endsection
@section('additionalButton')

    <div class="flex flex-wrap justify-end gap-2">
        <!-- create button -->
        <div class="inline-block hs-tooltip">
            <button onclick="createDocumentTypeModal()" class="btn-create">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                    <path
                        d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
                Document Type
                <span
                    class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                    role="tooltip">
                    Create Document Type
                </span>
            </button>
        </div>
    </div>
@endsection
@section('content')
    <div class="mt-4">
        <div class="flex flex-col p-2 border rounded-lg border-neutral-200 dark:border-neutral-700 dark:bg-neutral-800">
            <div class="-m-1.5 overflow-x-auto">
                <div class="w-full p-1.5 align-middle">
                    <div class="overflow-x-auto">
                        <table id="example" class="w-full display hover divide-neutral-200 dark:divide-neutral-700">
                            <thead class="">
                                <tr class="dark:hover:bg-neutral-800">
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">ID</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">NAME</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Is_active
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase text-start">Action</th>

                                </tr>
                            </thead>
                            <tbody class="w-full divide-neutral-200 dark:divide-neutral-700">
                                @foreach ($document_types as $document_type)
                                    <tr class="cursor-pointer text-start dark:hover:bg-neutral-800">
                                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $document_type->id }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $document_type->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap dark:text-gray-200">
                                            {{ $document_type->is_active }}</td>
                                        {{-- {{ $department->empDepartment->name ?? '' }} --}}
                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-end">
                                            <div class="flex gap-3">
                                                <div class="inline-block hs-tooltip">
                                                    <button onclick="updateDocumentTypeModal({{ $document_type->id }})"
                                                        class="btn-edit hs-tooltip-toggle ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pencil-square"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                        <span
                                                            class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                            role="tooltip">
                                                            Edit Document Type
                                                        </span>
                                                    </button>
                                                </div>

                                                <div class="inline-block hs-tooltip">
                                                    <a href="{{ route('document-type.delete', $document_type->id) }}"
                                                        class="btn-red hs-tooltip-toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-archive"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg>
                                                        <span
                                                            class="absolute z-10 invisible inline-block px-2 py-1 text-white transition-opacity bg-red-600 rounded-lg shadow-md opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible"
                                                            role="tooltip">
                                                            Delete Document Type
                                                        </span>
                                                    </a>
                                                </div>
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


    {{-- Create document type Modal --}}
    <div id="create-document-type-modal-form" class="hidden">
        <form action="{{ route('document-type.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Body -->
            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    Create Leave Type
                </h3>
            </div>
            <div class="">

                <div class="p-4">

                    <div class="max-w-full mt-3">
                        <label for="document_type"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Document Type Name</label>
                        <input
                            class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            id="document_type" name="name" type="text" autocomplete="off"
                            placeholder="Document Type Name">
                    </div>

                    <div class="max-w-full mt-3">
                        <label for="is_active" class="block mb-2 text-sm font-medium text-gray-800 dark:text-white">Is
                            Active</label>
                        <div class="relative" id="is_active">
                            <div class="relative hs-select">
                                <select name="is_active"
                                    class="block w-full px-4 py-3 text-sm text-gray-800 border border-gray-200 rounded-lg focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option value="1">
                                        Yes
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- End Body -->

                <!-- Footer -->
                <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
                    <button onclick="smallSizeModal.close()" type="button"
                        class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        Cancel
                    </button>

                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Create Document Type
                    </button>
                </div>
                <!-- End Footer -->
            </div>
        </form>
    </div>
    {{-- Create document type Modal --}}

@endsection
