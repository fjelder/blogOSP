<section id="zarzad" class="teams">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-red-50">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
      </svg>
    </div>

    <div class="flex flex-col items-center mb-6 lg:justify-between lg:flex-row md:mb-8">
      <h2
        class="max-w-2xl mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
        <span class="inline-block mb-1 sm:mb-4">
          <span class="text-5xl text-red-700">Z</span>arząd Ochotniczej
          <br class="hidden md:block" />
          Straży Pożarnej w Robakowie
        </span>
        <div
          class="h-1 ml-auto duration-300 origin-left transform bg-red-accent-400 scale-x-30 group-hover:scale-x-100">
        </div>
      </h2>
      <p class="max-w-xs text-base text-gray-700 md:text-lg">
        Zarząd wybrany głosami członków OSP na kadencję 2021/2026r.
      </p>
    </div>
    <?php if (is_active_sidebar('team-1')): ?>
    <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">
        <?php dynamic_sidebar('team-1');?>
    </div>
    <?php else: ?>
      <p class="text-center text-red-400">Brak zdefiniowanych członków zarządu.</p>
    <?php endif;?>
  </div>


</section>
