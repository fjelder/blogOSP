<?php
/* Template Name: Strona Domowa */
?>
<?php get_header() ?>

<section id="home" class="home" data-aos="fade-down">
    <div
        class="relative flex flex-col-reverse justify-center min-h-screen py-20 border-b shadow-md dark:border-slate-300/10 lg:py-16 lg:pt-0 lg:flex-col lg:pb-0">
        <div
            class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
            <svg class="absolute left-0 hidden h-full transform -translate-x-1/2 text-slate-100 dark:text-slate-700 lg:block"
                viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
            </svg>
            <?php if ( get_header_image() ) : ?>
            <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>"
                height="<?php echo esc_attr( get_custom_header()->height ); ?>"
                alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
            <?php endif; ?>
        </div>


        <img src="{{Storage::url('img/logo.jpg')}}" alt="Logo" class="absolute hidden h-52 bottom-10 left-12 lg:block">

        <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
            <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
                <?php dynamic_sidebar("home-1"); ?>

                <div class="flex items-center">
                    <a href="#news"
                        class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 bg-red-400 rounded shadow-md hover:bg-red-700 focus:shadow-outline focus:outline-none">
                        Aktualności
                    </a>
                    <div class="flex items-center mt-1 space-x-3">
                        <a href="https://www.facebook.com/Ochotnicza-Stra%C5%BC-Po%C5%BCarna-w-Robakowie-508009266665390/"
                            target="_blank" class="text-gray-500 transition-colors duration-300 hover:text-blue-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                        <a href="/" class="transition-colors duration-300 text-slate-500 hover:text-red-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mx-auto mt-24 mb-12 max-w-7xl">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php get_footer() ?>