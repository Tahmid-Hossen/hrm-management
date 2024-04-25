
@extends('layouts.app')
@section('title', 'Manage Users')
@section('pageTitle', 'Manage Users')
@section('breadcumb')
    <ol class="flex items-center mt-2 whitespace-nowrap">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:outline-none focus:text-neutral-600 dark:focus:text-neutral-600"
               href="#">
                <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600"
                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-red-600 truncate dark:text-red-600"
            aria-current="page">
            Users
        </li>
    </ol>
@endsection
@section('additionalButton')
    <button type="button" data-hs-overlay="#create-new-user-modal"
            class="inline-flex items-center px-4 py-3 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-gray-400 dark:hover:text-red-500 dark:hover:border-red-600">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
            <path
                d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
        </svg>
        New User
    </button>
@endsection
@section('content')
     <div class="loader"></div>
     <div id="loader-overlay"></div>

    @if(session('success'))
        <script>
            $(document).ready(function(){
                toastr.success("{{ session('success') }}", "Congratulation!");
            });
        </script>
    @endif
    <div class="grid gap-3 mt-5 sm:grid-cols-1 md:grid-cols-3 xl:grid-cols-3 sm:gap-6">

    @foreach($users as $user)
        <div class="bg-white border border-gray-200 rounded-lg dark:bg-neutral-800 -800 dark:border-gray-700">
            <div class="flex justify-between px-4 pt-4">

                <div class="relative inline-flex hs-dropdown">
                    <button id="hs-dropdown-custom-icon-trigger" type="button"
                            class="flex items-center justify-center text-sm font-semibold text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm hs-dropdown-toggle size-9 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-gray-700 dark:text-white dark:hover:bg-neutral-800">
                        <svg class="flex-none text-gray-600 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round">
                            <circle cx="12" cy="12" r="1" />
                            <circle cx="12" cy="5" r="1" />
                            <circle cx="12" cy="19" r="1" />
                        </svg>
                    </button>

                    <div

                        class=" hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-neutral-800 dark:border dark:border-gray-700"

                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                        <a type="button" class="editUserBtn flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white cursor-pointer"
                             data-hs-overlay="#update-user-modal"  data-user-id="{{ $user->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                            Edit
                        </a>
                        <a href="{{route('users.resetPassword', $user->id)}}" onclick="return confirm('Are you sure, want to reset password?');" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white cursor-pointer"
                             >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                            Reset Password
                        </a>


                        <a href="{{route('users.delete', $user->id)}}"  onclick="return confirm('Are you sure, want to delete?');" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-red-600 hover:text-white dark:text-gray-400 dark:hover:bg-red-700 dark:hover:text-white cursor-pointer"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-x" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                            </svg>
                            Delete
                        </a>

                    </div>
                </div>
                <button
                    class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                    type="button">


              <span
                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-lg text-xs font-medium  text-red-800 dark:bg-red-800/30 dark:text-red-500 {{ $user->is_active ? 'bg-green-100' : 'bg-red-100'}}"

                >
               {{ $user->is_active ? 'Active' : 'Inactive'}}
            </span>


                </button>
            </div>
            <div class="flex flex-col items-center pb-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                     src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                     alt="Bonnie image" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $user->name}}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email}}</span>
                <div class="flex mt-2 md:mt-3">
                    <a href="#"
                       class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">{{ $user->roles[0]->name ?? ''}}</a>
                    <!-- <a href="#"
                       class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg ms-2 focus:outline-none hover:bg-gray-100 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-red-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Message</a> -->
                </div>
            </div>
        </div>
    @endforeach



    <div class="flex items-center justify-center bg-white border border-gray-200 rounded-lg dark:bg-neutral-800 -800 dark:border-gray-700">

        <div class="flex flex-col items-center pb-5 cursor-pointer" data-hs-overlay="#create-new-user-modal">

            <div class="text-gray-700 hover:text-red-600 dark:hover:text-red-600" >
                <div class="flex items-center justify-center my-2 dark:text-white">
                    <svg class="text-center" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-x"
                            viewBox="0 0 16 16">
                        <path
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708" />
                    </svg>
                </div>
                <div class="text-center hover:text-red-600 dark:hover:text-red-600">

                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white hover:text-red-600 dark:hover:text-red-600">New User</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-600">Click here to add new user</span>
                </div>
            </div>
        </div>
    </div>

    </div>




<!-- create User Modal -->
    <div id="create-new-user-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard='false'">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <!-- Header -->
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 class="font-bold text-gray-800 dark:text-white">
                    Create User
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#create-new-user-modal">
                    <span class="sr-only">Close</span>
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="p-4 overflow-y-auto">
                <form method="POST" id="createUserSubmit">
                    <div class="max-w-full mt-3">
                        <label for="user-name" class="block text-sm font-medium mb-2 dark:text-white">User Name</label>
                        <input type="user-name" id="user-name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50  disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe" name="name" required>
                    </div>

                     <div class="max-w-full mt-3">
                        <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">User Role</label>
                        <div class="relative" id="user-role">
                            <div class="relative hs-select">
                                <!-- Select -->
                                <select data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-gray-500 focus:ring-gray-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-red-600 hover:bg-red-600 hover:text-neutral-200 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-600 dark:text-gray-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }' class="hidden" style="display: none" name="role" required>
                                    <option value="">Choose</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" data-hs-select-option="{}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <!-- End Select -->
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full mt-3">
                        <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">Select Company</label>
                        <div class="relative" id="user-role">
                            <div class="relative hs-select">
                                <!-- Select -->
                                <select data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-gray-500 focus:ring-gray-500 before:absolute before:inset-0 before:z-[1] dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-red-600 hover:bg-red-600 hover:text-neutral-200 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-gray-600 dark:text-gray-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"flex-shrink-0 size-3.5 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }' class="hidden" style="display: none" name="company" required>
                                    <option value="">Choose</option>
                                    @foreach($companies as $company)
                                        <option value="{{$company->id}}" data-hs-select-option="{}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                                <!-- End Select -->
                            </div>
                        </div>
                    </div>

                    <div class="max-w-full mt-3">
                        <label for="email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                        <input type="email" id="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="you@site.com" name="email" required>

                    </div>


                    <!-- Footer -->
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 dark:border-neutral-700">
                        <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#create-new-user-modal">
                            Cancel
                        </button>
                        <button id="modal-close" type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"  >
                            Create User
                        </button>
                    </div>
                </form>
            </div>
            <!-- End Body -->

        </div>
    </div>
    </div>




<!-- //Edit User Modal Start -->
    <div id="update-user-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto [--overlay-backdrop:static]' data-hs-overlay-keyboard="false">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <!-- Header -->
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
            <h3 class="font-bold text-gray-800 dark:text-white">
                Update User
            </h3>
            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:text-white hover:bg-red-600 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-red-600" data-hs-overlay="#update-user-modal">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <!-- End Header -->

        <!-- Body -->

        <form id="editUserForm">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="p-4 overflow-y-auto">
                        <input type="hidden" id="edituserId" name="edituserId">
                        <div class="max-w-full mt-3">
                            <label for="user-name" class="block text-sm font-medium mb-2 dark:text-white">User Name</label>
                            <input type="user-name" id="edituserName" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="John Doe" name="edituserName" >
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">User Role</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserRole"name="edituserRole" required class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">Select Company</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserCompany" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="edituserCompany" required>

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>

                        <div class="max-w-full mt-3">
                            <label for="user-role" class="block text-sm font-medium mb-2 dark:text-white">Activity Status</label>
                            <div class="relative" id="user-role">
                                <div class="relative hs-select">
                                    <!-- Select -->
                                    <select id="edituserIsActive" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" name="edituserIsActive" required>

                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                        </div>


                <div class="max-w-full mt-3">
                    <label for="email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                    <input type="email" id="edituserEmail" name="edituserEmail" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-red-500 focus:ring-red-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 -800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="you@site.com">
                </div>

        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-500 border rounded-lg border-neutral-300 gap-x-2 hover:border-red-600 hover:text-red-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#update-user-modal">
                Cancel
            </button>

            <button  type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" >
                Update User
            </button>
        </div>

        </form>
        <!-- End Footer -->
    </div>
    </div>
    </div>
<!-- //Edit User Modal End -->




@endsection

@section('scripts')
<script>

    const modalClose = document.querySelector('#modal-close');

    $(document).ready(function(){

       $(document).on('submit', '#createUserSubmit', function(e) {
            e.preventDefault();

          $('#modal-close').text('Processing...');

            // Get the CSRF token value from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // AJAX request
            $.ajax({
                method: 'post',
                url: "{{ route('users.store') }}",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    $('#modal-close').text('Create User');
                    console.log(response);
                    if (response && response.status === 200) {
                        // Close the modal
                        console.log('called');
                        // Trigger close event on the modal

                        modalClose.addEventListener('click', () => {
                            HSOverlay.close('#create-new-user-modal');
                        });

                        toastr.success('Successfully created user', 'Congratulation!');
                        window.location.reload();

                        // setTimeout(function () {
                        //     window.location.reload();
                        // }, 300);

                    } else {
                        console.log('not called');
                        toastr.error('Sorry!', 'something went wrong.');
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $('#modal-close').text('Create User');
                      toastr.success('Something went wrong, Please try again', 'Opps!');
                    console.log("Some error occurred");
                    // Handle error
                }
            });
        });

        });

        $('.editUserBtn').click(function() {
            console.log('asdasd')
        var userId = $(this).data('user-id');

        // AJAX request to fetch user data
        $.ajax({
            method: 'get',
            url: '/users/edit/' + userId, // Adjust URL as per your route
            success: function(response) {
                console.log(response);
                // Populate modal with user data
                $('#edituserId').val(response.data.user.id);
                $('#edituserName').val(response.data.user.name);
                $('#edituserEmail').val(response.data.user.email);
                $('#edituserCompany').val(response.data.user.company_id);
                $('#edituserIsActive').val(response.data.user.is_active);
                $('#edituserRole').val(response.data.user_role);
                // Populate other input fields as needed

                var options = '';
                options += '<option value="">Choose</option>';
                $.each(response.data.companies, function(index, company) {
                   if (company.id === response.data.user.company_id) {
                        options += '<option value="' + company.id + '" selected>' + company.name + '</option>';
                    } else {
                        options += '<option value="' + company.id + '">' + company.name + '</option>';
                    }
                });
                $('#edituserCompany').html(options);



                var options = '';
                options += '<option value="">Choose</option>';
                $.each(response.data.roles, function(index, role) {
                   if (role.id === response.data.user_role) {
                        options += '<option value="' + role.id + '" selected>' + role.name + '</option>';
                    } else {
                        options += '<option value="' + role.id + '">' + role.name + '</option>';
                    }
                });
                $('#edituserRole').html(options);



                var options2 = '';

                options2 += '<option value="">Choose</option>';

                var statusData = [1, 0];
                $.each(statusData, function(index, status) {
                   if (status === response.data.user.is_active) {
                        options2 += '<option value="' + status + '" selected>' + getStatus(status) + '</option>';
                    } else {
                        options2 += '<option value="' + status + '">' + getStatus(status) + '</option>';
                    }
                });
                $('#edituserIsActive').html(options2);


                // Show the modal
                $('#editUserModal').show();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                // Handle error
                console.error("Error fetching user data:", errorThrown);
            }
        });

         // Submit event handler for the edit user form
        $('#editUserForm').submit(function(e) {
            e.preventDefault();

            var csrfToken = $('input[name="_token"]').val();


            // AJAX request to update user data
            $.ajax({
                method: 'post',
                url: '/users/update/' +userId, // Adjust URL as per your route
                data: $(this).serialize(),
                 headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {
                    // Handle success
                    console.log("User data updated successfully:", response);

                     modalClose.addEventListener('click', () => {
                            HSOverlay.close('#update-user-modal');
                    });

                    toastr.success('Successfully Updated user', 'Congratulation!');
                    window.location.reload();


                    // Close the modal
                    $('#editUserModal').hide();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // Handle error
                      modalClose.addEventListener('click', () => {
                            HSOverlay.close('#update-user-modal');
                    });
                     toastr.success('Something went wrong, Please try again', 'Opps!');
                    console.error("Error updating user data:", errorThrown);
                }
            });
        });


    });


    function getStatus(status){
        return status == 1 ? 'Active' : 'Inactive';
    }







</script>

@endsection


