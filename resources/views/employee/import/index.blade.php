@extends('layouts.app')
@section('title', 'Import Employees')
@section('pageTitle', 'Import Employees')
@section('breadcumb')
    <x-breadcumbs.breadcumb :data="[['title'=>'Employees List', 'url'=>route('employees.index')],['title'=>'Import', 'url'=>'']]" class=""></x-breadcumbs.breadcumb>
@endsection
@section('additionalButton')

@endsection

@section('content')
    <div class="mt-16 flex justify-center">
        <div class="p-4 w-2/3">
            <form action="{{route('employees.import.submit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center">
                    <h3 class="font-bold text-xl flex items-center">Import file only <span class="text-sm text-gray-700"> &nbsp; (xlsx, xls) </span> </h3>
                    <div class="w-full max-w-lg bg-white rounded-lg py-6">
                        <div class="bg-gray-100 p-2 pt-0 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-blue-500 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md" id="dropzone">
                            <label for="exelFile" class="cursor-pointer flex flex-col items-center space-y-2">
                                <svg class="w-16 h-16 text-gray-400 pt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span class="flex flex-col w-full mt-0">
                                            <span class="text-gray-600">Drag and drop your exel file here</span>
                                            <span class="text-gray-500 text-sm">(or click to select)</span>
                                        </span>
                            </label>
                            <input type="file" name="file" id="exelFile" accept=".xlsx, .xls" class="hidden" >
                            <!-- <input type="file" name="file" id="file" class="form-control"> -->
                        </div>
                        <div class="mt-3 text-center w-full rounded-md text-red-600 font-medium" id="fileList">

                        </div>
                        <div id="errorMessage" class="text-red-500 text-center font-medium text-sm"></div>
                    </div>
                    <button id="importButton" type="submit" onclick="" class="inline-flex items-center px-4 py-2 font-medium text-center  text-white bg-red-600 hover:bg-red-800 disabled:text-neutral-600 disabled:bg-neutral-200 rounded-lg focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" disabled>
                        <i class="fa fa-plus"></i>
                        Import
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@include('employee.create')
@section('scripts')
    <script>
        ////////UPLOAD IMAGE
        var dropzone = document.getElementById('dropzone');
        var exelFile = document.getElementById('exelFile');
        var fileList = document.getElementById('fileList');
        var errorMessageElement = document.getElementById('errorMessage');
        errorMessageElement.textContent='';

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-blue-500', 'border-2');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-blue-500', 'border-2');
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-blue-500', 'border-2');

            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        exelFile.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            fileList.innerHTML = '';
            errorMessageElement.textContent = ''; // Clear previous error message

            for (const file of files) {
                if (file.size <= 2 * 1024 * 1024) {
                    const fileName = file.name;
                    const fileExtension = fileName.split('.').pop();

                    if (fileExtension === 'xlsx' || fileExtension === 'xls') {
                        let maxLength = 30;
                        let truncatedString = file.name.length > maxLength ? file.name.substring(0, maxLength) + "..." : file.name;
                        $('#fileList').html(`${truncatedString} (${formatBytes(file.size)})`);
                        // Make the button visible
                        $('#importButton').attr('disabled', false);

                    } else {
                        // If the condition is not true, you may want to hide the button
                        $('#importButton').attr('disabled', true);
                        // Invalid file type, show error message
                        errorMessageElement.textContent = 'Invalid file type. Allowed types: .xlsx, .xls.';
                        exelFile.value = ''; // Clear the file input
                    }
                    /*if (file.type === 'image/png' || file.type === 'image/svg+xml') {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            let maxLength = 30;
                            let truncatedString = file.name.length > maxLength ? file.name.substring(0, maxLength) + "..." : file.name;
                            let op = `
                            <div class="w-full bg-gradient-to-r from-teal-700 to-teal-500 rounded-md text-white px-1">
                                <p class="text-left">${truncatedString} (${formatBytes(file.size)})</p>
                            </div>
                        `;
                            $('#fileList').html(op);

                            $('#qrCodeImagePreview').html(`<img class="w-full h-full object-cover" src="${e.target.result}" alt="Uploaded Image">`);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        // Invalid file type, show error message
                        errorMessageElement.textContent = 'Invalid file type. Allowed types: .png, .svg.';
                        exelFile.value = ''; // Clear the file input
                    }*/
                } else {
                    // File exceeds size limit, show error message
                    errorMessageElement.textContent = 'Maximum size limit exceeds 2MB.';
                    exelFile.value = ''; // Clear the file input
                }
            }
        }

        function formatBytes(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));

            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
    </script>
@endsection



