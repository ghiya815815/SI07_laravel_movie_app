@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                REVIEW | data table
            </h2>

            <nav>
                <a href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Two Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">ID</p>
                    </div>
                    <div class="col-span-2 flex items-center ">
                        <p class="font-medium">Movie</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">User</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">Rating</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-medium">Date</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">Actions</p>
                    </div>
                </div>

                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                                1
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Jojo Bizarre Adventure
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            3k
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            5/5
                        </p>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            1/3/2004
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href=""
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href=""
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                                2
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Drama
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            2k
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            3/5
                        </p>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            2/3/2014
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href=""
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href=""
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                                3
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Wind Breaker
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            5k
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            4/5
                        </p>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            10/3/2012
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href=""
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href=""
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                                4
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Spy X Family
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            1M
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            5/5
                        </p>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            24/5/2022
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href=""
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href=""
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                                5
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 items-center sm:flex">
                        <p class="text-sm font-medium text-black dark:text-white">
                            Kiminonawa
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            5M
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            5/5
                        </p>
                    </div>
                    <div class="col-span-2  flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                            17/8/2020
                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href=""
                                class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href=""
                                class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ====== Table Two End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection