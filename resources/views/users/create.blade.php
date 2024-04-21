@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <div class="m-4">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex items-center justify-between p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="text-xl font-bold">Create User</h6>
            </div>
            <hr class="mt-3">
            <div class="p-6">
                <form action="{{route('users.store')}}" method="post"  onsubmit="return validateUserCreateForm()" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">

                        <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" value="{{old('name') }}" class="w-full px-3 py-2 border rounded-md  focus:outline-none" >
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" value="{{old('email') }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                        <span class="text-sm text-red-600">@error('email') {{ $message }} @enderror </span>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" value="{{old('password') }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 font-bold mb-2">User Role</label>
                        <select  id="role" name="role" value="{{old('role') }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                            @foreach($roles as $key=>$role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="company" class="block text-gray-700 font-bold mb-2">Select Company</label>
                        <select  id="company" name="company" value="{{old('role') }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" >
                            @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">
                    <div class="w-96">
                        <div class="col-span-2">
                            <label for="" class="block text-gray-700 font-bold mb-2 mt-2">Upload User Image</label>
                            <div class="bg-white rounded w-full mx-auto">
                                <div class="w-full flex items-center gap-4 max-w-md bg-white rounded-lg">
                                    <div class="grow bg-gray-100 p-2 pt-0 text-center rounded-lg border-dashed border-2 border-gray-300 hover:border-blue-500 transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md" id="dropzone">
                                        <label for="userImage" class="cursor-pointer flex items-center space-y-2">
                                            <svg class="w-12 h-12 text-gray-400 pt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="flex flex-col w-full mt-0">
                                                <span class="text-gray-600">Drag and drop your image here</span>
                                                <span class="text-gray-500 text-sm">(or click to select)</span>
                                            </span>
                                        </label>
                                        <input type="file" name="user_image" id="userImage" accept=".png, .svg" class="hidden">
                                    </div>
                                    <div id="uploadedImagePreview" class="w-16 aspect-square flex items-center justify-center bg-gray-100 rounded border border-gray-300">
                                        <span class="text-center text-gray-300 font-medium text-[32px]">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-3 text-center " id="fileList"></div>
                                <div id="errorMessage" class="text-red-500 text-center font-medium text-sm"></div>
                            </div>
                            <span class="text-red-600 text-sm font-medium" id="error_"></span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Create User</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        function validateUserCreateForm() {
            const name = $('#name');
            const emailInput = $('#email');
            const passwordInput = $('#password');
            let isValid = true;
            if (name.val().trim() === '') {
                isValid = false;
                console.log('Name is required.');
            }

            if (emailInput.val().trim() === '') {
                isValid = false;
                console.log('Email is required.');
            } else if (!isValidEmail(emailInput.val().trim())) {
                isValid = false;
                console.log('Invalid email format.');
            }

            if (passwordInput.val().trim() === '' || passwordInput.val().trim().length < 8) {
                isValid = false;
                console.log('Password is required! Minimum 8 character.');
            }
            return isValid;
        }

        function displayError(input, message) {
            const errorMessage = input.next();
            errorMessage.text(message);
            errorMessage.removeClass('hidden');
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPassword(password) {
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return passwordRegex.test(password);
        }



        ////////UPLOAD IMAGE
        var dropzone = document.getElementById('dropzone');
        var userImage = document.getElementById('userImage');
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

        userImage.addEventListener('change', (e) => {
            const files = e.target.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            fileList.innerHTML = '';
            errorMessageElement.textContent = ''; // Clear previous error message

            for (const file of files) {
                if (file.size <= 2 * 1024 * 1024) {
                    if (file.type === 'image/png' || file.type === 'image/svg+xml') {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            let maxLength = 30;
                            let truncatedString = file.name.length > maxLength ? file.name.substring(0, maxLength) + "..." : file.name;

                            let op = `
                            <div class="w-full bg-slate-700 rounded-md text-white px-1">
                                <p class="text-left">${truncatedString} (${formatBytes(file.size)})</p>
                            </div>
                        `;
                            $('#fileList').html(op);

                            $('#uploadedImagePreview').html(`<img class="w-full h-full object-cover" src="${e.target.result}" alt="Uploaded Image">`);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        // Invalid file type, show error message
                        errorMessageElement.textContent = 'Invalid file type. Allowed types: .png, .svg.';
                        userImage.value = ''; // Clear the file input
                    }
                } else {
                    // File exceeds size limit, show error message
                    errorMessageElement.textContent = 'Maximum siz  e limit exceeds 2MB.';
                    userImage.value = ''; // Clear the file input
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
