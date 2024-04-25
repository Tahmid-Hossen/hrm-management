@extends("layouts.app")
@section("title", "Manage Leave")
@section("pageTitle", "Manage Leave")

@section("breadcumb")
    <ol class="mr-2 mt-2 flex items-center whitespace-nowrap">
        <li class="inline-flex items-center">
            <a
                class="flex items-center text-sm text-gray-500 hover:text-red-600 focus:text-neutral-600 focus:outline-none dark:focus:text-neutral-600"
                href="#"
            >
                <svg
                    class="me-3 size-4 flex-shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path
                        d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                    ></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
            </a>
            <svg
                class="mx-2 size-4 flex-shrink-0 overflow-visible text-gray-400 dark:text-neutral-600"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li
            class="inline-flex items-center truncate text-sm font-semibold text-red-600 dark:text-red-600"
            aria-current="page"
        >
            Leave
        </li>
    </ol>
@endsection

@section("additionalButton")
    <div class="flex flex-wrap justify-end gap-2">
        <!-- export button -->
        <div class="hs-tooltip inline-block">
            <button
                type="button"
                class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-file-earmark-arrow-down"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z"
                    />
                    <path
                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"
                    />
                </svg>
                <span
                    class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                    role="tooltip"
                >
                    Export
                </span>
            </button>
        </div>
        <!-- import button -->
        <div class="hs-tooltip inline-block">
            <button
                type="button"
                class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-file-earmark-arrow-up"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707z"
                    />
                    <path
                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"
                    />
                </svg>
                <span
                    class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                    role="tooltip"
                >
                    Import
                </span>
            </button>
        </div>

        <!-- create button -->
        <div
            class="hs-tooltip inline-block"
            data-hs-overlay="#create-new-leave-modal"
        >
            <button
                type="button"
                href="create-employee.html"
                class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-plus-circle-dotted"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"
                    />
                </svg>
                <span
                    class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                    role="tooltip"
                >
                    Create Leave
                </span>
            </button>
        </div>
    </div>
@endsection

@section("content")
    <div class="mt-4">
        <div
            class="flex flex-col rounded-lg border border-neutral-200 p-2 dark:border-neutral-700 dark:bg-neutral-800"
        >
            <div class="-m-1.5 overflow-x-auto">
                <div class="w-full p-1.5 align-middle">
                    <div class="overflow-x-auto">
                        <table
                            id="example"
                            class="display hover w-full divide-neutral-200 dark:divide-neutral-700"
                        >
                            <thead class="">
                                <tr class="dark:hover:bg-neutral-800">
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        EMPLOYEE
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        LEAVE TYPE
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        APPLIED ON
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        START DATE
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        END DATE
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        TOTAL DAYS
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        LEAVE REASON
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        STATUS
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody
                                class="w-full divide-neutral-200 dark:divide-neutral-700"
                            >
                                <tr
                                    class="cursor-pointer dark:hover:bg-neutral-800"
                                >
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Md. Iqbal Mahmud
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Annual Leave
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        1 Days
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Fiver
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        <button type="button" class="block">
                                            <span class="block">
                                                <span
                                                    class="inline-flex items-center gap-x-1 rounded-full bg-teal-100 px-1.5 py-1 text-xs font-medium text-teal-800 dark:bg-teal-500/10 dark:text-teal-500"
                                                >
                                                    <svg
                                                        class="size-2.5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                                                        />
                                                    </svg>
                                                    Aprroved
                                                </span>
                                            </span>
                                        </button>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium"
                                    >
                                        <div class="flex gap-3">
                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#manage-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-caret-right"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Manage Leave
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#edit-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                                        />
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Edit
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#delete-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-archive"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Delete
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="cursor-pointer dark:hover:bg-neutral-800"
                                >
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Md. Iqbal Mahmud
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Annual Leave
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        1 Days
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Fiver
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        <button type="button" class="block">
                                            <span class="block">
                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-red-100 px-2 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-green-200"
                                                >
                                                    <svg
                                                        class="size-2.5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                                                        />
                                                    </svg>
                                                    Reject
                                                </span>
                                            </span>
                                        </button>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium"
                                    >
                                        <div class="flex gap-3">
                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#manage-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-caret-right"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Manage Leave
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#edit-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                                        />
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Edit
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#delete-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-archive"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Delete
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr
                                    class="cursor-pointer dark:hover:bg-neutral-800"
                                >
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Md. Iqbal Mahmud
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Annual Leave
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Mar 31, 2024
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        1 Days
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        Fiver
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200"
                                    >
                                        <button type="button" class="block">
                                            <span class="block">
                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-orange-100 px-2 py-0.5 text-xs font-medium text-orange-800 dark:bg-orange-900 dark:text-green-200"
                                                >
                                                    <svg
                                                        class="size-2.5"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                        ></path>
                                                    </svg>
                                                    Pending
                                                </span>
                                            </span>
                                        </button>
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium"
                                    >
                                        <div class="flex gap-3">
                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#manage-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-caret-right"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M6 12.796V3.204L11.481 8zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Manage Leave
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#edit-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-pencil-square"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                                                        />
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Edit
                                                    </span>
                                                </button>
                                            </div>

                                            <div
                                                class="hs-tooltip inline-block"
                                            >
                                                <button
                                                    data-hs-overlay="#delete-leave-modal"
                                                    type="button"
                                                    class="hs-tooltip-toggle inline-flex items-center gap-x-2 rounded-lg border border-neutral-300 px-2 py-2 text-sm font-semibold text-gray-500 hover:border-red-600 hover:text-red-600 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-gray-400 dark:hover:border-red-600 dark:hover:text-red-500"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="16"
                                                        height="16"
                                                        fill="currentColor"
                                                        class="bi bi-archive"
                                                        viewBox="0 0 16 16"
                                                    >
                                                        <path
                                                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"
                                                        />
                                                    </svg>
                                                    <span
                                                        class="hs-tooltip-content invisible absolute z-10 inline-block rounded-lg bg-red-600 px-2 py-1 text-white opacity-0 shadow-md transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
                                                        role="tooltip"
                                                    >
                                                        Delete
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
