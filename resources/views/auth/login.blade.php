<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOGIN::Nex HRM</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dark:bg-neutral-900">

<div class="w-full max-w-md p-6 mx-auto">
    <div class="bg-white border border-gray-200 shadow-sm mt-7 rounded-xl dark:bg-neutral-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Don't have an account yet?
                    <a class="font-medium text-red-600 decoration-2 hover:underline" href="../examples/html/signup.html">
                        Sign up here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <button type="button" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-600 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 disabled:opacity-50 disabled:pointer-events-none hover:hover:bg-red-600 hover:hover:text-white dark:bg-red-600 dark:border-gray-700 dark:text-white dark:hover:bg-red-700">
                    <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                        <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                        <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                        <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                        <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
                    </svg>
                    Sign in with Google
                </button>

                <div class="flex items-center py-3 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">Or</div>



                @if ($errors->any())
                    <div class="col-span-3 text-center mb-4">
                        @foreach ($errors->all() as $error)
                            <div class="text-red-600 bg-red-50 p-2 text-center flex gap-1 item-center justify-center font-medium rounded-sm">
                                <span><i class="fa-solid fa-circle-info"></i></span>{{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif



                <!-- Form -->
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- Form Group -->
                        <div>
                            <label for="email" class="block mb-2 text-sm dark:text-white">Email address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="block w-full px-4 py-3 text-sm bg-transparent border border-gray-200 rounded-lg disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="email-error" placeholder="Enter your email">
                                <div class="absolute inset-y-0 hidden pointer-events-none end-0 pe-3">
                                    <svg class="text-red-500 size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="hidden mt-2 text-xs text-red-600" id="email-error">Please include a valid email address so we can get back to you</p>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block mb-2 text-sm dark:text-white">Password</label>
                                <a class="text-sm font-medium text-red-600 decoration-2 hover:underline" href="#">Forgot password?</a>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" class="block w-full px-4 py-3 text-sm bg-transparent border border-gray-200 rounded-lg disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" required aria-describedby="password-error" placeholder="Enter your password">
                                <div class="absolute inset-y-0 hidden pointer-events-none end-0 pe-3">
                                    <svg class="text-red-500 size-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="hidden mt-2 text-xs text-red-600" id="password-error">8+ characters required</p>
                        </div>
                        <!-- End Form Group -->





                        <div class="grid gap-2 mt-4 md:grid-cols-1 justify-center">
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">Login</button>

                            {{--<button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">Employee Login</button>
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">Company Login</button>--}}
                        </div>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
<!-- ========== END MAIN CONTENT ========== -->
</body>
<script src="{{asset('assets/js/theme-switcher.js')}}"></script>
</body>

</html>
