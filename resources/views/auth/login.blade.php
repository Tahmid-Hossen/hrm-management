<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LOGIN::Nex HRM</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"
        integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="min-h-screen bg-white dark:bg-neutral-900">
    <div
        class="absolute top-0 bottom-0 left-0 w-full h-full overflow-hidden leading-5 bg-red-600 bg-gradient-to-b from-gray-900 via-red-900 to-red-500">
    </div>
    <div
        class="relative flex flex-col items-center justify-center min-h-screen gap-10 p-2 bg-transparent rounded-md shadow-xl sm:flex-row sm:items-end sm:gap-2 sm:justify-evenly">
        <div class="z-10 flex flex-col self-center px-4 lg:px-14 sm:max-w-4xl xl:max-w-md">
            <div class="flex-col self-start text-center text-gray-300 lg:flex md:text-left">
                <h1 class="my-3 text-4xl font-semibold">Welcome Nexdecade HRM</h1>
                <p class="pr-3 text-sm opacity-75">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ipsa quas eveniet repellat,
                    quisquam incidunt fugit quibusdam alias obcaecati temporibus neque quo rem porro nam ipsum numquam
                    possimus totam odio.</p>
            </div>
        </div>
        <div class="z-10 flex items-center self-center justify-center px-4 md:px-0">
            <div class="p-8 mx-auto rounded-lg shadow-xl sm:p-10 bg-slate-50 w-96">
                <div class="hidden mb-3">
                    <div class="relative px-4 py-3 text-center text-red-700 bg-red-100 border border-red-400 rounded">
                        <strong class="font-bold">Opps!</strong>
                        <span class="block sm:inline">error message</span>
                    </div>
                </div>
                <div class="mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Sign In </h3>
                    <p class="text-gray-500">Please sign in to your account.</p>
                </div>
                @if ($errors->any())
                    <div class="col-span-3 mb-4 text-center">
                        @foreach ($errors->all() as $error)
                            <div
                                class="flex justify-center gap-1 p-2 font-medium text-center text-white bg-red-500 rounded-sm item-center">
                                <span><i class="fa-solid fa-circle-info"></i></span>{{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif
                <form class="space-y-6" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="space-y-6">
                        <div class="">
                            <input id="email" name="email" value="" autocomplete="email"
                                class="w-full text-sm  px-4 py-3 bg-gray-100 focus:bg-gray-50 border rounded-lg focus:outline-none border-gray-300 focus:ring focus:ring-[1px] focus:ring-red-400 focus:border-transparent"
                                type="email" placeholder="Email">
                        </div>
                        <div class="relative" x-data="{ show: true }">
                            <input id="password" name="password" value="" autocomplete="current-password"
                                placeholder="Password" :type="show ? 'password' : 'text'"
                                class=" w-full text-sm  px-4 py-3 bg-gray-100 focus:bg-gray-50 border rounded-lg focus:outline-none border-gray-300 focus:ring focus:ring-[1px] focus:ring-red-400 focus:border-transparent">
                            <div class="absolute inset-y-0 right-0 flex items-center mr-3 text-sm leading-5">

                                <svg @click="show = !show" :class="{ 'hidden': !show, 'block': show }"
                                    class="h-4 text-red-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                    </path>
                                </svg>

                                <svg @click="show = !show" :class="{ 'block': !show, 'hidden': show }"
                                    class="h-4 text-red-700" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 640 512">
                                    <path fill="currentColor"
                                        d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                    </path>
                                </svg>

                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox"
                                    class="w-4 h-4 bg-white border-gray-300 rounded checked:bg-red-600 focus:ring-red-400 checked:hover:bg-red-600 checked:focus:bg-red-600">
                                <label for="remember_me" class="block ml-2 text-sm text-gray-800">
                                    Remember me
                                </label>
                            </div>
                            <div class="ml-auto text-sm">
                                <a class="text-sm font-medium text-red-600 decoration-2 hover:underline"
                                    href="#">Forgot password?</a>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="flex justify-center w-full p-3 font-semibold tracking-wide text-gray-100 transition duration-500 ease-in bg-red-800 rounded-lg cursor-pointer hover:bg-red-700">
                                Sign in
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="absolute bottom-0 left-0 z-30 w-full bg-transparent">
        <div class="container flex items-center justify-center p-1 sm:p-5 sm:justify-start">
            <div class="flex justify-center sm:justify-start">
                <a href="#" target="_blank" title="Logo"
                    class="text-center text-gray-700 focus:outline-none"><img
                        src="http://ajw.hbq.mybluehost.me/en/wp-content/uploads/2020/10/nexLogo_inWeb.png"
                        alt="Nexdecade Technology ( Pvt ) Ltd." class="object-cover w-[250px] h-auto mx-auto">
                    <p class="text-lg sm:text-xl"><strong>Nexdecade HRM</strong></p>
                </a>
            </div>

        </div>
    </footer>
    <svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
</body>

</html>
