@extends('layouts.app')


@section('content')



    <div class=" sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
        <div
            class="flex flex-col max-h-full overflow-hidden bg-white border shadow-sm pointer-events-auto rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

            <div class="flex items-center justify-between px-4 py-3 border-b dark:border-neutral-700">
                <h3 class="text-gray-800 dark:text-neutral-200">
                    Import products
                </h3>
                <button type="button"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-lg size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-4">
                <label class="block mb-2 text-sm text-gray-800 dark:text-neutral-400">
                    <a class="text-sm text-red-600 dark:text-red-600 dark:hover:text-red-600" href="#">Download a
                        sample CSV
                        template</a> to see an example of the format required.
                </label>


                <div class="flex justify-center my-4 border border-dashed rounded-md dark:border-neutral-700 dark:bg-neutral-800"
                    id="drop-zone">
                    <label class="flex flex-col items-center w-full transition cursor-pointer hover:border-gray-400"
                        style="padding: 3rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-2 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <span class="text-sm text-gray-800 dark:text-white">Drop CSV or XLS files here or <span
                                class="text-red-600 underline">browse</span></span>
                        <input type="file" name="file_upload" class="hidden w-full" id="file-input"
                            accept=".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                            multiple>
                    </label>
                </div>



                <div class="grid items-center grid-cols-1 mt-4">
                    <div id="preview-container"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('file-input');
            const previewContainer = document.getElementById('preview-container');

            dropZone.addEventListener('dragover', function(e) {
                e.preventDefault();
                dropZone.classList.add('border-gray-400');
            });

            dropZone.addEventListener('dragleave', function() {
                dropZone.classList.remove('border-gray-400');
            });

            dropZone.addEventListener('drop', function(e) {
                e.preventDefault();
                dropZone.classList.remove('border-gray-400');

                const files = e.dataTransfer.files;
                handleFiles(files);
            });

            fileInput.addEventListener('change', function() {
                const files = fileInput.files;
                handleFiles(files);
            });

            function handleFiles(files) {
                const ul = document.createElement('ul');
                ul.classList.add('list-disc', 'pl-4');

                for (const file of files) {
                    if (file.type === 'text/csv' || file.type === 'application/vnd.ms-excel' || file.type ===
                        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                        const fileName = file.name;
                        const fileSize = formatBytes(file.size);
                        const listItem = createPreviewItem(fileName, fileSize);
                        ul.appendChild(listItem);
                    } else {
                        alert('Please upload only CSV or XLS files.');
                    }
                }

                // Clear previous contents of preview container and append the new list
                previewContainer.innerHTML = '';
                previewContainer.appendChild(ul);
            }

            function createPreviewItem(fileName, fileSize) {
                const listItem = document.createElement('div');
                listItem.classList.add('flex', 'justify-between', 'items-center', 'gap-x-2');

                const fileInfo = document.createElement('div');
                fileInfo.classList.add('flex', 'items-center', 'gap-x-2');

                // Add Excel icon
                const excelIcon = document.createElement('img');
                excelIcon.src =
                    'https://img.icons8.com/color/48/microsoft-excel-2019--v1.png'; // Replace with your Excel icon URL
                excelIcon.classList.add('w-8', 'h-8'); // Adjust the width and height as needed
                fileInfo.appendChild(excelIcon);

                const fileNameElement = document.createElement('p');
                fileNameElement.textContent = fileName;
                fileNameElement.classList.add('text-gray-500', 'dark:text-neutral-500', 'hover:text-gray-800',
                    'dark:hover:text-neutral-200');
                fileInfo.appendChild(fileNameElement);

                const fileSizeElement = document.createElement('p');
                fileSizeElement.textContent = fileSize;
                fileSizeElement.classList.add('text-xs', 'text-gray-500', 'dark:text-neutral-500');
                fileInfo.appendChild(fileSizeElement);

                listItem.appendChild(fileInfo);

                const deleteButton = document.createElement('button');
                deleteButton.innerHTML =
                    `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
        </svg>`;
                deleteButton.classList.add('text-red-500', 'hover:text-red-700', 'dark:text-red-500',
                    'dark:hover:text-red-700');
                deleteButton.addEventListener('click', function() {
                    listItem.remove();
                });
                listItem.appendChild(deleteButton);

                return listItem;
            }

            function formatBytes(bytes, decimals = 2) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const dm = decimals < 0 ? 0 : decimals;
                const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
            }
        });
    </script>
