<!doctype html>
<html>

<head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title("|", true, "right"); ?>
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

<body <?php body_class(
  "flex flex-col min-h-screen antialiased bg-slate-50 dark:bg-slate-800 text-slate-800 dark:text-slate-300"
); ?>>
    <?php wp_body_open(); ?>



    <header class="fixed top-0 left-0 z-10 flex flex-row items-center justify-between w-full px-8 py-4 mb-12 transition-all duration-300 ease-in-out  border-b-0 shadow-none lg:py-6 
<?php echo is_front_page() ? "border-b-0" : "border-b border-slate-300/10"; ?>">
        <img src="{{Storage::url('img/logo.jpg')}}" alt="Logo" class="h-12 mr-4 lg:hidden">
        <h2 class="text-xl font-bold text-slate-800 dark:text-slate-100 lg:text-3xl">OSP Robakowo<span
                class="text-red-700">.</span></h2>
                <div class="flex flex-row-reverse items-center">
        <?php include get_template_directory() . "/inc/toggle_button.html"; ?>
        <?php wp_nav_menu([
          "theme_location" => "primary",
          "menu_class" =>
            "menu-header flex-row flex-wrap justify-end flex-grow list-none lg:flex dark:bg-slate-800/50 rounded-md p-2",
          "myMenu_liClass" => "px-4",
          "myMenu_aClass" =>
            "text-base font-medium text-slate-700 dark:text-slate-50 hover:text-red-600 dark:hover:text-red-600",
        ]); ?>
        </div>

    </header>

    <div class="flex-1">