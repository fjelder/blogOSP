<section id="remiza" class="stations">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid gap-10 lg:grid-cols-2">
          <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg lg:order-2">
              <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-red-50">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
              </div>
              <div class="max-w-xl mb-6">
                  <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                      <h2
                          class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                          <span class="inline-block mb-1 sm:mb-4">
                              Nasza
                              <span class="text-5xl text-red-700 underline">R</span>emiza<br
                                  class="hidden md:block" />
                              od projektu po budowę
                          </span>
                          <div
                              class="h-1 ml-auto duration-300 origin-left transform bg-red-accent-400 scale-x-30 group-hover:scale-x-100">
                          </div>
                      </h2>
                  </div>

                  <p class="text-base text-gray-700 md:text-lg">
                      Po więcej szczegółów dotyczących budowy Naszej nowej remizy zapraszamy już wkrótce.
                  </p>
              </div>
              <div>
                  <a href="/" aria-label=""
                      class="inline-flex items-center font-semibold transition-colors duration-200 cursor-not-allowed text-red-accent-400 hover:text-red-accent-700"
                      onclick="return false;">
                      Zobacz więcej
                      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                          <path
                              d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                          </path>
                      </svg>
                  </a>
              </div>
          </div>
          <div class="flex items-center justify-center -mx-4 lg:pl-8 lg:order-1">
              <div class="flex flex-col items-end px-3">
                  <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                      src="<?php echo get_template_directory_uri() . '/img/station_1.jpg'; ?>" alt="" />
                  <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                      src="<?php echo get_template_directory_uri() . '/img/station_3.jpg'; ?>" alt="" />
              </div>
              <div class="px-3">
                  <img class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80"
                      src="<?php echo get_template_directory_uri() . '/img/station_2.jpg'; ?>" alt="" />
              </div>
          </div>
      </div>
  </div>
</section>
