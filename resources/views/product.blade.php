@extends('_layouts.main') 

@section('content')
<!-- ===== Main Content Start ===== -->
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <h2 class="mb-7.5 mt-10 text-title-md2 font-bold text-black dark:text-white">
            Movie List
        </h2>

        <div class="grid grid-cols-1 gap-7.5 sm:grid-cols-2 xl:grid-cols-4">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-01.jpg" alt="Movies" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Jojo Adventure</a>
                    </h4>
                    <p class="font-medium">
                        Jojo's Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-02.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Noragami</a>
                    </h4>
                    <p class="font-medium">
                        Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-03.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Wind Breaker</a>
                    </h4>
                    <p class="font-medium">
                        Haruka Sakura wants nothing to do with weaklings—he's only interested in the strongest of the strong.
                    </p>
                </div>
            </div>

            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <a href="#" class="block px-4 pt-4">
                    <img class="object-cover h-60 w-96" src="src/images/movie/movie-04.jpg" alt="Cards" />
                </a>

                <div class="p-6 overflow-hidden">
                    <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                        <a href="#">Spy x Family</a>
                    </h4>
                    <p class="font-medium">
                        Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
