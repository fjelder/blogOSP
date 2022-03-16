<section id="news" class="news">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid gap-12 row-gap-8 lg:grid-cols-2">
            <div class="flex flex-col justify-center">
                <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                </div>
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2
                        class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                        <span class="inline-block mb-1 sm:mb-4">
                            <span class="text-5xl text-red-700">A</span>ktualności
                        </span>
                        <div
                            class="h-1 ml-auto duration-300 origin-left transform scale-x-30 bg-red-accent-400 group-hover:scale-x-100">
                        </div>
                    </h2>
                </div>

                <div class="grid gap-8 row-gap-8 sm:grid-cols-2">

                    <div>
                        <div class="flex items-center justify-between">
                            <h2 class="mb-2 font-semibold leading-5">
                                Zebranie Walne - sprawozdawcze
                            </h2>
                            <span class="text-xs font-medium text-gray-500">17.02.2022r.</span>
                        </div>
                        <p class="text-sm text-gray-900 lg:min-h-20">
                            Uwaga! Do wszytkich członków. W dniu 05 marca 2022r. w tymczasowej siedzibie Ochotniczej
                            Straży Pożarnej w Robakowie odbędzie się Zebranie Walne mające charater sprawozdawczy.
                        </p>
                        <a href="/walne-zebranie" aria-label=""
                            class="inline-flex items-center mt-2 text-base font-semibold transition-colors duration-200 text-red-accent-400 hover:text-red-accent-700">
                            Zobacz więcej
                            <x-heroicon-o-chevron-right class="h-4 ml-2" />
                        </a>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <h2 class="mb-2 font-semibold leading-5">
                                Szkolenia Strażaków
                            </h2>
                            <span class="text-xs font-medium text-gray-500">05.02.2022r.</span>
                        </div>

                        <p class="text-sm text-gray-900 lg:min-h-20">
                            Nasza Jednostka rozpoczeła szkolenie strażaków ochotników. Szkolenia mają formę teoretczną,
                            nie brakuje jednak również ćwiczeń praktycznych.
                        </p>
                        <a href="/szkolenia" aria-label=""
                            class="inline-flex items-center mt-2 text-base font-semibold transition-colors duration-200 text-red-accent-400 hover:text-red-accent-700">
                            Zobacz więcej
                            <x-heroicon-o-chevron-right class="h-4 ml-2" />
                        </a>
                    </div>

                </div>
            </div>
            <div>
                <img class="object-cover w-full h-56 rounded shadow-lg sm:h-96" src="<?php echo get_template_directory_uri() . '/img/news.jpg'; ?>" alt="" />
            </div>
        </div>
    </div>
</section>
