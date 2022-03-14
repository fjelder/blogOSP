<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <?php wp_head(); ?>
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
    </script>
</head>

<body <?php body_class('flex flex-col min-h-screen antialiased bg-slate-50 dark:bg-slate-800 text-slate-800 dark:text-slate-300'); ?>>
    <?php wp_body_open(); ?>



    <header
        class="fixed top-0 left-0 z-10 flex flex-row items-center justify-between w-full px-8 py-4 mb-12 transition-all duration-300 ease-in-out  border-b-0 shadow-none lg:py-6 
        <?php echo is_front_page() ? 'border-b-0' : 'border-b border-slate-300/10' ?>">
        <img src="{{Storage::url('img/logo.jpg')}}" alt="Logo" class="h-12 mr-4 lg:hidden">
        <h2 class="text-xl font-bold text-slate-800 dark:text-slate-100 lg:text-3xl">OSP Robakowo<span
                class="text-red-700">.</span></h2>
        <button id="theme-toggle" type="button"
            class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-slate-200 dark:focus:ring-slate-700 rounded-lg text-sm p-2.5">
            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu-header flex-row flex-wrap justify-end flex-grow list-none lg:flex dark:bg-slate-800/50 rounded-md p-2',
                    'myMenu_liClass' => 'px-4',
                    'myMenu_aClass' => 'text-base font-medium text-slate-700 dark:text-slate-50 hover:text-red-600 dark:hover:text-red-600'
                )
            );
        ?>




    </header>

    <div class="flex-1 pt-24 pb-12 mx-auto max-w-7xl">

    
    